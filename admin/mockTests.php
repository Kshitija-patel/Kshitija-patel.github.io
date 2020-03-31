<?php
include_once "../database/classes/MockTestQuestionContext.php";
$mockTestQuestions = new MockTestQuestionContext();
if(isset($_GET['deleteQuestion'])) {
  $mockTestQuestions->deleteMockTestQuestion($_GET['deleteQuestion']);
  header('location: mockTests.php?tab=questions');
} else if(isset($_GET['deleteOption'])) {
  $mockTestQuestions->deleteMockTestOption($_GET['deleteOption']);
  header('location: mockTests.php?tab=questions');
}

$mockQuestions = $mockTestQuestions->getMockTestQuestions(null, (isset($_GET['searchQuestion']) && $_GET['searchQuestion'] != '') ? $_GET['searchQuestion'] : null, (isset($_GET['subjectQuestion']) && $_GET['subjectQuestion'] != '') ? $_GET['subjectQuestion'] : null, (isset($_GET['tutorQuestion']) && $_GET['tutorQuestion'] != '') ? $_GET['tutorQuestion'] : null);


include_once "../database/classes/SubjectContext.php";
$subject = new SubjectContext();
$subjects = $subject->getAllSubjects();

include_once "../database/classes/TutorContext.php";
$tutor = new TutorContext();
$tutors = $tutor->getAllTutors();

$tab = 'tests';
if(isset($_GET['tab'])) {
  $tab = $_GET['tab'];
}
?>
<?php require_once "../includes/adminHeader.php" ?>

