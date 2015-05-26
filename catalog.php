
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Каталог вышывок</title>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/stylesheets/app.css" rel="stylesheet">
  </head>
  <body>

    <div class="l-wrapper">

        <?php
          include 'functions.php';
          head();
        ?>  

        <div class="l-content-catalog">

          <?php filters();?>

          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                
                <?php prod_cat_list(); ?>

              </div>
            </div>            
          </div>
        </div>

        <?php footer(); ?>            

    </div> 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>
