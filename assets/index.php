<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;700&display=swap" rel="stylesheet">

    <script defer src="assets/main.js"></script>

    <link rel="stylesheet" href="assets/main.css">

    <title>Быдло?</title>
</head>
<body>
    <?php include('assets/php/heder.php'); ?>
    <main>
        <section class="blok">
            <div class="zatmenie"></div>
            <div class="blok-dada">
                <div class="b-3"><h3>Наши представительства работают в США, Европе, Китае и Корее</h3></div>
                <div class="b-1"><h3>ОПЛАТА 20/80</h3><p>20% вы оплачиваете во время заключения договора, остаток при получении</p></div>
                <div class="b-2"><h2>ЛИЗИНГ, КРЕДИТ И TRADE-IN</h2></div>
            </div>
            <div class="blok-znak">
                <h3>Поставка автомобилей из Германии</h3>
                <input type="button" class="yznat"  id="FAQ" value="УЗНАТЬ БОЛЬШЕ" />
            </div>
        </section>
        <section class="blok-2">
            <div><h2>УСПЕШНО ПОСТАВЛЯЕМ</h2><span class="avto"><h1>> 50</h1><div ><p>авто в </p><p>месяц</p></div></span></div>
            <div><h2>ДОВОЛЬНЫХ КЛИЕНТОВ</h2><h1 class="d13">> 1359</h1></div>
            <div><h2>СТОИМОСТЬ АВТО ПОД КЛЮЧ</h2><h1>от 5 000 000 ₽</h1></div>
        </section>
        <section class="blok-3">
            <h1  class="istoriya">История продаж</h1>
            <section class="blok-3">
            <div class="vse">
                <h1  class="istoriya">История продаж</h1>
                        <?php 
                        require_once ('assets/bd/bd.php');

                        $sql = "SELECT * FROM catalog ORDER BY id";
                        $res = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                        ?>
                <div class="border">
                    <div>
                        <div><img src="<?= $row['img1'] ?>" alt=""></div>
                        <div class="centrovka">
                            <h1 class="magaz">Автомобиль продан</h1>
                        </div>
                        <h1 class="avtoo"><?= $row['name'] ?> , <?= $row['Year'] ?></h1>
                        <div class="b3-1">
                            <div>Конфигурация <?= $row['Configuration'] ?></div>
                            <div>Коробка передач <?= $row['Transmission'] ?></div>
                            <div>Тип топлива <?= $row['Fuel type'] ?></div>
                        </div>
                        <div class="dada">
                            <p class="cena">Цена в городе <?= $row['city'] ?></p>
                            <h6 class="money"><?= $row['cena'] ?></h6>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>

                <!-- <div class="border">
                    <div>
                        <div><img src="assets/papa/Rectangle 8.png" alt=""></div>
                        <div class="centrovka">
                            <h1 class="magaz">Автомобиль продан</h1>
                        </div>
                        <h1 class="avtoo">BMW X5 (F15), 2018</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive 30d</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Дизель</div>
                        </div>
                        <div class="dada">
                            <p class="cena">Цена в городе Нижний-Новгород</p>
                            <h6 class="money">4 446 457 ₽</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vse">
                <div class="border">
                    <div>
                        <div><img src="assets/papa/Rectangle 11.png" alt=""></div>
                        <div class="centrovka">
                            <h1 class="magaz">Автомобиль продан</h1>
                        </div>
                        <h1 class="avtoo">BMW X5 (G05), 2021</h1>
                        <div class="b3-1">
                            <div>Конфигурация xDrive M50d</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Дизель</div>
                        </div>
                        <div class="dada">
                            <p class="cena">Цена в городе Москва</p>
                            <h6 class="money">9 384 229 ₽</h6>
                        </div>
                    </div>
                </div>
                <div class="border">
                    <div>
                        <div><img src="assets/papa/Rectangle 10.png" alt=""></div>
                        <div class="centrovka">
                            <h1 class="magaz">Автомобиль продан</h1>
                        </div>
                        <h1 class="avtoo">VW Touareg(III), 2021</h1>
                        <div class="b3-1">
                            <div>Конфигурация 2.0 (249л.с) 4WD</div>
                            <div>Коробка передач АКПП</div>
                            <div>Тип топлива Дизель</div>
                        </div>
                        <div class="dada">
                            <p class="cena">Цена в городе Москва</p>
                            <h6 class="money">6 549 900 ₽</h6>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <section class="blok-4">
            <h1 class="nash">Наши преимущества</h1>
            <div class="b-4-border">
                <div class="b-4-colums">
                    <div><h2>Отлаженная логистика</h2><p>Доставляем автомобили с помощью своих автовозов во все регионы</p></div>
                    <div><h2>Широкий выбор</h2><p>Комплектации по вашим требованиям и эксклюзив под заказ. Есть автомобили в наличии</p></div>
                    <div><h2>Фиксированная цена</h2><p>Цена, указанная в договоре, является фиксированной и не может быть изменена</p></div>
                </div>
                <div class="b-4-colums">
                    <div><h2>Кредит, лизинг, trade-in</h2><p>Готовы предложить различные финансовые инструменты при покупке автомобиля</p></div>
                    <div><h2>Доставляем быстрее всех</h2><p>Срок поставки в среднем занимает 25-45 дней. Иногда доходит до 55 дней, но больше не бывает</p></div>
                    <div><h2>Надежное юрлицо</h2><p>Многопрофильная кампания с представительством в США, Европе, Китае и Корее</p></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <h2>+7 993 603-32-99</h2>
        <h2>г. Москва, Белокаменное шоссе, д. 20 офис 213</h2>
        <h2>Пн-пт 9.00-18.00, Сб 9.00 - 14.00, Вс выходной</h2>
    </footer>
</body>
    <?php include('assets/bd/Vopros.php'); ?>
</html>