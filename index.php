<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $title = "BMC SALES";
    include 'pages/head.php'; 
  ?>
</head>
<body>
  <?php include 'pages/header.php'; ?>
  <main>
      <section class="section hero">
        <div class="container hero__container">
          <div class="row hero__row">
              <div class="col-35">
                <div class="hero__header">
                  <h2 class="hero__title">Школьная форма по&nbsp;<strong>самым выгодным</strong> ценам</h2>
                  <button class="button hero__button button--dark">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.hero__header -->
                <div class="hero__swiper-button">
                <div class="hero__swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="hero__swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
                <!-- /.hero__swiper-button -->
              </div>
              <!-- /.col-40 -->
              <div class="col-50">
                <div class="reclame hero__reclame">
                  <div class="reclame__image">
                    <img src="img/reclame.png" alt="reclame">
                  </div>
                  <div class="reclame__info">
                    <h3 class="reclame__title">Комплект школьной формы
                      «Модерн-стиль»</h3>
                    <span class="reclame__price">от <strong>9000</strong> тг.</span>
                  </div>
                  <!-- /.reclame__info -->
                </div>
                <!-- /.reclame hero__reclame -->
              </div>
              <!-- /.col-50 -->
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
            <h2 class="uniform__section-title__heading"> <strong>УТВЕРЖДЕННАЯ ФОРМА</strong> ДЛЯ ШКОЛ Г.НУРСУЛТАН <i class="fas fa-chevron-right"></i></h2>
          </div>
          <!-- /.uniform__section-title -->
          <div class="row uniform__row">
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/boy.png" alt="boy"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Популярные товары</span>
                    <strong class="uniform__title">для мальчиков</strong>
                  <button class="uniform__button button button--outline-dark">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- /.col-32 -->
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/girl.png" alt="boy"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Популярные товары</span>
                    <strong class="uniform__title">для девочек</strong>
                  <button class="uniform__button button button--outline-dark">Подробнее <i class="fas fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- /.col-32 -->
            <div class="col-32">
              <div class="uniform__wrap">
                <div class="uniform__image"><img src="img/bag.png" alt="boy"></div>
                <div class="uniform__inform">
                    <span class="uniform__subtitle">Популярные товары</span>
                    <strong class="uniform__title">аксессуары</strong>
                  <button class="uniform__button button button--outline-dark">Подробнее <i class="fas fa-chevron-right"></i></button>
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
           <div class="col-24">
             <div class="row categories__wrap">
             <a href="#" class="categories__link"> <i class="fas fa-table-tennis categories__icon"></i> Развлечения, досуг</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-24">
            <div class="row categories__wrap">
             <a href="#" class="categories__link"> <i class="fas fa-wine-glass-alt categories__icon"></i> Посуда и зеркала</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-24">
            <div class="row categories__wrap">
              <a href="#" class="categories__link"> <i class="fas fa-spray-can categories__icon"></i> Парфюмерия и косметика</a>
            </div>
           </div>
           <!-- /.col-24 -->
           <div class="col-24">
            <div class="row categories__wrap">
              <a href="#" class="categories__link"> <i class="fas fa-keyboard categories__icon"></i> Компьютерная техника</a>
            </div>
           </div>
           <!-- /.col-24 -->
          </div>
          <!-- /.row -->
          <div class="categories__button"><button class="button--outline-dark">Ещё <i class="fas fa-chevron-right"></i></button></div>
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
              <div class="card popular__card">
              <div class="card__image">
              <img src="img/product_111.png" alt="product">
              <div class="card__image-overlap-wrap">
              <div class="card__image-overlap">
              <i class="far fa-heart card__image-overlap--white"></i>
              <i class="fas fa-plus-circle card__image-overlap--orange"></i>
              </div>
              </div>
              </div>
              <!-- /.card__imade -->
              <div class="card__description">
                <a href="#" class="card__name"> Блузка модель 111</a>
                <a href="#" class="card__category">Женская одежда</a>
                <div class="card__rating">
                <i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                </div>
              </div>
              <!-- /.card__description -->
              <div class="card__price-tag">
                <span class="card__price">3 000.00 <span class="card__currency">тг.</span></span>
                <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
              </div>
              <!-- /.card__price-tag -->
              </div>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <div class="card popular__card">
              <div class="card__image">
              <img src="img/product_2801.png" alt="product">
              <div class="card__image-overlap-wrap">
              <div class="card__image-overlap">
              <i class="far fa-heart card__image-overlap--white"></i>
              <i class="fas fa-plus-circle card__image-overlap--orange"></i>
              </div>
              </div>
              </div>
              <!-- /.card__imade -->
              <div class="card__description">
                <a href="#" class="card__name">Пуховик артикул: 2801</a>
                <a href="#" class="card__category">Пуховики</a>
                <div class="card__rating">
                <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                </div>
              </div>
              <!-- /.card__description -->
              <div class="card__price-tag">
                <span class="card__price">21 200.00 <span class="card__currency">тг.</span></span>
                <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
              </div>
              <!-- /.card__price-tag -->
              </div>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <div class="card popular__card">
              <div class="card__image">
              <img src="img/product_452.png" alt="product">
              <div class="card__image-overlap-wrap">
              <div class="card__image-overlap">
              <i class="far fa-heart card__image-overlap--white"></i>
              <i class="fas fa-plus-circle card__image-overlap--orange"></i>
              </div>
              </div>
              </div>
              <!-- /.card__imade -->
              <div class="card__description">
                <a href="#" class="card__name">Обувь Т 452</a>
                <a href="#" class="card__category">Женская Обувь</a>
                <div class="card__rating">
                <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                </div>
              </div>
              <!-- /.card__description -->
              <div class="card__price-tag">
                <span class="card__price">12 555.00 <span class="card__currency">тг.</span></span>
                <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
              </div>
              <!-- /.card__price-tag -->
              </div>
            </div>
            <!-- / end card -->
            <!-- / start card -->
            <div class="col-24">
              <div class="card popular__card">
              <div class="card__image">
              <img src="img/product_puma.png" alt="product">
              <div class="card__image-overlap-wrap">
              <div class="card__image-overlap">
              <i class="far fa-heart card__image-overlap--white"></i>
              <i class="fas fa-plus-circle card__image-overlap--orange"></i>
              </div>
              </div>
              </div>
              <!-- /.card__imade -->
              <div class="card__description">
                <a href="#" class="card__name">Рюкзак PUMA</a>
                <a href="#" class="card__category">Рюкзаки</a>
                <div class="card__rating">
                <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                </div>
              </div>
              <!-- /.card__description -->
              <div class="card__price-tag">
                <span class="card__price">5 000.00 <span class="card__currency">тг.</span></span>
                <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
              </div>
              <!-- /.card__price-tag -->
              </div>
            </div>
            <!-- / end card -->
          </div>
          <!-- /.row -->
          <div class="popular__button"><button class="button--outline-dark">Больше товаров <i class="fas fa-chevron-right"></i></button></div>
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
          <div class="row time__row">
            <div class="col">
              <div class="timer-wrap time__timer-wrap timer-wrap--dashed">
              <div class="timer-wrap timer-wrap--solid">
                <span class="timer__title">Дней</span>
                <span class="timer__hour">01</span>
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
                <span class="timer__hour">06</span>
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
                <span class="timer__hour">38</span>
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
                <span class="timer__hour">45</span>
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
      <!-- / start discounts -->
      <?php 
      $title = "Товары со скидкой";
      include 'pages/discounts.php'; 
      ?>
      <!-- /end discounts -->
      <section class="section application">
        <div class="container application__container">
          <div class="row application__row">
            <div class="application__info">
              <h2 class="application__title">С нашим мобильным приложением проще!</h2>
              <span class="application__subtitle">Экономьте свое время!</span>
              <button class="button application__button button--outline-white">Попробовать <i class="fas fa-chevron-right"></i></button>
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
</body>
</html>