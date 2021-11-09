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
    





<?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM boeken";
    $statement = $conn->prepare($query);
    $statement->execute();
    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="grid-container">
            <?php foreach($boeken as $boek): ?>
            
                
                    <div class="boeken-info"> 
                        <h1><?php echo $boek['titel']; ?></h1>
                        <p><?php echo $boek['auteur']; ?>
                        <p>Beschrijving:<?php echo $boek['beschrijving']; ?>
                        <p>Prijs:<?php echo $boek['prijs']; ?>
                    </div>  
                
           
            <?php endforeach; ?>
        </div>
                  
</div>     
    


</body>
</html>