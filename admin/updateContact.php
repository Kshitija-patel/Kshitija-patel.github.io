    <?php
    /* Developer : Maitri Modi
    * This file is for updating contact details,
    * Only Admin can update the contact details
    */ 
        require_once '../vendor/autoload.php';
        // require_once '../database/classes/connect.php';
        // require_once '../database/classes/ContactContext.php';
        $heading = $description = $emailTitle = $email = $phoneTitle = $phone = $addressTitle = $address = $latitude = $longitude = $userNameTitle = $userPhoneTitle = $userEmailTitle = $subjectTitle = $messageTitle = "";
        $headingErr = $descriptionErr = $emailTitleErr = $emailErr = $phoneTitleErr = $phoneErr = $addressTitleErr = $addressErr = $latitudeErr = $longitudeErr = $userNameTitleErr = $userPhoneTitleErr = $userEmailTitleErr = $subjectTitleErr = $messageTitleErr = "";

        if(isset($_POST['updateContact'])){
            $id = $_POST['id'];
            $db = Database::getDb();

            $c  = new Contact();
            $contact = $c->getContactById($id,$db);

            $heading = $contact->heading;
            $description = $contact->description;
            $emailTitle = $contact->email_title;
            $email = $contact->email;
            $phoneTitle =$contact->phone_title;
            $phone = $contact->phone;
            $addressTitle =  $contact->address_title;
            $address = $contact->address;
            $latitude = $contact->latitude;
            $longitude = $contact->longitude;
            $userNameTitle = $contact->user_name_title;
            $userPhoneTitle = $contact->user_phone_title;
            $userEmailTitle =  $contact->user_email_title;
            $subjectTitle = $contact->subject_title;
            $messageTitle = $contact->message_title;

        }
        if(isset($_POST["update"])){
            $id = $_POST['id'];
            $heading = $_POST['heading'];
            $description = $_POST['description'];
            $emailTitle  = $_POST['email-title'];
            $email = $_POST['email'];
            $phoneTitle = $_POST['phone-title'];
            $phone = $_POST['phone'];
            $addressTitle = $_POST['address-title'];
            $address = $_POST['address'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $userNameTitle = $_POST['user-name-title'];
            $userPhoneTitle = $_POST['user-phone-title'];
            $userEmailTitle =  $_POST['user-email-title'];
            $subjectTitle = $_POST['subject-title'];
            $messageTitle = $_POST['message-title'];

            $db = Database::getDb();
            $c =  new Contact();
            $count  = $c->updateContact($id, $heading, $description, $emailTitle, $email, $phoneTitle, $phone, $addressTitle, $address, $latitude, $longitude, $userNameTitle, $userPhoneTitle, $userEmailTitle, $subjectTitle, $messageTitle, $db);

            if($count){
                header('Location: showContact.php');
            } else {
                echo "problem";
            }
        
            if(empty($_POST["heading"])){
                $headingErr = "Heading is required";
            } else {
                $heading = check_input($_POST["heading"]);
            }
            
            if(empty($_POST["description"])){
                $descriptionErr = "Description is required";
            } else {
                $description = check_input($_POST["description"]);
            }

            if(empty($_POST["email-title"])){
                $emailTitleErr = "Email title is required";
            } else {
                $emailTitle = check_input($_POST["email-title"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = check_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST["phone-title"])){
                $phoneTitleErr = "Phone title is required";
            } else {
                $phoneTitle = check_input($_POST["phone-title"]);
            }

            if(empty($_POST["phone"])){
                $phoneErr = "Phone is required";
            } else {
                $phone = check_input($_POST["phone"]);
                if(!preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{4}/', $phone)){
                    $phoneErr = "Invalid phone number";
                }
            }

            if(empty($_POST["address-title"])){
                $addressTitleErr = "Address title is required";
            } else {
                $addressTitle = check_input($_POST["address-title"]);
            }

            if(empty($_POST["address"])){
                $addressErr = "Address is required";
            } else {
                $address = check_input($_POST["address"]);
            }

            if(empty($_POST["latitude"])){
                $latitudeErr = "Latitude is required";
            } else {
                $latitude = check_input($_POST["latitude"]);
            }
            
            if(empty($_POST["longitude"])){
                $longitudeErr = "Longitude is required";
            } else {
                $longitude = check_input($_POST["longitude"]);
            }

            if(empty($_POST["user-name-title"])){
                $userNameTitleErr = "User name title is required";
            } else {
                $userNameTitle = check_input($_POST["user-name-title"]);
            }

            if(empty($_POST["user-phone-title"])){
                $userPhoneTitleErr = "User phone title is required";
            } else {
                $userPhoneTitle = check_input($_POST["user-phone-title"]);
            }

            if(empty($_POST["user-email-title"])){
                $userEmailTitleErr = "User email title is required";
            } else {
                $userEmailTitle = check_input($_POST["user-email-title"]);
            }

            if(empty($_POST["subject-title"])){
                $subjectTitleErr = "Subject title is required";
            } else {
                $subjectTitle = check_input($_POST["subject-title"]);
            }

            if(empty($_POST["message-title"])){
                $messageTitleErr = "Message title is required";
            } else {
                $messageTitle = check_input($_POST["message-title"]);
            }

           
        }

        function check_input($input){
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
    ?>
    <?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Update Contact Information</span>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input type="hidden" name="id" value="<?= $id;?>" />
                                        <div class="row margin-bottom-none">
                                            <div>
                                                <input id="add-contact-title" name="heading" value="<?= $heading;?>" type="text"  class="add-contact-title" placeholder="Contact Heading">
                                                <span class="add-contact-error">* <?php  echo $headingErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-description" name="description" value="<?= $description;?>" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-description">Description</label>
                                                <span class="add-contact-error">* <?php  echo $descriptionErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-email-title" name="email-title" value="<?= $emailTitle;?>" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-email-title">Email Title</label>
                                                <span class="add-contact-error">* <?php  echo $emailTitleErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="email" name="email" value="<?= $email;?>" type="text" class="validate">
                                                <label for="email">Email</label>
                                                <span class="helper-text" data-error="wrong" data-success="right">example@xyz.com</span>
                                                <span class="add-contact-error">* <?php  echo $emailErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-phone-title" name="phone-title" value="<?= $phoneTitle;?>" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-phone-title">Phone Title</label>
                                                <span class="add-contact-error">* <?php  echo $phoneTitleErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-phone" name="phone" value="<?= $phone;?>" type="text" class="validate">
                                                <label for="add-contact-phone">Phone</label>
                                                <span class="helper-text" data-error="wrong" data-success="right">111-111-1111</span>
                                                <span class="add-contact-error">* <?php  echo $phoneErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-address-title" name="address-title" value="<?= $addressTitle;?>" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-address-title">Address Title</label>
                                                <span class="add-contact-error">* <?php  echo $addressTitleErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-address" name="address" value="<?= $address;?>" type="text" class="validate">
                                                <label for="add-contact-address">Address</label>
                                                <span class="add-contact-error">* <?php  echo $addressErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-latitude" name="latitude" value="<?= $latitude;?>" type="text" class="validate">
                                                <label for="add-contact-latitude">Latitude</label>
                                                <span class="add-contact-error">* <?php  echo $latitudeErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-longitude" name="longitude" value="<?= $longitude;?>" type="text" class="validate">
                                                <label for="add-contact-longitude">Longitude</label>
                                                <span class="add-contact-error">* <?php  echo $longitudeErr;?></span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <span class="card-title">Change the form fields</span>
                                                        <div class="row">
                                                            <form class="col s12 contact-form">
                                                                <div class="row">
                                                                    <div class="input-field col s12 m12 l6">
                                                                        <input id="icon_prefix" name="user-name-title" value="<?= $userNameTitle;?>" type="text" class="validate">
                                                                        <label for="icon_prefix">Name Title</label>
                                                                        <span class="add-contact-error">* <?php  echo $userNameTitleErr;?></span>
                                                                    </div>
                                                                    <div class="input-field col s12 m12 l6">
                                                                        <input id="icon_telephone" name="user-phone-title" value="<?= $userPhoneTitle;?>" type="text" class="validate">
                                                                        <label for="icon_telephone">Telephone Title</label>
                                                                        <span class="add-contact-error">* <?php  echo $userPhoneTitleErr;?></span>
                                                                    </div>
                                                                    <div class="input-field col s12 m12 l6">
                                                                        <input id="icon_email" name="user-email-title" value="<?= $userEmailTitle;?>" type="text" class="validate">
                                                                        <label for="icon_email">Email Title</label>
                                                                        <span class="add-contact-error">* <?php  echo $userEmailTitleErr;?></span>
                                                                    </div>
                                                                    <div class="input-field col s12 m12 l6">
                                                                        <input id="icon_message" name="subject-title" value="<?= $subjectTitle;?>" type="text" class="validate">
                                                                        <label for="icon_message">Subject Title</label>
                                                                        <span class="add-contact-error">* <?php  echo $subjectTitleErr;?></span>
                                                                    </div>
                                                                    <div class="input-field col s12 m12 l6 contact-message">
                                                                        <input id="icon_message" name="message-title" value="<?= $messageTitle;?>" type="text" class="validate">
                                                                        <label for="icon_message">Message Title</label>
                                                                        <span class="add-contact-error">* <?php  echo $messageTitleErr;?></span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <div class="add-contact-flex">
                                                    <div>
                                                        <button class="btn waves-effect waves-light contact-submit" type="submit" name="update">Update
                                                        </button>
                                                    </div>
                                                    <div>
                                                    <a class="waves-effect waves-light btn-small add-contact-btn" href="showContact.php">Cancel</a>
                                                    </div>
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