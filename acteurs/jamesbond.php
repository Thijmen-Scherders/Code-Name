<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php require_once '../layouts/header.php'; ?>
    <div class="wrapper">

       

    <div class="container"><div class="text"><h2>
    <?php 
        $movies = array("Live and let die", "The man with the golden gun", "The spy who loved me", "Moonraker", "For your eyes only", "octopussy", "A view to kill all");

        foreach ($movies as $movie){
            echo $movie;
            echo "<br>";
        }
    ?>
    </h2></div>
<div class="james">
    <img src="../images/jamesbond.jpg" alt="roger moore" width="auto" height="450px">
    </div>
</div>
</div>
</body>
<footer>
<?php require_once '../layouts/footer.php'; ?>
</footer>
</html>