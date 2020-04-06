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
}
