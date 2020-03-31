<?php
require_once "connect.php";

class SubjectContext extends Database
{
    public function __construct()
    {
    }

    public function getSubject($subjectID)
    {
      $sql = "select * from subjects where id = :subject_id";
      $pdostm =parent::getDb()->prepare($sql);
      $pdostm->bindParam(':subject_id', $subjectID); 
      $pdostm->execute();
      $subject = $pdostm->fetch(PDO::FETCH_ASSOC);
      return $subject;
    }

    public function getAllSubjects()
    {
      $sql = "select * from subjects";
      $pdostm =parent::getDb()->prepare($sql);
      $pdostm->execute();
      $subjects = $pdostm->fetchAll(PDO::FETCH_ASSOC);
      return $subjects;
    }

}
