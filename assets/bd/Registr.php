<?php
session_start();
// начало сесии 
// см Voprosi.php там одно и тоже
require_once('bd.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $cek = $_POST['cek'];

        if (empty($phone) || empty($email) || empty($name) || empty($cek)) {
            $_SESSION['message'] = 'Пожалуйста, заполните все поля';
        } else {
            $sql = "INSERT INTO `rega` (name, phone, email) VALUES ('$name', '$phone', '$email')";
                
            if ($conn->query($sql) === TRUE) {
                $_SESSION['message'] = 'Успешная регистрация';
                header('Location: ../../index.php'); 
            } else {
                $_SESSION['message'] = 'Ошибка';
            }
        }
    }

?>


<form action="" method="post">
    <div class="pod-blok-reg">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="phone" placeholder="Ваш номер телефона">
        <input type="email" name="email" placeholder="Ваш e-mail">
        <div class="sac">
            <input class="cek" type="checkbox" name="cek">
            <p>Вы даёте своё согласие на обработку персональных данных</p>
        </div>
        <?php 
        if (isset($_SESSION['message'])){
            echo '<p class="messge">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
        <button type="submit" class="buttom-rega">Продолжить</button>
    </div>
</form>
