<?php require_once "../includes/adminHeader.php" ?>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12 l8  offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Add User</span>
            <div class="row">
              <form class="col s12">
                <div class="row margin-bottom-none">
                  <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstname" type="text" class="validate">
                    <label for="firstname">Firstname</label>
                  </div>
                  <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="lastname" type="text" class="validate">
                    <label for="lastname">Lastname</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="contact" type="text" class="validate">
                    <label for="contact">Contact</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input id="dateOfBirth" type="text" class="validate datepicker">
                    <label for="dateOfBirth">Date of Birth</label>
                  </div>
                  <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">wc</i>
                    <select>
                      <option value="" disabled selected>Select Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                    <label>Gender</label>
                  </div>
                  <div class="input-field col s12 m12 l6">
                    <select>
                      <option value="" disabled selected>Select Role</option>
                      <option value="1">Student</option>
                      <option value="2">Tutor</option>
                    </select>
                    <label>Role</label>
                  </div> 
                  <div class="input-field col s12">
                    <div class="add-contact-flex">
                        <div>
                            <a class="waves-effect waves-light btn add-contact-btn " href="#">Add</a>
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
<br><br>
</div>
<?php require_once "../includes/adminFooter.php" ?>