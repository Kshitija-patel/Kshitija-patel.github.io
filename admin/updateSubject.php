<?php
 
//  include_once "../database/classes/connect.php";
 include_once "../database/classes/SubjectContext.php";

 $title = $subjectField = $description = "";
 $titleErr = $subjectFieldErr = $descriptionErr = "";

 if(isset($_POST['updateSubject'])){
    $id = $_POST['id'];
    $db = Database::getDb();
    $s = new SubjectContext();   
    $subject = $s->getSubject($id);
    // var_dump($subject);
    $title = $subject["title"];
    $subjectField = $subject["subject_field"];
    $description = $description["description"];
 }

 if(isset($_POST["update"])){
     $id = $_POST['id'];
     $title = $_POST['title'];
     $subjectField = $_POST['subject_field'];
     $description = $_POST['description'];

     $db = Database::getDb();
     $s = new SubjectContext();
     $count = $s->updateSubject($id, $title, $subjectField, $description,$db);

     if($count){
         header("Location: showSubject.php?id=$id");
     } else {
         echo "problem";
     }

     if(empty($_POST["title"])){
         $titleErr = "Title is required";
     } else {
         $title = check_input($_POST["title"]);
     }

     if(empty($_POST["subject_field"])){
         $subjectFieldErr = "Subject field is required";
     } else {
         $subjectField = check_input($_POST["subject_field"]);
     }

     if(empty($_POST["description"])){
         $descriptionErr = "Description is required";
     } else {
         $description = check_input($_POST["description"]);
     }
}

    function check_input($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    
        

        
        
   
   
?> 
<?php include_once "../includes/adminHeader.php";?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Update Subject Information</span>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input type="hidden" name="id" value="<?= $id;?>" />
                                        <div class="row margin-bottom-none">
                                            <div>
                                                <p for="sub-update-title">Subject:</p>
                                                <input id="sub-update-title" name="title" value="<?= $title;?>" type="text" class="add-contact-form" placeholder="Subject Name">
                                                <span class="add-contact-error">*<?php echo $titleErr;?></span>
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Field:</p>
                                                <input id="sub-update-title" name="subject_field" value="<?= $subjectField;?>" type="text" class="add-contact-form" placeholder="Field Name">
                                                <span class="add-contact-error">*<?php echo $subjectFieldErr;?></span>
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Description:</p>
                                                <input id="sub-update-title" name="description" value="<?= $description;?>" type="text" class="add-contact-form" placeholder="Description">
                                                <span class="add-contact-error">*<?php echo $descriptionErr;?></span>
                                            </div>
                                            
                                            <div class="add-contact-flex">
                                                <div>
                                                    <button class="btn waves-effect waves-light contact-submit" type="submit" name="update">Update
                                                    </button>
                                                </div>
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn" href="showSubject.php">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
   
require_once "../includes/adminFooter.php" 
?>