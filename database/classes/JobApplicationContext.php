<?php
/*
    Created by : Priyanka Khadilkar
*/
require_once "connect.php";
require_once "models/JobApplication.php";

class JobApplicationContext extends Database
{
    public function __construct()
    {

    }

    public function Add($JobApplication)
    {

        $sql = "INSERT INTO job_applications (firstname, lastname, email,phone_number,resume_filename,job_id,applied_On) VALUES (:first_name,:last_name,:email,:phone_number,:resume_filename,:job_id,:applied_On)";
        $date = date('Y-m-d H:i:s');
        $pdostm = parent::getDb()->prepare($sql);

        $firstName = $JobApplication->getFirstName();
        $lastName = $JobApplication->getLastName();
        $email = $JobApplication->getEmail();
        $phoneNumber = $JobApplication->getPhoneNumber();
        $jobId = (int)$JobApplication->getJobId();
        $resumeFileName = $JobApplication->getResumeFileName();

        $pdostm->bindParam(':first_name', $firstName);
        $pdostm->bindParam(':last_name', $lastName);
        $pdostm->bindParam(':email', $email);
        $pdostm->bindParam(':phone_number', $phoneNumber);
        $pdostm->bindParam(':resume_filename', $resumeFileName);
        $pdostm->bindParam(':job_id', $jobId);
        $pdostm->bindParam(':applied_On', $date);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;
    }

    public function ListAll()
    {
        $sql = "select j.id,j.firstname,j.lastname,j.email,j.job_id,jp.title,j.phone_number,j.resume_filename from job_applications j inner join job_post jp on j.job_id=jp.id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->execute();
        $jobApplications = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $jobApplications;
    }

    public function GetById($id)
    {
        $sql = "select j.id,j.firstname,j.lastname,j.email,j.job_id,jp.title,j.phone_number,j.resume_filename from job_applications j inner join job_post jp on j.job_id=jp.id where j.id = :id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();
        $jobopenings = $pdostm->fetch(PDO::FETCH_OBJ);
        return $jobopenings;
    }
}