<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Каталог схем вышивок</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400|Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="assets/stylesheets/app.css" rel="stylesheet">
  </head>
  <body>

    <?php
      include 'functions.php';
      header(); 
    ?>

    <?php
      prod_list(); 
    ?>  

    <?php
      footer(); 
    ?>    

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>