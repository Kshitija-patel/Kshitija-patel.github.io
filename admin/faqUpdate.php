<?php require_once "../includes/adminHeader.php" ?>
<main>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Update FAQ</span>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row margin-bottom-none">
                                        <div class="input-field col s12">
                                            <input id="question" class="validate">
                                            <label for="question">Question</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="answer" class="validate">
                                            <label for="answer">Answer</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                            </button>
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Clear
                                            </button>
                                        </div>
                                </form>
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