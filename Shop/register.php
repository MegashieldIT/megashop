

<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MegaShop / Регистрация</title>
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
  <h2>Регистрация</h2>
    <form method="post">
        Имя пользователя:<br>
        <input type="text" name="username" required>
        <br>
        Пароль:<br>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
    <?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "user_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Регистрация прошла успешно!</p>";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
  </main>
</body>
</html>