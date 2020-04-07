<?php 
    require_once "../includes/adminHeader.php";
    require_once "../database/classes/connect.php";
    require_once "../database/classes/SubjectContext.php";

    if(isset($_GET['action'])){
        if($_GET['action']=="delete" && isset($_GET['id'])){
            $id = $_GET['id'];
        }
    }

    $db = Database::getDb();
    $noSubject = "";
    
    $s = new SubjectContext();
    $subjects = $s->getAllSubjects($db);

    if(isset($_POST['deleteSubject'])){
        $id = $_POST["id"];

        $s = new SubjectContext();
        $numRowsAffected = $s->deleteSubject($id,$db);

        if($numRowsAffected){
            $subjects = $s->getAllSubjects($db);
        } else{
            echo "Problem in Deleting!!";
        }
    }

    if(isset($_POST["searchContactBtn"])){
        $searchKey = $_POST["subjectSearch"];
        $subjects = $s->Search($searchKey,$db);
        if(!$subjects){
            $noSubject = "<tr><td colspan=2>Sorry!! No Subject Found!!</td></tr>";
        }
    }

?>
    <main class="adminmain admin-mock-tests">
        <div class="section no-pad-bot" id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">List of Subjects</h5>
                </div>
                <div class="row">
                    <form>
                        <div class="input-field col s12 m12 l4">
                            <input id="subjectSearch" type="text" class="validate search-box">
                            <label for="subjectSearch" class="serach-label">Search subjects...</label>
                        </div>
                        <div class="input-field col s12 m12 l3">
                            <select class="browser-default">
                                <option value="" disabled selected>Select Field</option>
                                <option value="WebDevelopment">Web Development </option>
                                <option value="WebDesign">Web Design</option>
                                <option value="ITSolution">IT Solution</option>
                                <option value="GameProgramming">Game Programming</option>
                                <option value="ProjectManagement">Project Management</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m12 l3">
                            <select class="browser-default">
                                <option value="" disabled selected>Select Subject</option>
                                <option value="WebProgramming">Web Programming</option>
                                <option value="XML">XML</option>
                                <option value="SecurityAndQuality">Security And Quality</option>
                                <option value="WebProduction">Web Production</option>
                                <option value="OperatingSystems">Operating Systems</option>
                                <option value="JavaProgramming">Java Programming</option>
                                <option value="Database">Database</option>
                                <option value="GameConcepts">Game Concepts</option>
                                <option value="GameDesign">Game Design</option>
                                <option value="ProjectCommunications">Project Communications</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m12 l2">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Search
                                <i class="material-icons right">search</i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="direction-top">
                                    <a title="Add Leaning Material" href="addSubject.php" class="btn-floating btn-large green floatright">
                                        <i class="large material-icons">add</i>
                                    </a>
                                </div>
                                

                                <div class="row sub-list">
                                <?php
                                    echo $noSubject;
                                    foreach($subjects as $subject){
                                ?>
                                    <div class="col s12 m6 l4">
                                        <div class="card">
                                            <div class="card-content">
                                           
                                                <span class="card-title"><?= $subject["title"]?></span>
                                                <p>Field:<strong><?= $subject["subject_field"]?></strong></p>
                                                <p class="small-text"><?= $subject["description"]?></p>
                                                 <!-- source link: "https://www.britannica.com/sc   ience/physics-science" -->
                                            </div>
                                            <div class="card-action add-contact-flex">
                                                <form action="showSubject.php" method="post">
                                                    <input type="hidden" name="id" value="<?= $subject["id"] ?>"/>
                                                    <input type="submit" class="small-text" name="updateStudent" value="View"/>
                                                </form>
                                                <!-- <a href="showSubject.php" class="small-text">View</a> -->
                                                <?php 
                                                     $id = "id".$subject["id"]; 
                                                ?>
                                                 <a class='modal-trigger cursor-pointer' href='#<?=$id?>'>
                                                <i class='material-icons red-text'>delete</i>
                                            </a>
                                            </div>
                                            <div id='id<?=$subject["id"]?>' class='modal modal-learning-popup'>
                                        <div class='modal-content'>
                                        <h4>Are you sure?</h4>
                                        <p>Do you really want to delete this subject?</p>
                                        </div>
                                        <div class='modal-footer-LearningRoom'>
                                            <form method="post">
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id" value="<?=$subject["id"];?>">
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-white btn-flat">Close</a>
                                                    <button class="btn waves-effect waves-light delete-btn-learningRoom"
                                                            type="submit" name="deleteSubject">Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                                <ul class="pagination">
                                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a>
                                    </li>
                                    <li class="red"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!">
                                        <i class="material-icons">chevron_right</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once "../includes/adminFooter.php" ?>