<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $movies = array("Live and let die", "The man with the golden gun", "The spy who loved me", "Moonraker", "For your eyes only", "octopussy", "A view to kill all");

        foreach ($movies as $movie){
            echo $movie;
            echo "<br>";
        }
    ?>
</body>
</html>