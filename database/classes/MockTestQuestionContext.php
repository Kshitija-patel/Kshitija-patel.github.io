<?php

require_once "connect.php";
require_once "SubjectContext.php";
require_once "TutorContext.php";

class MockTestQuestionContext extends Database
{
    public function __construct()
    {
    }

    public function getMockTestQuestions($questionID = null, $searchVal = null, $subjectID = null, $tutorID = null)
    {
        $sql = "select * from mock_questions ";
        $pdostm = parent::getDb()->prepare($sql);
        $where = false;
        if($questionID != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " id = :mock_question_id";
            $where = true;
        }
        if($searchVal != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " question like '%$searchVal%'"; 
            $where = true;
        }
        if($subjectID != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " subject_id = :subject_id"; 
            $where = true;
        }
        if($tutorID != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " tutor_id = :tutor_id"; 
            $where = true;
        }
        $pdostm = parent::getDb()->prepare($sql);
        if($questionID != null) {
            $pdostm->bindParam(':mock_question_id', $questionID); 
        }
        if($subjectID != null) {
            $pdostm->bindParam(':subject_id', $subjectID);  
        }
        if($tutorID != null) {
            $pdostm->bindParam(':tutor_id', $tutorID);  
        }

        $pdostm->execute();
        $mockQuestions = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        $tutor = new TutorContext();
        $subject = new SubjectContext();
        for ($index=0; $index < count($mockQuestions); $index++)
        {
            $mockQuestions[$index]['tutor'] = $tutor->getTutor($mockQuestions[$index]['tutor_id']);
            $mockQuestions[$index]['subject'] = $subject->getSubject($mockQuestions[$index]['subject_id']);
            $mockQuestions[$index]['options'] = self::getMockTestQuestionOptions($mockQuestions[$index]['id']);       
        }
        if($questionID != null) { 
            return $mockQuestions[0];
        } else {
            return $mockQuestions;
        }
    }

    public function getAnswerOfTheQuestion($questionID) {
        $sql = "select answer from mock_questions where id = :id";
        $pdostm =  parent::getDb()->prepare($sql);
        $pdostm->bindParam(':id', $questionID); 
        $pdostm->execute();
        return $pdostm->fetch(PDO::FETCH_ASSOC);
    }

    public function getMockTestQuestionOptions($questionID, $optionID = null) {
        $sql = "select * from mock_questions_options where mock_question_id = :id";
        if($optionID != null) {
            $sql = "select * from mock_questions_options where id = :id";
        }
        $pdostm =  parent::getDb()->prepare($sql);
        $id = ($optionID != null) ? $optionID : $questionID;
        $pdostm->bindParam(':id', $id); 
        $pdostm->execute();
        $options = null;
        if($optionID == null) {
            $options = $pdostm->fetchAll(PDO::FETCH_ASSOC);
            for($i = 0; $i < count($options); $i++) {
                $question = self::getAnswerOfTheQuestion($options[$i]['mock_question_id']);
                $options[$i]['isAnswer'] = ($question['answer'] == $options[$i]['id']) ? true : false;
            }
        } else {
            $options = $pdostm->fetch(PDO::FETCH_ASSOC);
            $question = self::getAnswerOfTheQuestion($options['mock_question_id']);
            $options['isAnswer'] = ($question['answer'] == $options['id']) ? true : false;
        }
        return $options;
    }

    public function addUpdateMockTestQuestion($values, $questionID = null) {
        $datetime = (string) date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO mock_questions(tutor_id, subject_id, question, marks, created_datetime) VALUES (:tutor_id, :subject_id, :question, :marks, :created_datetime)";
        $pdostm = parent::getDb()->prepare($sql);
        if($questionID != null) {
            $sql = "UPDATE mock_questions SET tutor_id=:tutor_id,subject_id=:subject_id,question=:question,marks=:marks,updated_datetime=:updated_datetime where id = :questionID";
            $pdostm = parent::getDb()->prepare($sql);
            $pdostm->bindParam(':questionID', $questionID); 
            $pdostm->bindParam(':updated_datetime', $datetime);
        } else {
            $pdostm->bindParam(':created_datetime', $datetime);
        }
        echo "UPDATE mock_questions SET tutor_id=".$values['tutor'].",subject_id=".$values['subject'].",question=".$values['questionValue'].",marks=".$values['marks'].",updated_datetime=".$datetime." where id = ".$questionID;
        $pdostm->bindParam(':tutor_id', $values['tutor']); 
        $pdostm->bindParam(':subject_id', $values['subject']); 
        $pdostm->bindParam(':question', $values['questionValue']); 
        $pdostm->bindParam(':marks', $values['marks']); 
        $pdostm->execute();
    }

    public function deleteMockTestQuestion($questionID) {
        $options = self::getMockTestQuestionOptions($questionID);
        foreach($options as $option) {
            self::deleteMockTestOption($option['id']);
        }
        $sql = "delete from mock_questions where id = :question_id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':question_id', $questionID);
        $pdostm->execute();
    }

    public function addUpdateMockTestOption($values, $optionID = null) {
        $datetime = (string) date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO mock_questions_options(mock_question_id, option_value, created_datetime) VALUES (:questionID, :optionValue, :created_datetime)";
        $pdostm = parent::getDb()->prepare($sql);
        if($optionID != null) {
            $sql = "UPDATE mock_questions_options SET option_value=:optionValue, mock_question_id=:questionID, updated_datetime=:updated_datetime where id = :optionID";
            $pdostm = parent::getDb()->prepare($sql);
            $pdostm->bindParam(':optionID', $optionID); 
            $pdostm->bindParam(':updated_datetime', $datetime);
        } else {
            $pdostm->bindParam(':created_datetime', $datetime);
        }
        $pdostm->bindParam(':optionValue', $values['optionValue']);
        $pdostm->bindParam(':questionID', $values['questionID']);  
        $pdostm->execute();

        if(isset($values['isAnswer']) && $optionID != null) {
            $sql = "UPDATE mock_questions SET answer=:answer WHERE id = :questionID";
            $pdostm = parent::getDb()->prepare($sql);
            $pdostm->bindParam(':answer', $optionID);
            $pdostm->bindParam(':questionID', $values['questionID']);
            $pdostm->execute();
        } else if(!isset($values['isAnswer']) && $optionID != null) {
            $question = self::getAnswerOfTheQuestion($values['questionID']);
            if($question['answer'] == $optionID) {
                $sql = "UPDATE mock_questions SET answer=NULL WHERE id = :questionID";
                $pdostm = parent::getDb()->prepare($sql);
                $pdostm->bindParam(':questionID', $values['questionID']);
                $pdostm->execute();
            }
        }
    }

    public function deleteMockTestOption($optionID) {
        $sql = "delete from mock_questions_options where id = :option_id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':option_id', $optionID);
        $pdostm->execute();
    }
}
