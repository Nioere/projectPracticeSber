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

  <!-- прелоадер -->

  <!-- <div class="preloader">
    <div class="preloader__row">
      <div class="preloader__item"></div>
      <div class="preloader__item"></div>
    </div>
  </div> -->

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

    <!-- Слайдер -->

    <div class="all">
		<input checked type="radio" name="respond" id="desktop">
			<article id="slider">
					<input checked type="radio" name="slider" id="switch1">
					<input type="radio" name="slider" id="switch2">
					<input type="radio" name="slider" id="switch3">
					<input type="radio" name="slider" id="switch4">
					<input type="radio" name="slider" id="switch5">
				<div id="slides">
					<div id="overflow">
						<div class="image">
							<article><img src="img/slider/sliderOne.png"></article>
							<article><img src="img/slider/sliderTwo.png"></article>
							<article><img src="img/slider/sliderThree.png"></article>
							<article><img src="img/slider/sliderFour.png"></article>
							<article><img src="img/slider/sliderFive.png"></article>
						</div>
					</div>
				</div>
				<div id="controls">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
				<div id="active">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
			</article>
	</div>
  
  <!-- Карточки -->
  <div class="row">
  <div class="example-1 ex1bg card">
    <div class="wrapper">
      <div class="data">
        <div class="content">
          <h1 class="title"><a href="catalog.php">Кредит на любые цели</a></h1>
          <p class="text">Ставка всего 4% и кешбек бонусами</p>
        </div>
      </div>
    </div>
  </div>

  <div class="example-1 ex2bg card">
    <div class="wrapper">
      <div class="data">
        <div class="content">
          <h1 class="title"><a href="catalog.php">Открыть лучший вклад</a></h1>
          <p class="text">Получите до 10% годовых на ваши сбережения</p>
        </div>
      </div>
    </div>
  </div>

  <div class="example-1 ex3bg card">
    <div class="wrapper">
      <div class="data">
        <div class="content">
          <h1 class="title"><a href="catalog.php">Кредитная карта</a></h1>
          <p class="text">Пользуйтесь деньгами 120 дней без процентов. Обслуживание 0&#8381;/мес</p>
        </div>
      </div>
    </div>
  </div>
</div>


    <main></main>


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
    <script src="js/slider.js"></script>
</body>
</html>