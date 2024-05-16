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

    <title>Document</title>
</head>
<body>
    <main class="main-reg">
        <section class="blok-reg">
            <h1>Регистрация в личном кабинете</h1>
            <?php 
                include('assets/bd/Registr.php');
            ?>
        </section>
    </main>
</body>
</html>