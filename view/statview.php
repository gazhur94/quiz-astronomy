<?php namespace quiz\view; ?>

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
                <h4><?php echo ($text) ?></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Ім'я</th>
                      <th scope="col">Результат</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i = 1 ?>
                    <?php foreach ($_SESSION['bestUsers'] as $row) : ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row->getUsername() ?></td>
                                <td><?php echo $row->getNumberOfRight() ?></td>
                                <?php $i++ ?>
                            </tr>
                    <?php endforeach ?>


                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
