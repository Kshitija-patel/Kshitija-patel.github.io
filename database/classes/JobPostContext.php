<?php
/*
    Created by : Priyanka Khadilkar
*/
require_once "connect.php";
require_once "models/JobPost.php";

class JobPostContext extends Database
{
    public function __construct()
    {
    }

    public function ListAll()
    {
        $sql = "SELECT * FROM job_post";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->execute();

        $jobopenings = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $jobopenings;

    }

    public function Search($searchKey)
    {
        $sql = "SELECT * FROM job_post where LOWER(title) LIKE :searchKey";
        $pdostm = parent::getDb()->prepare($sql);
        $searchKey = '%' . strtolower($searchKey) . '%';
        $pdostm->bindParam(':searchKey', $searchKey);
        $pdostm->execute();

        $jobOpenings = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $jobOpenings;
    }

    public function Add($JobPost)
    {
        $sql = "INSERT INTO job_post (title, description, created_datetime) VALUES (:jobtitle, :jobdescription, :createdDatetime)";
        $date = date('Y-m-d H:i:s');
        $pdostm = parent::getDb()->prepare($sql);
        $JobTitle = $JobPost->getJobTitle();
        $JobDesc = $JobPost->getJobDescription();
        $pdostm->bindParam(':jobtitle', $JobTitle);
        $pdostm->bindParam(':jobdescription', $JobDesc);
        $pdostm->bindParam(':createdDatetime', $date);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;

    }

    public function Update($JobPost, $id)
    {
        $sql = "Update job_post set title = :jobtitle, description = :jobdescription where id= :id";
        $pdostm = parent::getDb()->prepare($sql);
        $JobTitle = $JobPost->getJobTitle();
        $JobDesc = $JobPost->getJobDescription();
        $pdostm->bindParam(':jobtitle', $JobTitle);
        $pdostm->bindParam(':jobdescription', $JobDesc);
        $pdostm->bindParam(':id', $id);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;

    }

    public function Delete($id)
    {
        $sql = "DELETE FROM job_post WHERE id = :id";

        $pst = parent::getDb()->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

    public function Get($id)
    {
        $sql = "select * from job_post where id = :id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();
        $jobOpening = $pdostm->fetch(PDO::FETCH_OBJ);
        return $jobOpening;

    }


}
