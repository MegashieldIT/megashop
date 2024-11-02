<?php
session_start(); // Начинаем сессию

// Подключение к базе данных
$servername = "localhost";
$username = "root"; // Обычно 'root'
$password = ""; // Оставьте пустым, если не устанавливали пароль
$dbname = "user_db"; // Имя вашей базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL-запрос для получения пользователя
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Проверяем пароль
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username; // Сохраняем имя пользователя в сессии
            header("Location: dashboard.php"); // Перенаправляем на личный кабинет
            exit();
        } else {
            echo "Неверный пароль.";
        }
    } else {
        echo "Пользователь не найден.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MegaShop / Вход</title>
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
    <h2>Вход</h2>
      <form method="post">
          Имя пользователя:<br>
          <input type="text" name="username" required>
          <br>
          Пароль:<br>
          <input type="password" name="password" required>
          <br><br>
          <input type="submit" value="Войти">
      </form>
  </main>
</body>
</html>