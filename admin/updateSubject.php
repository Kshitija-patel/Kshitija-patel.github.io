<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Update Subject Information</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div>
                                                <p for="sub-update-title">Subject:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Subject Name">
                                            </div>
                                            <form action="#">
                                                <div class="file-field input-field add-contact-form">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Image">
                                                    </div>
                                                </div>
                                            </form>
                                            <div>
                                                <p for="sub-update-title">Field:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Field Name">
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Description:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Description">
                                            </div>
                                            
                                            <div class="add-contact-flex">
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn " href="#">Update</a>
                                                </div>
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn " href="showSubject.php">Cancel</a>
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
<?php require_once "../includes/adminFooter.php" ?>