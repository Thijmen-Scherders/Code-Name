<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../backend/controller.php" method="POST">
<div class="form-group">
    
                <label for="name">naam:</label>
                <input type="text" name="name" class="form-input">
            </div>

            <div class="form-group">
                <label for="text">beschrijving:</label>
                <input type="text" name="text"  class="form-input">
            </div>
            <input type="submit" value="Verstuur bericht">

</form>


<?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM chat";
    $statement = $conn->prepare($query);
    $statement->execute();
    $chat = $statement->fetchall(PDO::FETCH_ASSOC);
    ?>
    <table>
        <tr>
            <th>naam</th>
            <th>inhoud</th>
        </tr>
        <?php foreach($chat as $item): ?>
        <tr>
            <td><?php echo $item['name']; ?> </td>
            <td><?php echo $item['text']; ?> </td>
        </tr>
            <?php endforeach; ?>
    </table>

</body>
</html>