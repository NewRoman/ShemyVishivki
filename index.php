
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Схемы вышивки</title>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/stylesheets/app.css" rel="stylesheet">
  </head>
  <body>

    <div class="l-wrapper">

        <?php
          include 'functions.php';
          head();
        ?>  

        <div class="l-content">
          <div class="container">
            <?php slider();?>

            <?php offer(); ?>
            
          </div>
              
          <?php samplers(); ?>                        

        </div>

        <?php footer(); ?>            

    </div>
 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>
