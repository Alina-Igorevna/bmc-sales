<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $title = "Каталог";
    include 'pages/head.php'; 
  ?>
</head>
<body>
  <?php include 'pages/metrika.php'; ?>
  <?php include 'pages/header.php'; ?>
  <main>
    <section class="section catalog">
      <div class="container">
        <div class="catalog__row catalog-header">
           <div class="page-hierarchy catalog-header__page-hierarchy">
             <span onclick="window.location.href='index.php'" style="cursor:pointer" class="page-hierarchy--dark">Главная</span>
             <span class="page-hierarchy--grey">Каталог</span>
           </div> 
           <!-- /.page-hierarchy-->
           <div class="catalog-header__filter-wrap filter-wrap">
             <form action="" class="filter__form">
               <div class="filter__group">
                 <label class="filter__label">Сортировать по:</label>
                  <select class="filter__select filter__select-date">
                    <option value="new" class="filter__option">Сначала новые</option>
                    <option value="old" class="filter__option">Сначала старые</option>
                  </select>
               </div>
               <!-- /.filter__group -->
               <div class="filter__group">
                <label class="filter__label">Товаров на стр.:</label>
                <select class="filter__select filter__select-sum">
                  <option value="24" class="filter__option">24 на странице</option>
                  <option value="48" class="filter__option">48 на странице</option>
                  <option value="72" class="filter__option">72 на странице</option>
                </select>
              </div>
              <!-- /.filter__group -->
             </form>
           </div>
           <!-- /.catalog-header__form -->
        </div>
        <div class="catalog__row">
          <div class="col-23 catalog__col-23">
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
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Развлечения, досуг</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Посуда и зеркала</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Парфюмерия и косметика</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Оптика</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Мебель</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Компьютерная техника</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Кож.галантерея</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Канцелярские товары</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Источники света</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Инструменты</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Здоровье</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Животные и растения</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Дача и сад</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Бытовая химия</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Сельскохозяйственная продукция и сырье</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Авто</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Очки</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Мобильные телефоны</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Средства личной гигиены</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Строительные материалы</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Сувениры</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Электротовары</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Ювелирные изделия</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Домашний текстиль, ковры</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Туризм и спорт</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Сумки, кошельки</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Разное</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Одежда</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Обувь</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Продукты питания</li>
                    <li onclick="window.location.href='catalog.php'" class="product-categories__item">Книги</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.catalog__product-categories product-categories -->

          </div>
          <!-- /.col-23 -->
          <div class="col-76 product-list">
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/blouse.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/jacket.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/sneakers.php'; ?>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/backpack.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/shoes.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/sundress.php'; ?>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/coat.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/tie.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/shoes.php'; ?>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list--> 
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/blouse.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/jacket.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/sneakers.php'; ?>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list-->
            <div class="product-list__row ">
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/backpack.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/shoes.php'; ?>
              </div>
              <!-- / end card -->
              <!-- / start card -->
              <div class="col-34">
              <?php include 'pages/product/sundress.php'; ?>
              </div>
              <!-- / end card -->
            </div>
            <!-- /.row product-list-->
            <div class="product-list__footer">
              <span class="product-list__title">Найдено товаров: <strong>510</strong>. Показано с <strong>1</strong> по <strong>15</strong></span> 
              <div class="product-list__pages">
                <div class="product-list__pages-number product-list__pages-number--active"><span>1</span> </div>
                <div class="product-list__pages-number"><span>2</span> </div>
                <div class="product-list__pages-number"><span>3</span> </div>
                <div class="product-list__pages-number"><span>4</span> </div>
                <div class="product-list__pages-number"><span>...</span> </div>
                <div class="product-list__pages-number"><span>30</span> </div>
                <div class="product-list__pages-next"><span><i class="fas fa-arrow-right"></i></span> </div>
              </div>
            </div>
            <!-- /.product-list__footer -->
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
  <?php include 'pages/modal.php'; ?>
  <?php include 'pages/listjs.php'; ?>
</body>
</html>