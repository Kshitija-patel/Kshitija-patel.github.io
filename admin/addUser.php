<?php
     include_once '../database/classes/UserAdminContext.php';

    $first_name= $last_name= $email= $user_password= $phone_number= $date_of_birth= $gender_id= $role_id = "";
    $first_nameErr = $last_nameErr =$emailErr= $user_passwordErr= $phone_numberErr= $date_of_birthErr= $gender_idErr= $role_idErr= "";
    $err = false;
    // var_dump($_POST);
    if(isset($_POST["add"])){
        if(empty($_POST["first_name"])){
            $first_nameErr = "First Name is required";
            $err = true;
        }
        
        if(empty($_POST["last_name"])){
            $last_nameErr = "Last Name is required";
            $err = true;
        }
        if(empty($_POST["email"])){
          $emailErr = "Email is required";
          $err = true;
      }
      
      if(empty($_POST["phone_number"])){
        $phone_numberErr = "Phone number is required";
        $err = true;
    }
    
    if(empty($_POST["date_of_birth"])){
        $date_of_birthErr = "Date of birth is required";
        $err = true;
    }
    if(empty($_POST["gender_id"])){
      $gender_idErr = "Gender is required";
      $err = true;
  }
  
  if(empty($_POST["role_id"])){
      $role_idErr = "Role is required";
      $err = true;
  }

        if(!$err){
            echo "no err";
            $db = Database::getDb();
            $u = new UserAdminContext();
            $con = $u->Add($_POST);

            if($con){
                header('Location: listUsers.php');
            } else {
                echo "problem adding user";
            } 
        }

    }

?>
<?php require_once "../includes/adminHeader.php" ?>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12 l8  offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Add User</span>
            <div class="row">
              <form class="col s12" method="POST">
                <div class="row margin-bottom-none">
                  <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" name="first_name" type="text" class="validate">
                    <label for="firstname">Firstname</label>
                    <span class="helper-text red-text"> <?php  echo $first_nameErr;?></span>
                  </div>
                  <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="lastname" name="last_name" type="text" class="validate">
                    <label for="lastname">Lastname</label>
                    <span class="helper-text red-text"> <?php  echo $last_nameErr;?></span>

                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text red-text"> <?php  echo $emailErr;?></span>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="contact" name="phone_number" type="text" class="validate">
                    <label for="contact">Contact</label>
                    <span class="helper-text red-text"> <?php  echo $phone_numberErr;?></span>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input id="dateOfBirth" name="date_of_birth" type="text" class="validate datepicker">
                    <label for="dateOfBirth">Date of Birth</label>
                    <span class="helper-text red-text"> <?php  echo $date_of_birthErr;?></span>
                  </div>
                  <div class="input-field col s12 m6">
                  <i class="material-icons prefix">wc</i>
                    <select name="gender_id">
                      <option value="" disabled selected>Select Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Other</option>
                    </select>
                    <label>Gender</label>
                    <span class="helper-text red-text"> <?php  echo $gender_idErr;?></span>
                  </div>
                  <div class="input-field col s12 m6">
                  <i class="material-icons prefix">wc</i>
                    <select name="role_id">
                      <option value="" disabled selected>Select Role</option>
                      <option value="1">Admin</option>
                      <option value="2">Tutor</option>
                      <option value="3">Student</option>
                    </select>
                    <label>Role</label>
                    <span class="helper-text red-text"> <?php  echo $role_idErr?></span>
                  </div> 
                  <div class="input-field col s12">
                    
                    <button class="btn waves-effect waves-light" type="submit" name="add">Add</button>
                    
                 
                   <a class="btn waves-effect waves-light" href="listUsers.php">Cancel</a>
                        
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
<br><br>
</div>
<?php require_once "../includes/adminFooter.php" ?>