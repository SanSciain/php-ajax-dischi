<?php
include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php include __DIR__ . "/partialas/header.php" ?>
    <main>
        <div class="container">
            <?php foreach ($database as $disk) { ?>
                <div class="disk">
                    <div class="img-container">
                        <img src="<?php echo $disk["poster"] ?>" alt="">
                    </div>
                    <h4><?php echo $disk["title"] ?></h4>
                    <span class="text"><?php echo $disk["author"] ?></span>
                    <span class="text"><?php echo $disk["year"] ?></span>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>