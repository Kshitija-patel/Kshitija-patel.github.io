<?php

include_once "../database/classes/MockTestContext.php";
$mockTestsContext = new MockTestContext();

$mockTest = $mockTestsContext->getMockTests($_GET['testID'], (isset($_GET['searchTest']) && $_GET['searchTest'] != '') ? $_GET['searchTest'] : null, (isset($_GET['subjectTest']) && $_GET['subjectTest'] != '') ? $_GET['subjectTest'] : null, (isset($_GET['tutorTest']) && $_GET['tutorTest'] != '') ? $_GET['tutorTest'] : null);

include_once "../database/classes/MockTestQuestionContext.php";
$mockTestQuestionContext = new MockTestQuestionContext();
$mockTestQuestions = $mockTestQuestionContext->getMockTestQuestions();

// var_dump($mockTest);
$mockTestQuestions = $mockTestsContext->filterMockTestQuestions($mockTestQuestions, $mockTest['questions'], $mockTest['subject'][0]['id']);

if (isset($_POST['addQuestion'])) {
  $mockTestsContext->addQuestionMockTest($_POST['questionID'], $mockTest['id']);
  header('Location: showMockTest.php?testID=' . $_GET['testID']);
}

if (isset($_GET['deleteQuestion'])) {
  $mockTestsContext->deleteMockTestQuestion($_GET['deleteQuestion'], $mockTest['id']);
  header('Location: showMockTest.php?testID=' . $_GET['testID']);
}

if(isset($_POST['attemptMockTest'])) {
  $mockTestsContext->attemptMockTest($_POST);
}
?>
<?php require_once "../includes/adminHeader.php" ?>

<main class="adminmain admin-mock-tests">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content">
        <a href="mockTestEnroll.php">Back to List </a>
          <span class="card-title"><?= $mockTest['title']; ?></span>
          <p>Subject: <strong><?= $mockTest['subject'][0]['title']; ?></strong></p>
          <strong class="marks-card"><?= $mockTest['marks']; ?> marks </strong>
          <form method="POST">
            <input type="hidden" value="<?= $sessionData->userId;?>" name="user_id">
            <input type="hidden" value="<?= $_GET['testID']?>" name="test_id">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>Question</th>
                <th>Marks</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $index = 1;
              foreach ($mockTest['questions'] as $question) {
              ?>
                <tr>
                  <td>
                    <?= $index++; ?>. <?= $question['question']; ?></a>
                      <?php
                      $options = $mockTestQuestionContext->getMockTestQuestionOptions($question['id']);
                      foreach ($options as $option) {
                      ?>
                        <p>
                          <label>
                            <input type="radio" class="with-gap" value="<?= $option['id']; ?>" name="<?= $question['id']; ?>"/>
                            <span><?= $option['option_value']; ?></span>
                          </label>
                        </p>
                      <?php } ?>
                  </td>
                  <td><?= $question['marks']; ?></td>
                </tr>
              <?php } ?>
              <tr>
                  <td>
                  <button class="btn waves-effect waves-light" type="submit" name="attemptMockTest">Submit
                    <i class="material-icons right">send</i>
                  </button>
                  </td>
                </tr>
            </tbody>
          </table>
          </form>
        </div>
      </div>
    </div>
  </div>

</main>
<?php require_once "../includes/adminFooter.php" ?>