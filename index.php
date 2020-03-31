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
  <section class="section popular">
  <div class="container">
    <div class="section-title popular__section-title">
      <div id="border-left"></div>
      <h2 class="section-title__heading">Популярные товары</h2>
      <div id="border-right"></div>
    </div>
    <!-- /.section-title services__section-title -->
    <div class="row popular__row">
      <div class="col-23 card popular__card">
        <div class="card-image"><img src="img/product_111.png" alt="product"></div>
        <a href="#" class="card-name"> Блузка модель 111</a>
        <a href="#" class="card-category">Женская одежда</a>
        <div class="card-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
        <div class="prise-tag">
          <strong class="card-price">3000.00 тг.</strong>
          <span class="add-ocon"><i class="fas fa-plus-circle"></i></span>
        </div>
      </div>
      <!-- /.card-platform -->
    </div>
    <!-- /.row -->
    <button class="popular__button button--outline-dark">Больше товаров <i class="fas fa-chevron-right"></i></button>
  <!-- /.container -->
</section>
<!-- /.popular -->
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