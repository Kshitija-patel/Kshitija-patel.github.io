<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Update User Information</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div>
                                                <p for="sub-update-title">First Name:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="First Name">
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Last Name:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Last Name">
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Email:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Email">
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Phone:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Phone">
                                            </div>
                                            <div>
                                                <p for="sub-update-title">Date of Birth:</p>
                                                <input id="sub-update-title" type="text" class="add-contact-form" placeholder="Date of Birth">
                                            </div>
                                            <div>
                                                <p>Gender</p>
                                                <select>
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                            <div class="add-contact-flex">
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn " href="#">Update</a>
                                                </div>
                                                <div>
                                                    <a class="waves-effect waves-light btn add-contact-btn " href="listUsers.php">Cancel</a>
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