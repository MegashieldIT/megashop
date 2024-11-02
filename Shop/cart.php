<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Корзина</title>
  <link rel="stylesheet" href="adaptation.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <title>MegaShop / Корзина</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="cart.php">Корзина</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Корзина</h1>
    <div id="cart-items">
    </div>
    <div id="total">
      <p>Общая цена: $<span id="total-price">0</span></p>
      <button id="checkout">Оформить заказ</button>
    </div>

    <!-- Форма оформления заказа -->
    <section id="order-form-section" style="display: none;">
      <h2>Оформление заказа</h2>
      <form id="order-form">
        <div class="form-group">
          <label for="name">ФИО</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Электронная почта</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Телефон</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="address">Адрес доставки</label>
          <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="city">Город</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
          <label for="postal-code">Почтовый индекс</label>
          <input type="text" id="postal-code" name="postal-code" required>
        </div>
        <div class="form-group">
          <label for="payment-method">Способ оплаты</label>
          <select id="payment-method" name="payment-method" required>
            <option value="credit-card">Кредитная карта</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Банковский перевод</option>
          </select>
        </div>
        <button type="submit">Подтвердить заказ</button>
      </form>
    </section>
  </main>

  <script src="app.js"></script>
  <script>
    document.getElementById('checkout').addEventListener('click', function() {
      document.getElementById('order-form-section').style.display = 'block';
    });

    document.getElementById('order-form').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Заказ успешно оформлен!');
    });
  </script>
</body>
</html>