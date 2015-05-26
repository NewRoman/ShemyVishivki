
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Каталог вышывок</title>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400|Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
    <link href="assets/stylesheets/app.css" rel="stylesheet">
  </head>
  <body>

    <div class="l-wrapper">
      <!-- <div id="sticky_footer_head"> -->
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

        <!-- <div id="sticky_footer_in_head"></div> -->
      <!-- </div>       -->
       
      <!-- <div id="sticky_footer_foot"> -->
        <?php footer(); ?>            
      <!-- </div> -->

    </div>
 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>
