<?php
include __DIR__ . "/database.phpdatabase.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

</head>

<body>
    <?php include __DIR__ . "/partialas/header.php" ?>

    <main id="root">
        <div class="container">
            <div class="disk" v-for="item in disks">
                <div class="img-container">
                    <img :src="item.poster" alt="">
                </div>
                <h4>{{item.title}}</h4>
                <span class="text">{{item.author}}</span>
                <span class="text">{{item.year}}</span>
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>