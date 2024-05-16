<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/main.css">

    <script defer src="assets/main.js"></script>

    <title>who</title>
</head>
<body>
    <?php include('assets/php/heder.php'); ?>
    <main class="main-2">
        <section class="blok-3">
            <div class="vse">
            <h1  class="istoriya">Витрина автомобилей</h1>
            <?php 
                require_once ('assets/bd/bd.php');

                $sql = "SELECT * FROM catalog ORDER BY id";
                $res = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($res) > 0) {
                        // Цикл по результатам запроса
                        while($row = mysqli_fetch_assoc($res)) {
                            $game_id = $row['id']
            ?>
                <div class="border-2">
                    <div>
                        <div><img src="<?= $row['img1'] ?>" alt=""></div>
                        <h1 class="avtoo"><?= $row['name'] ?> , <?= $row['Year'] ?></h1>
                        <div class="b3-1">
                            <div>Конфигурация <?= $row['Configuration'] ?></div>
                            <div>Коробка передач <?= $row['Transmission'] ?></div>
                            <div>Тип топлива <?= $row['Fuel type'] ?></div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от <?= $row['cena'] ?></h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/cars.php?id=<?= $game_id ?>';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
                <!-- <div class="border-2">
                    <div>
                        <div><img src="assets/papa/Rectangle 18.png" alt=""></div>
                        <h1 class="avtoo">BMW X6(G06), 2023</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive 40i</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Бензин</div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от 7 232 990 ₽</h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/bmv g06.php';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="vse">
                <div class="border-2">
                    <div>
                        <div><img src="assets/papa/Rectangle 19.png" alt=""></div>
                        <h1 class="avtoo">BMW X3 M40i, 2019</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive 40i</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Бензин</div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от 5 854 990 ₽</h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/bmv x3.php';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div>
                <div class="border-2">
                    <div>
                        <div><img src="assets/papa/Rectangle 17.png" alt=""></div>
                        <h1 class="avtoo">Toyota LC(300), 2023</h1>
                        <div class="b3-1">
                            <div>Конфигурация 3.5 AT (415 л.с.)</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Бензин</div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от 12 750 473 ₽</h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/Toyota Lc.php';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="vse">
                <div class="border-2">
                    <div>
                        <div><img src="assets/papa/Rectangle .png" alt=""></div>
                        <h1 class="avtoo">BMW 750i, 2023</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive 50i</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Бензин</div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от 13 446 457 ₽</h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/bmv g70.php';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div>
                <div class="border-2">
                    <div>
                        <div><img src="assets/papa/Rectangle 18.png" alt=""></div>
                        <h1 class="avtoo">BMW X6(G06), 2023</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive 40i</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Бензин</div>
                        </div>
                        <div class="centrovka-2">
                            <h2 class="qwer">Цена от 7 232 990 ₽</h2>
                            <input type="button" class="zakaz" onclick="location.href='Cars/bmv g06.php';" value="Заказать автомобиль" />
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
    </main>
    <footer>
        <h2>+7 993 603-32-99</h2>
        <h2>г. Москва, Белокаменное шоссе, д. 20 офис 213</h2>
        <h2>Пн-пт 9.00-18.00, Сб 9.00 - 14.00, Вс выходной</h2>
    </footer>
</body>
</html>