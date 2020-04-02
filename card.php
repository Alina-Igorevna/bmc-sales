<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $title = "Карточка товара";
    include 'pages/head.php'; 
  ?>
</head>
<body>
  <?php include 'pages/header.php'; ?>
  <main>
    <section class="card-navigation">
      <div class="container">
        <div class="page-hierarchy catalog-header__page-hierarchy">
          <span class="page-hierarchy--dark">Главная</span>
          <span class="page-hierarchy--dark">Каталог</span>
          <span class="page-hierarchy--dark">Сумки, кошельки</span>
          <span class="page-hierarchy--dark">Рюкзаки</span>
          <span class="page-hierarchy--grey">Рюкзак PUMA</span>
        </div> 
        <!-- /.page-hierarchy-->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.card-navigation -->
      <section class="view-product">
        <div class="container">
          <div class="row view-product__row">
            <div class="col-40 view-product__col-40">
              <div class="view-product__image-wrap">
                <div class="view-product__main-image">
                  <img src="img/puma.png" alt="puma">
                </div>
                <div class="view-product__preview-image-wrap">
                  <div class="view-product__preview-image view-product__preview-image--active"><img src="img/puma_1.png" alt="puma"></div>
                  <div class="view-product__preview-image"><img src="img/puma_2.png" alt="puma"></div>
                  <div class="view-product__preview-image"><img src="img/puma_3.png" alt="puma"></div>
                  <div class="view-product__preview-image"><img src="img/puma_4.png" alt="puma"></div>
                  <div class="view-product__preview-image"><img src="img/puma_5.png" alt="puma"></div>
                </div>
              </div>
              <!-- /.view-product__image-wrap -->
            </div>
            <!-- /.col-40 -->
            <div class="col-60">
            <div class="view-product__about-product">
              <div class="view-product__title-wrap">
                  <h2 class="view-product__title">Рюкзак PUMA</h2>
                <div class="view-product__subtitle-wrap">
                  <span class="view-product__subtitle">Просмотров: <strong>200</strong></span>
                  <i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="far fa-star card__rating__star card__rating__star--lightgrey"></i><i class="far fa-star card__rating__star card__rating__star--lightgrey"></i>
                </div>
              </div>
              <!-- /.view-product__title-wrap -->
              <div class="view-product__price-wrap">
                <div class="view-product__price">
                  <h3 class="view-product__price-title">5 000.00 <span>kzt/Шт.</span></h3>
                  <span class="view-product__price-subtitle">В наличие на складе: <strong>(1)</strong></span>
                </div>
                <!-- /.view-product__price -->
                <div class="view-product__qrcode">
                  <img src="img/qrcode.jpg" alt="qrcode">
                </div>
                <!-- /.view-product__qrcode -->
              </div>
              <!-- /.view-product__price-wrap -->
              <div class="view-product__color-wrap">
                <span class="view-product__color-title">Цвет:</span> 
                <form action="" class="color-form view-product__color-form">
                  <div class="color-form-group">
                    <input type="checkbox" name="ColorCheckbox" id="green" class="color__checkbox" >
                    <label for="green" class="color__label color__label--green">Зеленый</label>
                  </div>
                  <div class="color-form-group">
                    <input type="checkbox" name="ColorCheckbox" id="yellow" class="color__checkbox" >
                    <label for="yellow" class="color__label color__label--yellow">Желтый</label>
                  </div>
                  <div class="color-form-group">
                    <input type="checkbox" name="ColorCheckbox" id="red" class="color__checkbox" >
                    <label for="red" class="color__label color__label--red">Красный</label>
                  </div>
                  <div class="color-form-group">
                    <input type="checkbox" name="ColorCheckbox" id="blue" class="color__checkbox" >
                    <label for="blue" class="color__label color__label--blue">Синий</label>
                  </div>
                </form>
              </div>
              <!-- /.view-product__color-wrap -->
              <div class="view-product__delivery-wrap">
                  <h4 class="view-product__delivery-title">Способ доставки:</h4>
                <div class="delivery-tab">
                  <button class="delivery-tablinks" onclick="openDelivery(event, 'Pickup')" id="defaultOpen">Самовывоз</button>
                  <button class="delivery-tablinks" onclick="openDelivery(event, 'Delivery')">Доставка</button>
                </div>
                <!-- /.delivery-tab -->
                <div class="delivery-content">
                  <div id="Pickup" class="delivery-tabcontent">
                    <div class="delivery-tabcontent__pickup">
                      <div class="delivery-form-group">
                      <input type="checkbox" name="deliveryCheckbox" id="adressOne" class="delivery__checkbox">
                      <label for="adressOne" class="delivery__label">Мангеликель 17 ЖК Коркем (Мангеликель 17)</label>
                       </div>
                      <div class="delivery-form-group">
                      <input type="checkbox" name="deliveryCheckbox" id="adressTwo" class="delivery__checkbox">
                      <label for="adressTwo" class="delivery__label">Шоурум № 1 2018 (Абая 8 Торговый дом Алтын)</label>
                      </div>
                    </div>
                  </div>
                  <!-- /.delivery-Pickup -->
                  <div id="Delivery" class="delivery-tabcontent">
                    <div class="delivery-tabcontent__address">
                      <label for="addressHome" class="address__label">Ваш адрес</label>
                      <input type="text" name="Home" class="address__input" id="addressHome" placeholder="Введите адрес">
                    </div>
                  </div>
                  <!-- /.delivery-Delivery -->
                </div>
                <!-- /.delivery-tabcontent -->
              </div>
              <!-- /.view-product__delivery-wrap -->
              <div class="view-product__button-wrap">
                <button class="view-product__button button--orange"> <i class="fas fa-shopping-bag view-product__button-icon"></i> Добавить в корзину</button>
                <button class="view-product__button button--outline-dark"> <i class="far fa-heart view-product__button-icon"></i> Избранное</button>
                <button class="view-product__button-last button--outline-dark">Оптовые предложение</button>
              </div>
              <!-- /.view-product__button-wrap -->
              <div class="view-product__other-wrap">
                <div>
                <span class="view-product__other-text">Товаров в корзине: <strong>2</strong></span>
                <span class="view-product__other-text">В избранном: <strong>5</strong></span>
                </div>
                <div>
                <span class="view-product__other-text-last">Поделиться товаром:</span>
                <span>
                <i class="fab fa-twitter view-product__other-icon"></i>
                <i class="fab fa-facebook-f view-product__other-icon"></i>
                <i class="fab fa-vk view-product__other-icon"></i>
                <i class="fab fa-odnoklassniki view-product__other-icon"></i>
                <i class="fab fa-google-plus-g view-product__other-icon"></i>
                </span>
                </div>
              </div>
              <!-- /.view-product__other-wrap -->
            </div>
            <!-- /.view-product__about-product -->
            </div>
            <!-- /.col-60 -->
          </div>
          <!-- /.row view-product__row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.view-product -->
      <section class="section product-detail">
        <div class="container">
          <div class="product-detail__row">
            <div class="col-80 product-detail__col-80">
              <div class="product-detail__wrap">
                <div class="product-detail__tab">
                  <button class="product-detail__tablinks" onclick="openDetail(event, 'Description')" id="Open">Характеристики товара</button>
                  <button class="product-detail__tablinks" onclick="openDetail(event, 'shopAssistant')">Продавец</button>
                  <button class="product-detail__tablinks" onclick="openDetail(event, 'anotherSite')">Товар на других сайтах</button>
                </div>
                <!-- /.product-detail__tab -->
                <div class="product-detail__content">
                  <div id="Description" class="product-detail__tabcontent">
                    <table class="detail-table">
                      <tr class="detail-table__line">
                        <td class="detail-table__item">ИНТ товара:</td>
                        <td class="detail-table__item detail-table__item--bold">GCN8C1593</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Номер товара:</td>
                        <td class="detail-table__item detail-table__item--bold">1344</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Тип предложения:</td>
                        <td class="detail-table__item detail-table__item--bold">Розничное</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Форма:</td>
                        <td class="detail-table__item detail-table__item--bold">Обычная продажа</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Категория:</td>
                        <td class="detail-table__item detail-table__item--bold">Рюкзаки</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Страна производитель:</td>
                        <td class="detail-table__item detail-table__item--bold">Китай (CN)</td>
                      </tr>
                      <tr class="detail-table__line">
                        <td class="detail-table__item">Компания производитель:</td>
                        <td class="detail-table__item detail-table__item--bold">PUMA</td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.delivery-tabcontent Description-->
                  <div id="shopAssistant" class="product-detail__tabcontent">
                    Информация о продавце
                  </div>
                  <!-- /.delivery-tabcontent Description-->
                  <div id="anotherSite" class="product-detail__tabcontent">
                    Список магазинов
                  </div>
                  <!-- /.delivery-tabcontent Description-->
                </div>
                <!-- /.product-detail__conent -->
              </div>
              <!-- /.product-detail-wrap -->
            </div>
            <!-- .col-80 -->
            <div class="col-25">
              <h3 class="product-detail__title">Недавно просмотренное</h3>
              <div class="recently-viewed">
                <div class="recently-viewed__image">
                  <img src="img/small_1.jpg" alt="small">
                </div>
                <div class="recently-viewed__information">
                  <h5 class="recently-viewed__title">Пуховик артикул: 2801</h5>
                  <span class="recently-viewed__subtitle">Пуховики</span>
                  <div class="recently-viewed__rating">
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                  </div>
                  <span class="recently-viewed__price"> <strong>21 000.00</strong> тг.</s>
                </div>
              </div>
              <!-- /.recently-viewed -->
              <div class="recently-viewed">
                <div class="recently-viewed__image">
                  <img src="img/small_2.png" alt="small">
                </div>
                <div class="recently-viewed__information">
                  <h5 class="recently-viewed__title">Блузка модель 111</h5>
                  <span class="recently-viewed__subtitle">Женская одежда</span>
                  <div class="recently-viewed__rating">
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                  </div>
                  <span class="recently-viewed__price"> <strong>3 000.00</strong> тг.</s>
                </div>
              </div>
              <!-- /.recently-viewed -->
              <div class="recently-viewed">
                <div class="recently-viewed__image">
                  <img src="img/small_3.png" alt="small">
                </div>
                <div class="recently-viewed__information">
                  <h5 class="recently-viewed__title">Обувь Т 452</h5>
                  <span class="recently-viewed__subtitle">Женская обувь</span>
                  <div class="recently-viewed__rating">
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                    <i class="far fa-star recently-viewed__icon"></i>
                  </div>
                  <span class="recently-viewed__price"> <strong>12 555.00</strong> тг.</s>
                </div>
              </div>
              <!-- /.recently-viewed -->
            </div>
            <!-- .col-25 -->
          </div>
          <!-- /.row product-detail__row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.section product-detail -->
    <section class="section offer">
          <div class="container">
            <div class="section-title offer__section-title">
              <div id="border-left"></div>
              <h2 class="section-title__heading">Вам так же могут понравиться</h2>
              <div id="border-right"></div>
            </div>
            <!-- /.section-title services__section-title -->
            <div class="row offer__row">
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
            <div class="offer__swiper-button">
              <div class="offer__swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
              <div class="offer__swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            </div>
            <!-- /.hero__swiper-button -->
          </div>  
          <!-- /.container -->
    </section>
    <!-- /.discounts -->
  </main>
  <?php include 'pages/services.php'; ?>
  <?php include 'pages/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>