<?php include_once ROOT.'/models/test.php'; ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <br></br>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 text-center">
                <h6><?php echo ($text) ?></h6>
                <form action="" method="POST">
                    <div class="form-group">
                        <?php if (($forma) == "1"): ?>
                            <input name="username" class="form-control" placeholder="Ім'я">
                        <?php endif ?>

                        <?php if (($forma) == "2"): ?>

                            <div class="custom-controls-stacked">
                                <?php foreach ($_SESSION['answer'] as $row): ?>
                                    <label class="custom-control custom-radio">
                                            <input value="<?php echo $row->getAnswerId(); ?>" name="answer" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"><?php echo $row->getAnswer(); ?></span>
                                    </label>
                                <?php endforeach; ?>

                            </div>
                        <?php endif ?>
