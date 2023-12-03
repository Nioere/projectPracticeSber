<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "sber_db");

if (isset($_POST['add_to_cart'])) {
  $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $item = array(
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    );

    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'][] = $item;
    } else {
        $_SESSION['cart'] = array($item);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Российский Банк</title>
    
    <link rel="icon" href="img/icons/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scrollup.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:100'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

      <link rel="stylesheet" href="css/topmenu.css">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/components-cotalog.css">
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/cards.css">
      <link rel="stylesheet" href="css/footer.css">

</head>
<body>

  <!-- scrollup -->

  <div class="scrollup">
    <i class="fa fa-chevron-up"></i>
  </div>
    
  <!-- меню -->
    
  <header class="header-page">
  <div class="container header-page__container">
    <div class="header-page__start">
      <div class="logo">
          <img class="logo_img" src="img/icons/logo-nav.png" alt="">
      </div>
    </div>
    <div class="header-page__end">
      <nav class="header-page__nav">
        <ul class="header-page__ul">
          <li class="header-page__li">
            <a class="header-page__link" href="catalog.php">
              <span class="header-page__text">Каталог</span>
            </a>
          </li>
          <li class="header-page__li">
            <a class="header-page__link" href="index.php">
              <span class="header-page__text">О нас</span>
            </a>
          </li>
          <li class="header-page__li">
            <a class="header-page__link" href="contacts.php">
              <span class="header-page__text">Где нас найти?</span>
            </a>
          </li>

          <?php
            if(isset($_COOKIE['login']) && $_COOKIE['login'] !== '') {
          ?>

            <li class="header-page__li topmenu_text_padding">
            <a class="header-page__link" href="cart.php">
              <span class="header-page__text">Корзина</span>
            </a>
          </li>

          <?php
            if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'admin') {
          ?>

          <li class="header-page__li">
            <a class="header-page__link" href="admin">
              <span class="header-page__text">Админ панель</span>
            </a>
          </li>

          <?php
          } else {
          ?>

          <?php
            }
          ?>

      <li class="header-page__li">
            <a class="header-page__link" href="user.php">
              <span class="header-page__text"><?= $_COOKIE['login'] ?></span>
            </a>
          </li>
        </ul>
      </nav>

          <?php
          } else {
          ?>

        <ul>
          </ul>
            </nav>
              <div class="phone">
              <a class="phone__item header-page__phone" href="login.html">Личный кабинет</a>
            </div>

          <?php
            }
          ?>

      <div class="header-page__hamburger">
        <button class="btn-menu" type="button">
          <span class="btn-menu__box">
            <span class="btn-menu__inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
</header>


    <!-- мобильное меню -->

    <header class="header">
      <div class="hamburger">
        <button class="button hamburger__button js-menu__toggle">
          <span class="hamburger__label">Меню</span>
        </button>
      </div>
      <nav class="menu"><a></a>
        <ul class="list menu__list">
          <li class="menu__group">
            <a href="catalog.php" class="link menu__link">Каталог</a>
          </li>
          <li class="menu__group">
            <a href="index.php" class="link menu__link">О нас</a>
          </li>
          <li class="menu__group">
            <a href="contacts.php" class="link menu__link">Где нас найти?</a>
          </li>

          <?php
            if(isset($_COOKIE['login']) && $_COOKIE['login'] !== '') {
          ?>

          <li class="menu__group">
            <a href="cart.php" class="link menu__link">Корзина</a>
          </li>

        <li class="menu__group">
          <div class="phone">
            <a class="phone__item header-page__phone" href="user.php" width="100%" ><?= $_COOKIE['login'] ?></a>
          </div>
        </li>

          <?php
            } else {
          ?>

        <li class="menu__group">
          <div class="phone">
            <a class="phone__item header-page__phone" href="login.html" width="100%" >Личный кабинет</a>
          </div>
        </li>

          <?php
            }
          ?>

        </ul>
      </nav>
    </header>
    

    <!-- коталог -->
    
    <section class="section section-catalog">
      <div class="container">
        <div class="catalog">

        <?php
        $query = "SELECT * FROM items";
        $result = mysqli_query($connect,$query);
        while ($row = mysqli_fetch_array($result)) {?>

        <div class="catalog__item">
        <form method="post" action="catalog.php">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="product catalog__product">
              <img src="img/cards/<?= $row['image']; ?>" alt="" class="product__img">
              <div class="product__content">
                <h3 class="product__title"><?= $row['name']; ?></h3>
                <p class="product__description"><?= $row['info']; ?></p>
              </div>
              <footer class="product__footer">
                <div class="product__bottom">
                  <div class="product__price">
                    <span class="product__price-value"><?= $row['price']; ?></span>
                  </div>
                  <input type="submit" name="add_to_cart" class="btn product__btn" value="В корзину">
                </div>
              </footer>
              <input type="hidden" name="name" value="<?= $row['name'] ?>">
              <input type="hidden" name="price" value="<?= $row['price'] ?>">
              </form>
            </div>
         </div>

         <?php }
        ?>

        </div>
      </div>
    </section>

<main>

</main>
    
    <!-- footer -->

    <div class="footer_div">
    <footer class="footer">
  	 <div class="container_footer">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Российский Банк</h4>
  	 			<ul>
           <h5>Банк, где ваше финансовое будущее обретает крылья</h5>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Ссылки</h4>
  	 			<ul>
  	 				<li><a href="#">Каталог</a></li>
  	 				<li><a href="#">Новинки</a></li>
  	 				<li><a href="#">Где нас найти?</a></li>
  	 			</ul>
  	 		</div>

         <?php
            if(isset($_COOKIE['login']) && $_COOKIE['login'] !== '') {
          ?>

        <div class="footer-col">
  	 			<h4>Клиентам</h4>
  	 			<ul>
            <h5>Спасибо, что пользуетесь нашими услугами!</h5>
          </ul>
  	 		</div>

         <?php
          } else {
          ?>

          <div class="footer-col">
  	 			<h4>Попробуйте</h4>
  	 			<ul>
            <h5>Откройте счет в нашем банке и откройте двери к финансовой свободе, где ваше будущее процветает</h5>
             <a class="btnfoot" href="reg.html">Регистрация</a>
          </ul>
  	 		</div>

          <?php
            }
          ?>

  	 		<div class="footer-col">
  	 			<h4>Контакты</h4>
          <ul>
           <li><a href="mailto:madgriffin@yandex.ru">madgriffin@yandex.ru</a></li>
          </ul>
  	 		</div>
  	 	</div>
  	 </div>
     <div class="container_footer">
  	 	<div class="row">
  	 		<div class="footer-col-main">
  	 			<h4>Ерёменко Никита 2023. Все права защищены.</h4>
  	 		</div>
      </div>
      </div>
  </footer>
<div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
    
    <script src="js/style.js"></script>
    <script src="js/topmenu.js"></script>
    <script src="js/scrollup.js"></script>
</body>
</html>