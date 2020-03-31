<?php require_once "../includes/adminHeader.php" ?>
    <main class="adminmain admin-mock-tests">
        <div class="section no-pad-bot" id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">Tutor Appointments</h5>
                </div>
                <div class="row">
                    <form>
                        <div class="input-field col s12 m12 l4">
                            <input id="first_name" type="text" class="validate search-box">
                            <label for="first_name" class="search-label">Search any appointment...</label>
                        </div>
                        <div class="input-field col s12 m12 l4">
                           <select class="browser-default">
							<!--<i class="material-icons prefix">person</i>-->
								<option value="" disabled selected>Select Tutor</option>
								<option value="1">Chirstine</option>
								<option value="2">Priyanka</option>
								<option value="3">Bernie</option>
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
                                <!--<div class="direction-top">
                                    <a title="Add Learning Material" href="learningRoomAdd.php" class="btn-floating btn-large green floatright">
                                        <i class="large material-icons">add</i>
                                    </a>
                                </div>-->
                                <table class="responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Tutor</th>
                                        <th>Subject</th>
                                        <th>Room No</th>
                                        <th>Appointment Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Christine</td>
                                        <td>Mobile App Develop</td>
                                        <td>R03</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
									<tr>
                                        <td>Priyanka</td>
                                        <td>Digital Design</td>
                                        <td>R01</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
									<tr>
                                        <td>Bernie</td>
                                        <td>Web info Develop</td>
                                        <td>R01</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
									<tr>
                                        <td>Sean</td>
                                        <td>Security QA</td>
                                        <td>R03</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
									<tr>
                                        <td>Christine</td>
                                        <td>Mobile App Develop</td>
                                        <td>R03</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
									<tr>
                                        <td>Nithiya</td>
                                        <td>XML Services</td>
                                        <td>R01</td>
                                        <td>12-Feb-2020</td>
                                        <td>
                                            <a href=""><i class="material-icons blue-text">create</i></a>
                                            <a href=""><i class="material-icons red-text">delete</i></a>
                                        </td>
                                    </tr>
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
<?php require_once "../includes/adminFooter.php" ?>