<main class="adminmain admin-mock-tests">
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6 m5 l4"><a <?= ($tab == 'tests') ? "class='active'" : ""; ?> href="#MockTest">Mock Tests</a></li>
          <li class="tab col s6 m5 l4"><a <?= ($tab == 'questions') ? "class='active'" : ""; ?> href="#MockTestQuestions">Mock Test Questions</a></li>
        </ul>
      </div>
      <div id="MockTest" class="col s12">
        <div class="row">
          <div class="input-field col s12 m12 l4">
            <input id="mock_test_search" type="text" class="validate search-box">
            <label for="mock_test_search" class="serach-label">Search Mock Test...</label>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default">
              <option value='' selected>---Select Tutor---</option>
              <?php
                foreach ($tutors as $tutor) { 
              ?>
                <option value="<?= $tutor['id']; ?>"><?= $tutor['first_name'] . " " . $tutor['last_name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default">
            <option value='' selected>---Select Subject---</option>
            <?php
              foreach ($subjects as $subject) { 
            ?>
              <option value="<?= $subject['id']; ?>"><?= $subject['title']; ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="input-field col s12 m12 l2">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
              <i class="material-icons right">search</i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Mock Test 1</span>
                <p>Subject: <strong>Web Application Development</strong></p>
                <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
              </div>
              <div class="card-action">
                <a href="#" class="small-text">View Test</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Mock Test 2</span>
                <p>Subject: <strong>Web Application Development</strong></p>
                <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
              </div>
              <div class="card-action">
                <a href="#" class="small-text">View Test</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Mock Test 3</span>
                <p>Subject: <strong>Web Application Development</strong></p>
                <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
              </div>
              <div class="card-action">
                <a href="#" class="small-text">View Test</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Mock Test 3</span>
                <p>Subject: <strong>Web Application Development</strong></p>
                <p class="small-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum....</p>
              </div>
              <div class="card-action">
                <a href="#" class="small-text">View Test</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="direction-top">
            <a title="Add Mock Test" href="#" class="btn-floating btn-large green floatright">
              <i class="large material-icons">add</i>
            </a>
          </div>
        </div>
      </div>
      <div id="MockTestQuestions" class="col s12">
        <div class="row">
        <form action="" method="GET">
          <div class="input-field col s12 m12 l4">
            <input type="hidden" value="questions" name="tab">
            <input id="mock_test_questions_search" type="text" name="searchQuestion" class="validate search-box">
            <label for="mock_test_questions_search" class="serach-label">Search Mock Test Questions...</label>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" name="tutorQuestion">
              <option value='' selected>---Select Tutor---</option>
              <?php
                foreach ($tutors as $tutor) { 
              ?>
                <option value="<?= $tutor['id']; ?>"><?= $tutor['first_name'] . " " . $tutor['last_name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="input-field col s12 m12 l3">
            <select class="browser-default" name="subjectQuestion">
            <option value='' selected>---Select Subject---</option>
            <?php
              foreach ($subjects as $subject) { 
            ?>
              <option value="<?= $subject['id']; ?>"><?= $subject['title']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="input-field col s12 m12 l2">
            <button class="btn waves-effect waves-light" type="submit" name="action">Search
              <i class="material-icons right">search</i>
            </button>
          </div>
        </form>
        </div>
        <a title="Add Mock Test Question" href="addUpdateMockTestQuestion.php?action=Add" class="btn-floating btn-large green floatright floating-btn">
          <i class="large material-icons">add</i>
        </a>
        <a class='waves-effect waves-light modal-trigger hidden' href='#questionAddUpdate' id='linkQuestionAddUpdate'>s</a>
        <div class="row" id="mockTestsList">
          <?php 
          foreach ($mockQuestions as $mockQuestion) {
          ?>
          <div class='col s12'>
            <div class='card'>
              <div class='card-content'><span class='card-title'><?= $mockQuestion['question']; ?>
                  <p class='floatright tiny-text'><?= $mockQuestion['marks']; ?> Marks</p></span>
                <table>
                <?php 
                $index = 0;
                foreach ($mockQuestion['options'] as $option) {
                  $index++;
                ?>
                  <tr>
                    <td><?= $index; ?></td>
                    <td><?= $option['option_value']; ?></td>
                    <td><a href='addUpdateMockTestOption.php?action=Update&optionID=<?= $option['id']; ?>&questionID=<?= $mockQuestion['id']; ?>'>Edit</a></td>
                    <td>
                      <a class='waves-effect waves-light modal-trigger' href="#optionDeleteModel<?= $option['id']; ?>">Delete</a>
                      <div id="optionDeleteModel<?= $option['id']; ?>" class="modal">
                        <div class="modal-content">
                          <h4>Are you sure you want to delete this Option?</h4>
                          <p><?= $option['option_value']; ?></p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
                          <a href="mockTests.php?deleteOption=<?= $option['id']; ?>" class="modal-close waves-effect waves-green btn-flat">Yes</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
                </table>
              </div>
              <div class='card-action'>
                <a class='waves-effect waves-light modal-trigger' href='addUpdateMockTestOption.php?action=Add&questionID=<?= $mockQuestion['id']; ?>'>Add Option</a>
                <a class='waves-effect waves-light' href='addUpdateMockTestQuestion.php?action=Update&questionID=<?= $mockQuestion['id']; ?>'>Edit</a>
                <a class='waves-effect waves-light modal-trigger' href='#questionDeleteModel<?= $mockQuestion['id']; ?>'>Delete</a></div>
                <div id="questionDeleteModel<?= $mockQuestion['id']; ?>" class="modal">
                  <div class="modal-content">
                    <h4>Are you sure you want to delete this Question?</h4>
                    <p><?= $mockQuestion['question']; ?></p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
                    <a href="mockTests.php?deleteQuestion=<?= $mockQuestion['id']; ?>" class="modal-close waves-effect waves-green btn-flat">Yes</a>
                  </div>
                </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

  </div>

  <!-- Modal Structure -->
  <div id="optionAddUpdate" class="modal">
    <form>
      <div class="modal-content">
        <h4>Add Option</h4>
        <p>How to create a variable in PHP?</p>
        <div class="row">
          <div class="input-field col s12">
            <input id="optionValue" type="text" class="validate">
            <label for="optionValue" class="serach-label">Enter Option value</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Add Option</a>
      </div>
    </form>
  </div>

  <!-- Modal Structure -->
  <div id="questionAddUpdate" class="modal">
    <form method="POST" onsubmit="addMockTestQuestionAPI(this.value, event)" id="questionAddUpdateForm">
      <div class="modal-content">
        <h4><span id="questionAddUpdateAction"></span> Question</h4>
        <div class="row">
          <div class="input-field col s12">
            <input id="mockTestQuestionInput" type="text" class="validate">
            <label for="mockTestQuestionInput" class="serach-label">Enter Question</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        <a href="#" class="modal-close waves-effect waves-green btn-flat" onclick="document.getElementById('questionAddUpdateForm').submit();">Submit</a>
      </div>
    </form>
  </div>
</main>
<?php require_once "../includes/adminFooter.php" ?>