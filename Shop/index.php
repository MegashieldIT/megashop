<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MegaShop</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="adaptation.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<title>MegaShop / Главная</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="cart.php">Корзина</a></li>
        <label class="search">
          <input type="search" id="search-input" placeholder="Поиск"> 
        </label>
      </ul>
      <ul>
        <li><a href="register.php">Регистрация</a></li>
        <li><a href="login.php">Вход</a></li>
        <li><a href="profile.html" id="profile-btn" style="display: none;">Личный кабинет</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="assortiment">
      <div class="item" data-id="1" data-name="Черная футболка" data-price="10.99">
        <img src="images/1.png">
        <p>Черная футболка</p>
        <span class="price">$10.99</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="2" data-name="Белые кроссовки" data-price="15">
        <img src="images/2.png">
        <p>Белые кроссовки</p>
        <span class="price">$15</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="3" data-name="Футболка Nike" data-price="12.50">
        <img src="images/3.png">
        <p>Футболка Nike</p>
        <span class="price">$12.50</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="4" data-name="Красный Свитер" data-price="21.50">
        <img src="images/4.png">
        <p>Красный Свитер</p>
        <span class="price">$21.50</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="5" data-name="Белая футболка" data-price="7.99">
        <img src="images/5.png">
        <p>Белая Футболка</p>
        <span class="price">$7.99</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="6" data-name="Синий Свитер" data-price="18">
        <img src="images/6.png">
        <p>Синий Свитер</p>
        <span class="price">$18</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item"  data-id="7" data-name="Кроссовки Adidas" data-price="40">
        <img src="images/7.png">
        <p>Кроссовки Adidas</p>
        <span class="price">$40</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item" data-id="8" data-name="Черные штаны" data-price="15">
        <img src="images/8.png">
        <p>Черные штаны</p>
        <span class="price">$15</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item" data-id="9" data-name="Шорты Adidas" data-price="8.50">
        <img src="images/9.png">
        <p>Шорты Adidas</p>
        <span class="price">$8.50</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item" data-id="10" data-name="Штаны Adidas" data-price="30.5">
        <img src="images/10.png">
        <p>Штаны Adidas</p>
        <span class="price">$30.5</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
      <div class="item" data-id="11" data-name="Шорты" data-price="9">
        <img src="images/11.png">
        <p>Шорты</p>
        <span class="price">$9</span>
        <a class="add-to-cart" href="#">Добавить в корзину</a>
      </div>
    </div>
  </main>

    <footer>
      <p>Телефон: +123456789</p>
      <p>Email: example@domain.com</p>
      <p>Адрес: Улица, Город, Страна</p>
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://instagram.com" target="_blank">Instagram</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
      </div>
    </footer>

  <script src="app.js"></script>
</body>
</html>