<?php
require_once "../includes/adminHeader.php";

    require_once "../database/LearningRoomDb.php";
    require_once "../database/classes/models/LearningRoom.php";

    if(isset($_GET['action'])){
		if($_GET['action']=="delete" && isset($_GET['id'])){
            $id = $_GET['id'];
		}
    }
    $noRooms ="";
    $addUpdateMsg = "";
    $learningRoomDb = new LearningRoomDb();     //
    $Room = $learningRoomDb->ListAll();

    
    if (isset($_POST["deleteRoom"])) {
        $roomid = $_POST["learningRoomId"];
        // echo $_POST["learningRoomId"];

        $learningRoomDb = new LearningRoomDb();
        $numRowsAffected = $learningRoomDb->Delete($roomid);
        
        if ($numRowsAffected) {
            $learningRoomDb = new LearningRoomDb();
            $Room = $learningRoomDb->ListAll();
        } else {
            echo "Problem in Deleting!!";
        }
    }
       
    if (isset($_POST["searchRoomBtn"])) {
        $searchKey = $_POST["roomsearch"];
        $learningRoomDb = new LearningRoomDb();
        $Room = $learningRoomDb->Search($searchKey);
        if(!$Room){
            $noRooms = "<tr><td colspan=2>Sorry!! No rooms found!!</td></tr>";
        }
    }
           
?>
    <main class="adminmain admin-mock-tests">
        <div class="section no-pad-bot" id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">Learning Rooms</h5>
                    
                </div>
                <div class="row">
                    <form method="post">
                        <div class="input-field col s12 m12 l4">
                            <input id="roomsearch" type="text" name="roomsearch" class="validate search-box">
                            <label for="roomsearch" class="serach-label">Search learning Rooms...</label>
                        </div>
                        <div class="input-field col s12 m12 l2">
                            <button class="btn waves-effect waves-light" type="submit" name="searchRoomBtn">Search
                                <i class="material-icons right">search</i>
                            </button>
                        </div>
                    </form>
                <span><?=$addUpdateMsg;?></span>
                </div>
                
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="direction-top">
                                    <a title="Add Learning Material" href="learningRoomAdd.php" class="btn-floating btn-large green floatright">
                                        <i class="large material-icons">add</i>
                                    </a>
                                </div>
                                <table class="responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Room No</th>
                                        <th>Created On</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    echo $noRooms;
                                    foreach($Room as $value){?>
                                        <!-- echo " -->
                                    <tr>
                                        <td><?=$value->room_number?></td>
                                        <td><?=$value->created_datetime?></td>
                                        <td>
                                            <a href='LearningRoomEdit.php?id=<?=$value->id?>' name='edit_room'><i class='material-icons blue-text'>create</i></a>

                                            <?php $roomid = "roomid".$value->id; ?> <!-- for storing rooom id for transfer to modal pop up-->

                                            <a class='modal-trigger cursor-pointer' href='#<?=$roomid?>'>
                                                <i class='material-icons red-text'>delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!--  -->
                                    <!--- modal pop up for delete --->
                                    <div id='roomid<?=$value->id?>' class='modal modal-learning-popup'>
                                        <div class='modal-content'>
                                        <h4>Are you sure?</h4>
                                        <p>Do you really want to delete this room?</p>
                                        </div>
                                        <div class='modal-footer-LearningRoom'>
                                            <form method="post">
                                                <div class="modal-footer">
                                                    <input type="hidden" name="learningRoomId" value="<?=$value->id;?>">
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-white btn-flat">Close</a>
                                                    <button class="btn waves-effect waves-light delete-btn-learningRoom"
                                                            type="submit" name="deleteRoom">Delete
                                                    </button>
                                                </div>
                                            </form>
                                            <!-- <a href='LearningRoomList?action=delete&id=<?=$value->id?>' name="nom" class=" ">Delete</a> -->
                                            <!-- <span class="delete-btn-learningRoom waves-effect waves-light btn-small"></span> -->
                                            <!-- <a href="#!" class="modal-action modal-close waves-effect waves-white btn-flat">Close</a> -->
                                        </div>
                                    </div>
                                <?php }  ?>
                                     
                                     
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a>
                                    </li>
                                    <li class="red"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i
                                                    class="material-icons">chevron_right</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
         //}
 require_once "../includes/adminFooter.php" ?>