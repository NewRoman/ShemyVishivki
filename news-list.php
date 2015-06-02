

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Список статей</title>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/stylesheets/app.css" rel="stylesheet">
  </head>
  <body>

    <div class="l-wrapper">
        <?php
          include 'functions.php';
          head();
        ?>  

        <div class="l-content-news-list">

          <div class="m-title-page">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <h1 class="m-title-page--text">СПИСОК СТАТЕЙ</h1>
                </div>
              </div>
            </div>
          </div>
          
          <!-- список новостей -->
          <div class="container">
            <?php news_list_cell(); ?> 

            <?php news_list_cell(); ?> 

            <?php news_list_cell(); ?> 

            <?php news_list_cell(); ?>              
          </div>
      
        </div>

        <?php footer(); ?>        

    </div>
 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-simple-file-preview/jquery.simpleFilePreview.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/app.js"></script>
  </body>
</html>
