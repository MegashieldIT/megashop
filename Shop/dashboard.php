<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_username'])) {
    $_SESSION['username'] = htmlspecialchars(trim($_POST['new_username']));
    $message = "Имя успешно изменено на: " . $_SESSION['username'];}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MegaShop / Личный Кабинет</title>
</head>
<body>
<header>
    <nav>
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a>Корзина</a></li>
        <label>
          <input type="search" placeholder="Поиск"> 
        </label>
      </ul>
      <ul>
        <li><a href="register.php">Регистрация</a></li>
        <li><a href="login.php">Вход</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Это ваш личный кабинет.</p>

    <?php if (isset($message)): ?>
        <p style="color: green;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="new_username">Изменить имя:</label>
        <input type="text" id="new_username" name="new_username" required>
        <button type="submit">Сохранить</button>
    </form>

    <a href="logout.php">Выйти</a>
  </main>
</body>
</html>