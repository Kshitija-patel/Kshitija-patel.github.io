<?php require_once "../includes/adminHeader.php" ?>
<?php

require_once '../database/classes/JobPostContext.php';

$jobPostDb = new JobPostContext();
$jobPosts = $jobPostDb->ListAll();

if (isset($_POST["deleteJobPost"])) {
    $jobPostId = $_POST["jobPostId"];

    $jobPostDb = new JobPostContext();
    $numRowsAffected = $jobPostDb->Delete($jobPostId);
    if ($numRowsAffected) {
        $jobPostDb = new JobPostContext();
        $jobPosts = $jobPostDb->ListAll();
    } else {
        echo "problem inserting data";
    }
}

if (isset($_POST["searchJobPost"])) {

    $searchKey = $_POST["searchKey"];
    $jobPostDb = new JobPostContext();
    $jobPosts = $jobPostDb->Search($searchKey);
}

?>
    <main class="adminmain admin-mock-tests">
        <div class="section no-pad-bot" id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">Job Openings</h5>
                </div>
                <div class="row">
                    <form method="post">
                        <div class="input-field col s12 m12 l4">
                            <input id="searchKey" name="searchKey" type="text" class="validate search-box">
                            <label for="searchKey" class="serach-label">Search Job Title..</label>
                        </div>
                        <div class="input-field col s12 m12 l2">
                            <button class="btn waves-effect waves-light" type="submit" name="searchJobPost">Search
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
                                    <a title="Add Job Opening" href="jobPostAdd.php"
                                       class="btn-floating btn-large green floatright">
                                        <i class="large material-icons">add</i>
                                    </a>
                                </div>
                                <div class="row sub-list">
                                    <?php foreach ($jobPosts as $jobPost) { ?>
                                        <div class="col s12 m6 l4">
                                            <div class="card">
                                                <div class="card-content">
                                                    <span class="card-title"><?= $jobPost->title; ?></span>
                                                    <p class="small-text"><?= $jobPost->description ?> </p>
                                                </div>
                                                <div class="card-action add-contact-flex">
                                                    <a href="" class="small-text"><i
                                                                class="material-icons green-text sub-del-icon">remove_red_eye</i></a>
                                                    <a href="jobPostUpdate.php?id=<?= $jobPost->id ?>"
                                                       class="small-text"><i
                                                                class="material-icons blue-text sub-del-icon">create</i></a>
                                                    <?PHP
                                                    $modalId = "modal" . $jobPost->id;
                                                    ?>
                                                    <a class="modal-trigger" href="#<?= $modalId ?>"><i
                                                                class="material-icons red-text sub-del-icon">delete</i></a>
                                                    <!-- Modal Structure -->
                                                    <div id="<?= $modalId ?>" class="modal">
                                                        <div class="modal-content">
                                                            <h4><?= $jobPost->title; ?></h4>
                                                            <p>Are you sure you want to delete this job post?</p>
                                                        </div>
                                                        <form method="post">
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="jobPostId"
                                                                       value="<?= $jobPost->id ?>">
                                                                <a class="modal-close waves-effect waves-red btn-flat">No</a>
                                                                <button class="btn waves-effect waves-light"
                                                                        type="submit"
                                                                        name="deleteJobPost">Yes
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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