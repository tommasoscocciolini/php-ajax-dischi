<?php
include_once __DIR__ .'/dati.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="master.css">
  <title>Document</title>
</head>
<body>
  <div class="top-bar">
    <h1>Disks php db</h1>
    <div class="buttons-container">
      <!-- <select class="" name="" v-model="selectedGenre">
        <option v-for="genre in genres"> {{genre}} </option>
      </select> -->


    </div>
  </div>
  <div class="container">
    <?php foreach ($database as $cd) {
      // code...
      $poster = $cd['poster'];
      $title = $cd['title'];
      $author = $cd['author'];
      $year = $cd['year'];

      ?><div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src=<?php echo "$poster"?> alt="Avatar" style="width:250px;height:250px;">
          </div>
          <div class="flip-card-back">
            <h1><?php echo "$author"?></h1>
            <p class="flip-card-back-title"><?php echo "$title" ?></p>
            <p><?php echo "$year" ?></p>
          </div>
        </div>
        </div>
      <?php
    } ?>
  </div>
</body>
</html>
