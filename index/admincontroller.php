<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php require_once '../layouts/header.php'; ?>
<body>

<form action="../backend/editcontroller.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="action" value="update">

<?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM boeken";
    $statement = $conn->prepare($query);
    $statement->execute();
    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($boeken as $boek): ?>
            
                
            <div class="boeken-info"> 
                <h1><?php echo $boek['titel']; ?></h1>
                <p><?php echo $boek['auteur']; ?>
                <p>Beschrijving:<?php echo $boek['beschrijving']; ?>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <p>Prijs:<?php echo $boek['prijs']; ?>
                <input type="text" id="price" name="price">
                <br>    
                <input type="submit">
            </div>  
        
   
    <?php endforeach; ?>
</div>
</body>
</html>