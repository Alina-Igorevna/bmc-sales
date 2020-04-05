<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $title = "BMC SALES";
    include 'pages/head.php'; 
  ?>
</head>
<body>
  <?php include 'pages/metrika.php'; ?>
  <?php include 'pages/header.php'; ?>
  <main>
      <section class="section hero">
        <div class="container hero__container">
          <div class="row hero__row">
              <div class="col-35 hero__col-35">
                <div class="hero__header">
                  <h2 class="hero__title">Школьная форма по&nbsp;<strong>самым выгодным</strong> ценам</h2>
                  <button class="button hero__button button--dark" onclick="window.location.href='catalog.php'">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.hero__header -->
                <div class="hero__swiper-button">
                <div class="hero__swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="hero__swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
                <!-- /.hero__swiper-button -->
              </div>
              <!-- /.col-40 -->
              <!-- Slider main container -->
              <div class="swiper-container hero__swiper-container col-70">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide">
                        <div class="reclame hero__reclame">
                          <div class="reclame__image">
                            <img src="img/reclame.png" alt="reclame">
                          </div>
                          <div class="reclame__info">
                            <h3 class="reclame__title">Комплект школьной формы
                              «Модерн-стиль»</h3>
                            <span class="reclame__price">от <strong>9000</strong> тг.</span>
                          </div> 
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="reclame hero__reclame">
                          <div class="reclame__image">
                            <img src="img/reclame.png" alt="reclame">
                          </div>
                          <div class="reclame__info">
                            <h3 class="reclame__title">Комплект школьной формы
                              «Модерн-стиль»</h3>
                            <span class="reclame__price">от <strong>9000</strong> тг.</span>
                          </div> 
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="reclame hero__reclame">
                          <div class="reclame__image">
                            <img src="img/reclame.png" alt="reclame">
                          </div>
                          <div class="reclame__info">
                            <h3 class="reclame__title">Комплект школьной формы
                              «Модерн-стиль»</h3>
                            <span class="reclame__price">от <strong>9000</strong> тг.</span>
                          </div> 
                        </div>
                      </div>
                  </div>
               </div>
              <!-- /.swiper-container -->
              <div class="col-5">
                <div class="hero__contacts">
                  <a href="#"><i class="fab fa-twitter hero__contacts__item"></i></a>
                  <a href="#"><i class="fab fa-facebook-f hero__contacts__item"></i></a>
                  <a href="#"><i class="fab fa-vk hero__contacts__item"></i></a>
                  <a href="#"><i class="fab fa-youtube hero__contacts__item"></i></a>
                </div>
                <!-- /.hero__contacts -->
              </div>
              <!-- /.col-15 -->
          </div>
          <!-- /.row hero__row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.section hero -->
      <section class="section uniform">
        <div class="container">
          <div class="uniform__section-title">
            <a href="card.php" class="uniform__section-title__heading"> <strong>УТВЕРЖДЕННАЯ ФОРМА</strong> ДЛЯ ШКОЛ Г.НУРСУЛТАН <i class="fas fa-chevron-right"></i></a>
          </div>
          <!-- /.uniform__section-title -->
          <div class="row uniform__row">
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/boy.png" id="boy" alt="boy"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Популярные товары</span>
                    <strong class="uniform__title">для мальчиков</strong>
                  <button class="uniform__button button button--outline-dark" onclick="window.location.href='catalog.php'">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- /.col-32 -->
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/girl.png" alt="girl" id="girl"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Популярные товары</span>
                    <strong class="uniform__title">для девочек</strong>
                  <button class="uniform__button button button--outline-dark" onclick="window.location.href='catalog.php'">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- /.col-32 -->
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/bag.png" alt="bag" id="bag"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Самые популярные</span>
                    <strong class="uniform__title">аксессуары</strong>
                  <button class="uniform__button button button--outline-dark" onclick="window.location.href='catalog.php'">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- /.col-32 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.section uniform -->
      <section class="section categories">
        <div class="container">
          <div class="section-title categories__section-title">
            <div id="border-left"></div>
            <h2 class="section-title__heading">Категории товаров</h2>
            <div id="border-right"></div>
          </div>
          <!-- /.section-title services__section-title -->
          <div class="row categories__row">
           <div class="col-23 categories__col-23">
             <div class="row categories__wrap">
             <a href="catalog.php" class="categories__link"> <i class="fas fa-table-tennis categories__icon"></i> Развлечения, досуг</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-23 categories__col-23">
            <div class="row categories__wrap">
             <a href="catalog.php" class="categories__link"> <i class="fas fa-wine-glass-alt categories__icon"></i> Посуда и зеркала</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-23 categories__col-23">
            <div class="row categories__wrap">
              <a href="catalog.php" class="categories__link"> <i class="fas fa-spray-can categories__icon"></i> Парфюмерия и косметика</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-23 categories__col-23">
            <div class="row categories__wrap">
              <a href="catalog.php" class="categories__link"> <i class="fas fa-keyboard categories__icon"></i> Компьютерная техника</a>
            </div>
           </div>
           <!-- /.col-24 -->
          </div>
          <!-- /.row -->
          <div class="categories__button"><button class="button--outline-dark categories__button--padding" onclick="window.location.href='catalog.php'">Ещё <i class="fas fa-chevron-down categories__button__icon"></i></button></div>
        </div>  
        <!-- /.container -->
      </section>
      <!-- /.categories -->
      <section class="section popular">
        <div class="container">
          <div class="section-title popular__section-title">
            <div id="border-left"></div>
            <h2 class="section-title__heading">Популярные товары</h2>
            <div id="border-right"></div>
          </div>
          <!-- /.section-title services__section-title -->
          <div class="row popular__row">
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/blouse.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/jacket.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24"> 
              <?php include 'pages/product/sneakers.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/backpack.php'; ?>
            </div>
            <!-- / end card -->
          </div>
          <!-- /.row -->
          <div class="popular__button"><button class="button--outline-dark popular__button--padding" onclick="window.location.href='catalog.php'">Больше товаров <i class="fas fa-chevron-right popular__button__icon"></i></button></div>
        </div>  
        <!-- /.container -->
      </section>
      <!-- /.popular -->
      <section class="section time">
        <div class="container">
          <div class="section-title time__section-title">
            <div id="border-left"></div>
            <h2 class="section-title__heading time__section-title__heading">До конца скидок осталось</h2>
            <div id="border-right"></div>
          </div>
          <!-- /.section-title services__section-title -->
          <div id="countdown" class="row time__row countdown">
            <div class="col">
              <div class="timer-wrap time__timer-wrap timer-wrap--dashed">
              <div class="timer-wrap timer-wrap--solid">
                <span class="timer__title">Дней</span>
                <span id="days" class="days timer__hour">01</span>
              </div>
              </div>
              <!-- /.timer-wrap time__timer-wrap -->
            </div>
            <!-- /.col-24 -->
            <div class="col">
              <div class="separate-wrap time__separate-wrap">
                <img src="img/separate.svg" alt="separate">
              </div>
            </div>
            <!-- /.col-5 -->
            <div class="col">
              <div class="timer-wrap time__timer-wrap timer-wrap--dashed">
              <div class="timer-wrap timer-wrap--solid">
                <span class="timer__title">Часов</span>
                <span id="hours" class="hours timer__hour">06</span>
              </div>
              </div>
              <!-- /.timer-wrap time__timer-wrap -->
            </div>
            <!-- /.col-24 -->
            <div class="col">
              <div class="separate-wrap time__separate-wrap">
                <img src="img/separate.svg" alt="separate">
              </div>
            </div>
            <!-- /.col-5 -->
            <div class="col">
              <div class="timer-wrap time__timer-wrap timer-wrap--dashed">
              <div class="timer-wrap timer-wrap--solid">
                <span class="timer__title">Минут</span>
                <span id="minutes" class="minutes timer__hour">38</span>
              </div>
              </div>
              <!-- /.timer-wrap time__timer-wrap -->
            </div>
            <!-- /.col-24 -->
            <div class="col">
              <div class="separate-wrap time__separate-wrap">
                <img src="img/separate.svg" alt="separate">
              </div>
            </div>
            <!-- /.col-5 -->
            <div class="col">
              <div class="timer-wrap time__timer-wrap timer-wrap--dashed">
              <div class="timer-wrap timer-wrap--solid">
                <span class="timer__title">Секунд</span>
                <span id="seconds" class="seconds timer__hour">45</span>
              </div>
              </div>
              <!-- /.timer-wrap time__timer-wrap -->
            </div>
            <!-- /.col-24 -->
          </div>
          <!-- /.row -->
        <!-- /.container -->
      </section>
      <!-- /.time -->
      <section class="section discounts">
        <div class="container">
          <div class="section-title discounts__section-title">
            <div id="border-left"></div>
            <h2 class="section-title__heading">Товары со скидкой</h2>
            <div id="border-right"></div>
          </div>
          <!-- /.section-title services__section-title -->
          <div class="row discounts__row">
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/coat.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/shoes.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/sundress.php'; ?>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <?php include 'pages/product/tie.php'; ?>
            </div>
            <!-- / end card -->
          </div>
          <!-- /.row -->
          <div class="discounts__button"><button class="button--outline-dark discounts__button--padding" onclick="window.location.href='catalog.php'">Больше товаров <i class="fas fa-chevron-right discounts__button__icon"></i></button></div>
        </div>  
        <!-- /.container -->
      </section>
      <!-- /.discounts -->
      <section class="section application">
        <div class="container application__container">
          <div class="row application__row">
            <div class="application__info">
              <h2 class="application__title">С нашим мобильным приложением проще!</h2>
              <span class="application__subtitle">Экономьте свое время!</span>
              <button class="button application__button button--outline-white">Попробовать <i class="fas fa-chevron-right application__button__icon"></i></button>
            </div>
            <!-- /.application__info -->
            <div class="application__imge">
              <img src="img/mobil.png" alt="mobil">
            </div>
            <!-- /.application__imge -->
          </div>
        </div>
        <!-- /.container -->
      </section>
      <!-- /.section application -->
  </main>

  <?php include 'pages/services.php'; ?>
  <?php include 'pages/footer.php'; ?>
  <?php include 'pages/modal.php'; ?>
  <?php include 'pages/listjs.php'; ?>
</body>
</html>