<?php
// use \PDO;
// DB does all CRUD operations
// normal learning room do get set me

require_once "classes/models/LearningRoom.php";
require_once "classes/connect.php";

class LearningRoomDb extends Database
{
    public function __construct()
    {
    }

    public function ListAll()
    {
        $sql = "SELECT * FROM learning_rooms";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->execute();
        $learningrooms = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $learningrooms;
    }

    public function Add($LearningRoom)
    {
        $sql = "INSERT INTO learning_rooms (room_number,created_datetime) VALUES (:room_number,CURRENT_TIMESTAMP())";
        $pdostm = parent::getDb()->prepare($sql);
        $room_number = $LearningRoom->getRoomNumber();
        $pdostm->bindParam(':room_number', $room_number);        

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;

    }

    public function Update($learningRoom,$id)
    {
        $sql = "Update learning_rooms set room_number = :room_number where id= :id";
        $pdostm = parent::getDb()->prepare($sql);
   
        $getRoomNo = $learningRoom->getRoomNumber();
        $pdostm->bindParam(':room_number', $getRoomNo);
        $pdostm->bindParam(':id', $id);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM learning_rooms WHERE id = :id";

        $pst = parent::getDb()->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;
    }

    public function Get($room_number)
    {   
        $sql = "select * from learning_rooms where room_number = :room_number";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':room_number', $room_number);
        $pdostm->execute();
        $roomno = $pdostm->fetch(PDO::FETCH_OBJ);
        return $roomno;
    }
    public function Search($room_number)
    {
        $sql = "SELECT * FROM learning_rooms where room_number LIKE :room_number";
        $pdostm = parent::getDb()->prepare($sql);
        $searchKey = '%' . strtolower($room_number) . '%';
        $pdostm->bindParam(':room_number', $searchKey);
        $pdostm->execute();

        $learningRoom = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $learningRoom;
    }
}
