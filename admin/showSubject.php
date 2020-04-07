<?php
    require_once "../includes/adminHeader.php";
    require_once "../database/classes/connect.php";
    require_once "../database/classes/SubjectContext.php";
    // replace karvu padse GET
        $id = $_POST['id'];
        $db = Database::getDb();

        $s = new SubjectContext();   
        $subjects = $s->getSubject($id);

        // var_dump($subjects); 
        
    foreach($subjects as $subject){
   
?>
<main>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                        <h2 class="show-sub-title"><?= $subject["title"]?></h2>
                            <div class="add-contact-flex">
                                <div class="show-sub">
                                    <strong>Field: </strong><?= $subject["subject_field"]?><br/>
                                    <strong>Description: </strong><?= $subject["description"]?><br/>
                                </div>
                            </div>
                            <div class="add-contact-flex">
                                <form action="updateSubject.php" method="post">
                                    <input type="hidden" name="id" value="<?= $subject["id"] ?>"/>
                                    <input type="submit" class="button btn btn-primary" name="updateSubject" value="Update"/>
                                </form>
                                <div>
                                    <a class="waves-effect waves-light btn add-contact-btn " href="listSubjects.php">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php }?>
    
<?php require_once "../includes/adminFooter.php" ?>