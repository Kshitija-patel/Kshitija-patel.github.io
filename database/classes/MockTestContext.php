<?php

require_once "connect.php";
require_once "SubjectContext.php";
require_once "TutorContext.php";

class MockTestContext extends Database
{
    public function __construct()
    {
    }

    public function getMockTests($questionID = null, $searchVal = null, $subjectID = null, $tutorID = null)
    {
        $sql = "select * from mock_tests ";
        $pdostm = parent::getDb()->prepare($sql);
        $where = false;
        if($questionID != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " id = :mock_test_id";
            $where = true;
        }
        if($searchVal != null) {
            $sql .= ($where ? " AND " : " WHERE ") . " title like '%$searchVal%'"; 
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
            $pdostm->bindParam(':mock_test_id', $questionID); 
        }
        if($subjectID != null) {
            $pdostm->bindParam(':subject_id', $subjectID);  
        }
        if($tutorID != null) {
            $pdostm->bindParam(':tutor_id', $tutorID);  
        }

        $pdostm->execute();
        $mockTests = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        $tutor = new TutorContext();
        $subject = new SubjectContext();
        for ($index=0; $index < count($mockTests); $index++)
        {
            $mockTests[$index]['tutor'] = $tutor->getTutor($mockTests[$index]['tutor_id']);
            $mockTests[$index]['subject'] = $subject->getSubject($mockTests[$index]['subject_id']);
            $mockTests[$index]['questions'] = self::getMockTestQuestions($mockTests[$index]['id']);
            $totalMarks = 0;
            foreach($mockTests[$index]['questions'] as $question) {
              $totalMarks += (int) $question['marks'];
            }
            $mockTests[$index]['marks'] = $totalMarks;
        }
        if($questionID != null) { 
            return $mockTests[0];
        } else {
            return $mockTests;
        }
    }

    public function getMockTestQuestions($mockTestId) {
      $sql = "select * from mock_test_x_questions, mock_tests, mock_questions WHERE mock_test_x_questions.mock_test_id = mock_tests.id AND mock_test_x_questions.mock_test_id = :mock_test_id AND mock_test_x_questions.mock_question_id = mock_questions.id";
      $pdostm = parent::getDb()->prepare($sql);
      $pdostm->bindParam(':mock_test_id', $mockTestId);  
      $pdostm->execute();
      $mockQuestions = $pdostm->fetchAll(PDO::FETCH_ASSOC);
      return $mockQuestions;
    }

    public function filterMockTestQuestions($allQuestions, $mockTestQuestions, $subjectID) {
        foreach($allQuestions as $allQuestionsKey => $allQuestionsValue)
        { 
            if($allQuestionsValue['subject']['id'] != $subjectID || $allQuestionsValue['answer'] == NULL) {
                unset($allQuestions[$allQuestionsKey]);
                continue;
            }
            foreach($mockTestQuestions as $mockTestQuestionsKey => $mockTestQuestionsValue)
            { 
                if($mockTestQuestionsValue['id'] == $allQuestionsValue['id']) {
                    unset($allQuestions[$allQuestionsKey]);
                }
            }  
        } 
        return $allQuestions;
    }

    public function addQuestionMockTest($questionID, $mockTestID) {
        $sql = "INSERT INTO `mock_test_x_questions`(`mock_test_id`, `mock_question_id`) VALUES (:mock_test_id, :mock_question_id)";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':mock_test_id', $mockTestID);  
        $pdostm->bindParam(':mock_question_id', $questionID);  
        $pdostm->execute();
    }

    public function deleteMockTestQuestion($questionID, $mockTestID) {
        $sql = "DELETE FROM `mock_test_x_questions` WHERE mock_test_id = :mock_test_id AND mock_question_id = :mock_question_id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':mock_test_id', $mockTestID);  
        $pdostm->bindParam(':mock_question_id', $questionID); 
        $pdostm->execute();
    }

    public function addUpdateMockTest($values, $testID = null) {
        $datetime = (string) date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO mock_tests(tutor_id, subject_id, title, created_datetime) VALUES (:tutor_id, :subject_id, :title, :created_datetime)";
        $pdostm = parent::getDb()->prepare($sql);
        if($testID != null) {
            $sql = "UPDATE mock_tests SET tutor_id=:tutor_id, subject_id=:subject_id, title=:title,updated_datetime=:updated_datetime where id = :testID";
            $pdostm = parent::getDb()->prepare($sql);
            $pdostm->bindParam(':testID', $testID); 
            $pdostm->bindParam(':updated_datetime', $datetime);
        } else {
            $pdostm->bindParam(':created_datetime', $datetime);
        }
        $pdostm->bindParam(':tutor_id', $values['tutor']); 
        $pdostm->bindParam(':subject_id', $values['subject']); 
        $pdostm->bindParam(':title', $values['title']);
        $pdostm->execute();
    }

    public function deleteMockTest($testID) {
        $sql = "DELETE FROM `mock_test_x_questions` WHERE mock_test_id = :mock_test_id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':mock_test_id', $testID);  
        $pdostm->execute();

        $sql = "DELETE FROM `mock_tests` WHERE id = :mock_test_id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':mock_test_id', $testID);  
        $pdostm->execute();
    }
}
