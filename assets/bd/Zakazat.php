<?php

require_once('bd.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$cek = $_POST['cek'];

if (empty($phone) || empty($name) || empty($cek)) {
    $_SESSION['messagee'] = 'Пожалуйста, заполните все поля';
}else {
    $sql = "INSERT INTO `Vopros` (name, phone) VALUES ('$name', '$phone')";
        
        if ($conn->query($sql) === TRUE) {
            header('location: ../../index.php');
            exit();
        } else {
            echo "Ошибка: " . $conn->error;
        }
    }
?>

<section class="zakazs" id="zakazForm" style="display: none;">
    <form action="" method="post">
        <div class="rega-2">
            <div class="zadat-v">
                <h1>Заказ</h1>
                <p>Менеджеры компании позвонят вам в ближайшее время</p>
            </div>
            <div>
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" placeholder="Телефон">
            </div>
            <div class="assets-1">          
                <input class="ceks" type="checkbox" name="cek">
                <p>Вы даёте своё согласие на обработку персональных данных</p>
            </div>
            <?php 
            if (isset($_SESSION['messagee'])){
                echo '<p class="messge">' . $_SESSION['messagee'] . '</p>';
                unset($_SESSION['messagee']);
            }
            ?>
            <div>
                <button class="sdadas" id="submitBtn">Отправить</button>
            </div>
        </div>
    </form>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var zakazButton = document.getElementById("zakaz");
    var zakazForm = document.getElementById("zakazForm");
    var submitButton = document.getElementById("submitBtn");

    zakazButton.addEventListener("click", function() {
        zakazForm.style.display = "block";
    });

    submitButton.addEventListener("click", function() {
        zakazForm.style.display = "none";
    });
});
</script>