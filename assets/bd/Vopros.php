<?php
session_start();

require_once('bd.php');
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $cek = $_POST['cek'];
    // переменные которые беруться с формы 
    if (empty($phone) || empty($name) || empty($cek)) {
        $_SESSION['message'] = 'Пожалуйста, заполните все поля';
        // кароч чтоб не как у других я сделал тебе вывод ошибок сесией 
        // $_SESSION - ассоциативный массив, содержащий переменные сессии, которые доступны для текущего скрипта. Это суперглобальная переменная , она доступна во всех контекстах скрипта.
        // насчёт правильности такого способа хз. но по факту всё работает как надо. вот просто скажешь что так увидел и сделал 
    }else {
        $sql = "INSERT INTO `Vopros` (name, phone) VALUES ('$name', '$phone')";
        // подключение к phpmyadmin на сохранения данных с таблицы Vopros
            
            if ($conn->query($sql) === TRUE) {
                // проверка 
                header('location: ../../index.php');
                // переброс на index.php после успеха
            } else {
                echo "Ошибка: " . $conn->error;
                // если нет то ошибка
            }
        }
?>

<section class="rega">
    <form action="" method="post">
        <!-- форма (form) c методом post -->
        <div id="menu1" class="rega-2">
            <div class="zadat-v">
                <h1>Задать вопрос</h1>
                <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг</p>
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
            if (isset($_SESSION['message'])){
                // проверка ссеии 
                echo '<p class="messge">' . $_SESSION['message'] . '</p>';
                // вывод сесии (ошибки)
                unset($_SESSION['message']);
                // unset() удаляет перечисленные переменные. то есть сесия очишаеться  
            }
            ?>
            <div>
                <button class="sdadas" id="otpr">Отправить</button>
            </div>
        </div>
    </form>
</section>
<section class="bakk">
    <img src="assets/papa/Без имени-1.png" alt=""  width="2485" height="2000">
</section>