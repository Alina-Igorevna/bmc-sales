<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $title = "Каталог";
    include 'pages/head.php'; 
  ?>
</head>
<body>
  <?php include 'pages/header.php'; ?>
  <main>

    <section class="section catalog">
      <div class="container">
        <div class="catalog__row">
          <div class="col-23">
            <div class="catalog__product-categories product-categories">
              <div class="product-categories__title">
                <h2>Категории товаров</h2>
              </div>
              <div class="product-categories__wrap">
                <div class="product-categories__button-wrap">
                  <button class="product-categories__button button--grey"> <i class="fas fa-tshirt product-categories__button__icon"></i> Одежда</button>
                  <button class="product-categories__button button--grey"><i class="fas fa-shoe-prints product-categories__button__icon"></i> Обувь</button>
                </div>
                <div class="product-categories__list-wrap">
                  <ul class="product-categories__list">
                    <li class="product-categories__item">Развлечения, досуг</li>
                    <li class="product-categories__item">Посуда и зеркала</li>
                    <li class="product-categories__item">Парфюмерия и косметика</li>
                    <li class="product-categories__item">Оптика</li>
                    <li class="product-categories__item">Мебель</li>
                    <li class="product-categories__item">Компьютерная техника</li>
                    <li class="product-categories__item">Кож.галантерея</li>
                    <li class="product-categories__item">Канцелярские товары</li>
                    <li class="product-categories__item">Источники света</li>
                    <li class="product-categories__item">Инструменты</li>
                    <li class="product-categories__item">Здоровье</li>
                    <li class="product-categories__item">Животные и растения</li>
                    <li class="product-categories__item">Дача и сад</li>
                    <li class="product-categories__item">Бытовая химия</li>
                    <li class="product-categories__item">Сельскохозяйственная продукция и сырье</li>
                    <li class="product-categories__item">Авто</li>
                    <li class="product-categories__item">Очки</li>
                    <li class="product-categories__item">Мобильные телефоны</li>
                    <li class="product-categories__item">Средства личной гигиены</li>
                    <li class="product-categories__item">Строительные материалы</li>
                    <li class="product-categories__item">Сувениры</li>
                    <li class="product-categories__item">Электротовары</li>
                    <li class="product-categories__item">Ювелирные изделия</li>
                    <li class="product-categories__item">Домашний текстиль, ковры</li>
                    <li class="product-categories__item">Туризм и спорт</li>
                    <li class="product-categories__item">Сумки, кошельки</li>
                    <li class="product-categories__item">Разное</li>
                    <li class="product-categories__item">Одежда</li>
                    <li class="product-categories__item">Обувь</li>
                    <li class="product-categories__item">Продукты питания</li>
                    <li class="product-categories__item">Книги</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.catalog__product-categories product-categories -->

          </div>
          <!-- /.col-34 -->
          <div class="col-76">
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
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
              <div class="col-34">
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
              <div class="col-34">
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
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
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
              <!-- / start card -->
              <div class="col-34">
                  <div class="card discounts__card">
                  <span class="card__discount-tag">40%</span>
                  <div class="card__image">
                  <img src="img/product_555.png" alt="product">
                  <div class="card__image-overlap-wrap">
                  <div class="card__image-overlap">
                  <i class="far fa-heart card__image-overlap--white"></i>
                  <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                  </div>
                  </div>
                  </div>
                  <!-- /.card__imade -->
                  <div class="card__description">
                    <a href="#" class="card__name">Туфли детские 555</a>
                    <a href="#" class="card__category">Обувь детская</a>
                    <div class="card__rating">
                    <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                    </div>
                  </div>
                  <!-- /.card__description -->
                  <div class="card__price-tag">
                    <span class="card__price">8 900.00 <span class="card__currency">тг.</span></span>
                    <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                  </div>
                  <div class="card__price-tag-old">
                    <span class="card__price-old">13 750.00 <span class="card__currency-old">тг.</span></span>
                  </div>
                  <!-- /.card__price-tag -->
                  </div>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
                <div class="card discounts__card">
                <span class="card__discount-tag">25%</span>
                <div class="card__image">
                <img src="img/product_sundress.png" alt="product">
                <div class="card__image-overlap-wrap">
                <div class="card__image-overlap">
                <i class="far fa-heart card__image-overlap--white"></i>
                <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                </div>
                </div>
                </div>
                <!-- /.card__imade -->
                <div class="card__description">
                  <a href="#" class="card__name">Сарафан в клетку №2</a>
                  <a href="#" class="card__category">Детская одежда</a>
                  <div class="card__rating">
                  <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                  </div>
                </div>
                <!-- /.card__description -->
                <div class="card__price-tag">
                  <span class="card__price">8 000.00 <span class="card__currency">тг.</span></span>
                  <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                </div>
                <div class="card__price-tag-old">
                  <span class="card__price-old">9 750.00 <span class="card__currency-old">тг.</span></span>
                </div>
                <!-- /.card__price-tag -->
                </div>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
                <div class="card discounts__card">
                <span class="card__discount-tag">35%</span>
                <div class="card__image">
                  <img src="img/product_coat.png" alt="product">
                <div class="card__image-overlap-wrap">
                <div class="card__image-overlap">
                <i class="far fa-heart card__image-overlap--white"></i>
                <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                </div>
                </div>
                </div>
                <!-- /.card__imade -->
                <div class="card__description">
                  <a href="#" class="card__name"> Пальто детское</a>
                  <a href="#" class="card__category">Детская одежда</a>
                  <div class="card__rating">
                  <i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="fas fa-star card__rating__star card__rating__star--orange"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                  </div>
                </div>
                <!-- /.card__description -->
                <div class="card__price-tag">
                  <span class="card__price">8 300.00 <span class="card__currency">тг.</span></span>
                  <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                </div>
                <div class="card__price-tag-old">
                  <span class="card__price-old">10 500.00 <span class="card__currency-old">тг.</span></span>
                </div>
                <!-- /.card__price-tag -->
                </div>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
                <div class="card discounts__card">
                <span class="card__discount-tag">40%</span>
                <div class="card__image">
                <img src="img/product_555.png" alt="product">
                <div class="card__image-overlap-wrap">
                <div class="card__image-overlap">
                <i class="far fa-heart card__image-overlap--white"></i>
                <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                </div>
                </div>
                </div>
                <!-- /.card__imade -->
                <div class="card__description">
                  <a href="#" class="card__name">Туфли детские 555</a>
                  <a href="#" class="card__category">Обувь детская</a>
                  <div class="card__rating">
                  <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                  </div>
                </div>
                <!-- /.card__description -->
                <div class="card__price-tag">
                  <span class="card__price">8 900.00 <span class="card__currency">тг.</span></span>
                  <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                </div>
                <div class="card__price-tag-old">
                  <span class="card__price-old">13 750.00 <span class="card__currency-old">тг.</span></span>
                </div>
                <!-- /.card__price-tag -->
                </div>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
                <div class="card discounts__card">
                <span class="card__discount-tag">25%</span>
                <div class="card__image">
                <img src="img/product_sundress.png" alt="product">
                <div class="card__image-overlap-wrap">
                <div class="card__image-overlap">
                <i class="far fa-heart card__image-overlap--white"></i>
                <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                </div>
                </div>
                </div>
                <!-- /.card__imade -->
                <div class="card__description">
                  <a href="#" class="card__name">Сарафан в клетку №2</a>
                  <a href="#" class="card__category">Детская одежда</a>
                  <div class="card__rating">
                  <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                  </div>
                </div>
                <!-- /.card__description -->
                <div class="card__price-tag">
                  <span class="card__price">8 000.00 <span class="card__currency">тг.</span></span>
                  <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                </div>
                <div class="card__price-tag-old">
                  <span class="card__price-old">9 750.00 <span class="card__currency-old">тг.</span></span>
                </div>
                <!-- /.card__price-tag -->
                </div>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list--> 
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
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
              <div class="col-34">
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
              <div class="col-34">
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
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
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
              <!-- / start card -->
              <div class="col-34">
                  <div class="card discounts__card">
                  <span class="card__discount-tag">40%</span>
                  <div class="card__image">
                  <img src="img/product_555.png" alt="product">
                  <div class="card__image-overlap-wrap">
                  <div class="card__image-overlap">
                  <i class="far fa-heart card__image-overlap--white"></i>
                  <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                  </div>
                  </div>
                  </div>
                  <!-- /.card__imade -->
                  <div class="card__description">
                    <a href="#" class="card__name">Туфли детские 555</a>
                    <a href="#" class="card__category">Обувь детская</a>
                    <div class="card__rating">
                    <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                    </div>
                  </div>
                  <!-- /.card__description -->
                  <div class="card__price-tag">
                    <span class="card__price">8 900.00 <span class="card__currency">тг.</span></span>
                    <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                  </div>
                  <div class="card__price-tag-old">
                    <span class="card__price-old">13 750.00 <span class="card__currency-old">тг.</span></span>
                  </div>
                  <!-- /.card__price-tag -->
                  </div>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
                <div class="card discounts__card">
                <span class="card__discount-tag">25%</span>
                <div class="card__image">
                <img src="img/product_sundress.png" alt="product">
                <div class="card__image-overlap-wrap">
                <div class="card__image-overlap">
                <i class="far fa-heart card__image-overlap--white"></i>
                <i class="fas fa-plus-circle card__image-overlap--orange"></i>
                </div>
                </div>
                </div>
                <!-- /.card__imade -->
                <div class="card__description">
                  <a href="#" class="card__name">Сарафан в клетку №2</a>
                  <a href="#" class="card__category">Детская одежда</a>
                  <div class="card__rating">
                  <i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i><i class="far fa-star card__rating__star"></i>
                  </div>
                </div>
                <!-- /.card__description -->
                <div class="card__price-tag">
                  <span class="card__price">8 000.00 <span class="card__currency">тг.</span></span>
                  <span class="card__add-icon"><i class="fas fa-plus-circle"></i></span>
                </div>
                <div class="card__price-tag-old">
                  <span class="card__price-old">9 750.00 <span class="card__currency-old">тг.</span></span>
                </div>
                <!-- /.card__price-tag -->
                </div>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list--> 
          </div>
          <!-- /.col-76 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section catalog -->
     
  </main>
  <?php include 'pages/services.php'; ?>
  <?php include 'pages/footer.php'; ?>
</body>
</html>