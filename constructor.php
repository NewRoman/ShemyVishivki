
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Конструктор вышывок</title>
    
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

        <div class="l-content-constructor">
          <form action="/" method="POST">

            <div class="m-step-head m-step-head--white-bg">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <h4 class="m-step-head--title m-step-head--white-bg--title"><span>ШАГ 1 -</span> ЗАГРУЗИТЕ КАРТИНКУ</h4>
                  </div>
                  <div class="col-sm-6 text-right">
                    <input class="m-step-head--white-bg-inp" type="file" id="choose_image">
                    <button class="m-step-head--white-bg-btn">ЗАГРУЗИТЬ КАРТИНКУ</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="m-img-preview">
                    <img src="assets/images/placeholder.png" id="preview_image" alt="">
                  </div>                
                </div>
              </div>
            </div>

            <div class="m-step-head">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="m-step-head--title"><span>ШАГ 2 -</span> ВЫБЕРИТЕ ЧТО ВЫ ЖЕЛАЕТЕ ПОЛУЧИТЬ</h4>
                  </div>
                </div>            
              </div>
            </div>

            <div class="m-wyw"><!-- wyw -- What You Want -->
              <div class="container">              
                <div class="row">
                  <div class="col-sm-12">
                      <label for="all_in">
                        <input type="checkbox" checked id="all_in" name="all_in">
                        <i></i>
                        <b>НАБОР ДЛЯ ВЫШИВАНИЯ</b> <span>(высылается почтой)</span>, в набор входит:
                      </label>

                      <ul class="m-wyw--opt-list">
                        <li class="m-wyw--opt-list-item">
                          <label for="opt_1">
                            <input type="checkbox" checked name="opt_1" id="opt_1">
                            <i></i>
                            схема вышивки (в печатном и электронном виде);
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_2">
                            <input type="checkbox" checked name="opt_2" id="opt_2">
                            <i></i>
                            канва (размер по желанию);
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_3">
                            <input type="checkbox" checked name="opt_3" id="opt_3">
                            <i></i>
                            нитки;
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_4">
                            <input type="checkbox" checked name="opt_4" id="opt_4">
                            <i></i>
                            иголки 2 шт;
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_5">
                            <input type="checkbox" checked name="opt_5" id="opt_5">
                            <i></i>
                            нитковдеватель;
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_6">
                            <input type="checkbox" checked name="opt_6" id="opt_6">
                            <i></i>
                            водорастворимый маркер по ткани;
                          </label>
                        </li>

                        <li class="m-wyw--opt-list-item">
                          <label for="opt_7">
                            <input type="checkbox" checked name="opt_7" id="opt_7">
                            <i></i>
                            инструкция.
                          </label>
                        </li>
                      </ul>

                      <p class="m-wyw--opt-text">
                        Чтоб вы не тратили время на подбор компонетнов для созданной вами вышивки, мы готовы собрать вам готовый набор.
                      </p>

                      <label class="m-wyw--wrap-opt-only-scheme" for="only_scheme">
                        <input type="checkbox" id="only_scheme" name="only_scheme">
                        <i></i>
                        <b>СХЕМА ДЛЯ ВЫШИВАНИЯ</b> <span>(в печатном и электронном виде)</span>
                      </label>

                  </div>
                </div>
              </div>
            </div>

            <div class="m-step-head">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="m-step-head--title"><span>ШАГ 3 -</span> ВЫБЕРИТЕ РАЗМЕР</h4>
                  </div>
                </div>            
              </div>
            </div>

            <div class="m-sizes">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <p class="m-sizes--head">
                      а) выбрать из типичных размеров
                    </p>

                    <ul class="list-inline m-sizes--list">
                      <li class="m-sizes--item">
                        <label for="size_1" class="m-sizes--label">
                          <input type="checkbox" name="size_1" id="size_1">
                          <i></i>
                          120x80<br> 
                          <span>крестиков</span><br>
                          20х15<br> 
                          <span>сантиметров</span>
                        </label>
                      </li>
                      
                      <li class="m-sizes--item">
                        <label for="size_2" class="m-sizes--label">
                          <input type="checkbox" name="size_2" id="size_2">
                          <i></i>
                          240x160<br> 
                          <span>крестиков</span><br>
                          40х30<br> 
                          <span>сантиметров</span>
                        </label>
                      </li>

                      <li class="m-sizes--item">
                        <label for="size_3" class="m-sizes--label">
                          <input type="checkbox" name="size_3" id="size_3">
                          <i></i>
                          480x320<br> 
                          <span>крестиков</span><br>
                          80х60<br> 
                          <span>сантиметров</span>
                        </label>
                      </li>

                      <li class="m-sizes--item">
                        <label for="size_4" class="m-sizes--label">
                          <input type="checkbox" name="size_4" id="size_4">
                          <i></i>
                          680x420<br> 
                          <span>крестиков</span><br>
                          100х70<br> 
                          <span>сантиметров</span>
                        </label>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <p class="m-sizes--head">
                      б) указать свой размер
                    </p>
                    <label class="m-sizes--manual-label" for="">крестиков</label>
                    <input type="text" class="m-sizes--manual-input" placeholder="Ширина">
                    <input type="text" class="m-sizes--manual-input" placeholder="Высота">
                    <br>

                    <label class="m-sizes--manual-label" for="">сантиметров</label>
                    <input type="text" class="m-sizes--manual-input" placeholder="25" value="25">
                    <input type="text" class="m-sizes--manual-input" placeholder="50" value="50">
                  </div>
                </div>
              </div>
            </div>

            <div class="m-step-head">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="m-step-head--title"><span>ШАГ 4 -</span> ОФОРМИТЬ ЗАКАЗ</h4>
                  </div>
                </div>            
              </div>
            </div>

            <div class="m-checkout">
              <div class="container">
                <div class="row">
                  <div class="col-sm-4 text-center">
                    <input class="m-checkout--inputs" type="text" placeholder="Фамилия">
                    <input class="m-checkout--inputs" type="text" placeholder="Индекс">
                    <input class="m-checkout--inputs" type="text" placeholder="e-mail">
                  </div>

                  <div class="col-sm-4 text-center">
                    <input class="m-checkout--inputs" type="text" placeholder="Имя">
                    <input class="m-checkout--inputs" type="text" placeholder="Город">
                    <input class="m-checkout--inputs" type="text" placeholder="контактный телефон">
                  </div>

                  <div class="col-sm-4 text-center">
                    <input class="m-checkout--inputs" type="text" placeholder="Отчество">
                    <input class="m-checkout--inputs" type="text" placeholder="Адрес">
                    <input class="m-checkout--inputs" type="text" placeholder="Skype">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12 text-center">
                    <textarea name="" id="" style="resize:none" class="m-checkout--textarea" cols="100" rows="1"  placeholder="Примечание, замечания по доставке"></textarea>
                  </div>
                </div>

                <div class="m-submit">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-submit--price"><span>ВСЕГО К ОПЛАТЕ: </span>300 гривен</p>
                    </div>

                    <div class="col-sm-4 col-sm-offset-2 text-right">
                      <button type="submit">ЗАКАЗАТЬ</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- <div id="sticky_footer_in_head"></div> -->
      <!-- </div>       -->
       
      <!-- <div id="sticky_footer_foot"> -->
        <?php footer(); ?>            
      <!-- </div> -->

    </div>
 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-simple-file-preview/jquery.simpleFilePreview.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/app.js"></script>
  </body>
</html>
