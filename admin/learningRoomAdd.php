<?php

    require_once "../database/LearningRoomDB.php";
    require_once "../database/classes/models/LearningRoom.php";

$errorRoom = "";
if(isset($_POST['roomAdd'])) {
    $roomNo = $_POST['roomNo'];
    
    if($roomNo === "" || $roomNo === null){
        $errorRoom = "Please enter a Room no";
    }else{

        $learningRoom = new LearningRoom($roomNo);  //passing data using get set
        $learningRoomDB = new LearningRoomDB();     //initializing CRUD operation
        // var_dump($learningRoomDB->Get($roomNo));        //passing Create->AddFunctn (getSetclass)
        $getroom = $learningRoomDB->Get($roomNo);        //passing Create->AddFunctn (getSetclass)
        if(is_bool($getroom)){
            // $errorRoom = "Room Added";
            ///passing Create->AddFunctn (getSetclass)   
            if($learningRoomDB->Add($learningRoom)){
                header("Location:LearningRoomList.php");
            }
        }else{
            $errorRoom = "Room already exists";
        }
    }
}
require_once "../includes/adminHeader.php";
?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Add Learning Room</span>
                                <div class="row">
                                    <form class="col s12" action="" method="post">
                                        <div class="row margin-bottom-none">
                                          
                                            <div class="input-field col s12">
                                                <input id="roomNo" name="roomNo" type="text" class="validate">
                                                <label for="roomNo">Room No</label>
                                                <span id="roomError" class="red-text"><?= $errorRoom; ?></span>
                                            </div>
                                                                                       
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" name="roomAdd" type="submit"
                                                        name="action">Add Room
                                                </button>
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="action">Clear
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
<?php require_once "../includes/adminFooter.php" ?>