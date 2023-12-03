<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Российский Банк</title>
    <link rel="icon" href="img/icons/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/contacts-section-top.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contacts-icon.css">

    <link rel="stylesheet" href="css/topmenu.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>

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

    
    <!-- контакты -->

    <!-- <div class="section-top">
      <div class="container section-top__container">
        <h1 class="section-top__title">Поддержка: +7 (999) 888-88-88</h1>
        <ul class="socialIcons">
          <li><a class="vk" href="https://"><i class="fa fa-chevron-up"></i></a></li>
          <li><a class="instagram" href="http://instagram.com/starostina9789"><i class="fa fa-instagram"></i></a></li>
          <li><a class="whatsapp" href="https://wa.me/79067108693"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </div> -->


    <!-- карта -->

    <div class="section-top">
      <div class="container section-top__container">
        <h1 class="section-top__map">Поддержка:</h1>
          <div class="phone">
          <a class="btnfoot" href="mailto:madgriffin@yandex.ru">madgriffin@yandex.ru</a>
          </div>
        <h1 class="section-top__map">Мы находимся по адресу:</h1>
        <div class="map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d0b06d2cda1184c1bc35b37f552ad946dd3606c3cd9b6006aaf0bd9ccb9f136&amp;source=constructor" width="720" height="450" frameborder="0"></iframe>
        </div>
        <div class="map-mobile">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d0b06d2cda1184c1bc35b37f552ad946dd3606c3cd9b6006aaf0bd9ccb9f136&amp;source=constructor" width="320" height="300" frameborder="0"></iframe>
        </div>
        </div>
    </div>
    
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

<main>

</main>
    <footer></footer>
    <script src="js/style.js"></script>
</body>
</html>