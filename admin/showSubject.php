<?php require_once "../includes/adminHeader.php" ?>
<main>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                        <h2 class="show-sub-title">Subject Name</h2>
                            <div class="add-contact-flex">
                                <div>
                                    <img src="images/subject1.png">
                                    <p>Subject Image</p>
                                </div>
                                <div class="show-sub">
                                    <strong>Field: </strong> Field Name <br/>
                                    <strong>Description: </strong> Field Description <br/>
                                    <strong>Tutors : </strong> Tutors teaching this subject
                                </div>
                            </div>
                            <div class="add-contact-flex">
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn " href="updateSubject.php">Update</a>
                                                </div>
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

    
<?php require_once "../includes/adminFooter.php" ?>