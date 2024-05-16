<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/main.css">

    <script defer src="../assets/main.js"></script>

    <title>Быдло?</title>
</head>
<body>
    <?php include('../assets/php/hed.php'); ?>
    <main class="main-3">
        <div class="collums">
        <?php 
            require_once ('../assets/bd/bd.php');
            
            $catalog_id = $_GET['id'];

            $sql = "SELECT * FROM catalog WHERE id = $catalog_id";
            $res = mysqli_query($conn,$sql);

            if($res && mysqli_num_rows($res) > 0) {

                while($row = mysqli_fetch_assoc($res)) {
        ?>
            <div>
                <img class="catinkiCars" src="<?= $row["img8"]?>" width="750px" height="560px" alt="">
                <img src="<?= $row["img2"]?>" alt="">
                <img src="<?= $row["img3"]?>" alt="">
                <img src="<?= $row["img4"]?>" alt="">
                <img src="<?= $row["img5"]?>" alt="">
                <img src="<?= $row["img6"]?>" alt="">
                <img src="<?= $row["img7"]?>" alt="">
            </div>
            <div>
                <h1 class="bol-text"><?= $row['name'] ?> , <?= $row['Year'] ?></h1>
                <h1 class="ot">ОТ <?= $row["cena"]?></h1>
                <div class="div">
                    <p>Пробег</p>
                    <p class="smest"><?= $row["Mileage"]?></p>
                </div>
                <hr>
                <div class="div">
                    <p>Год выпуска</p>
                    <p class="smest"><?= $row["Year"]?></p>
                </div>
                <hr>
                <div class="div">
                    <p>Двигатель</p>
                    <p class="smest"><?= $row["Fuel type"]?></p>
                </div>
                <hr>
                <div class="div">
                    <p>Мощность</p>
                    <p class="smest"><?= $row["Power"]?></p>
                </div>
                <hr>
                <div class="div">
                    <p>Трансмиссия</p>
                    <p class="smest"><?= $row["Transmission"]?></p>
                </div>
                <hr>
                <p><?= $row["description"]?></p>
                <div class="border-cars">
                    <li>Под заказ</li>
                    <div class="cent">
                        <input type="button" class="but-casr1" id="zakaz" value="Заказать"/>
                        <input type="buttom" class="but-casr2" id="FAQ" value="Задать вопрос" />
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </main>
    <footer>
        <h2>+7 993 603-32-99</h2>
        <h2>г. Москва, Белокаменное шоссе, д. 20 офис 213</h2>
        <h2>Пн-пт 9.00-18.00, Сб 9.00 - 14.00, Вс выходной</h2>
    </footer>
</body>
<?php include('../assets/bd/Vopros.php'); ?>
    <?php include('../assets/bd/Zakazat.php'); ?>
</html>