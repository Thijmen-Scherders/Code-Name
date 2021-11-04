<?php
 //Variabelen vullen
 
 $name = $_POST['name'];
 if (empty($name))
 {
     $errors[] = "vul een naam in";
 }
 $text = $_POST['text']; 
 if (empty($text))
 {
     $errors[] = "Vul een beschrijving in .";
 }



 echo $name . " / " . $text;

 //1. Verbinding
 require_once 'conn.php';

 //2. Query
 $query = "INSERT INTO chat (name, text) VALUES (:name, :text)";

 //3. Prepare
 $statement = $conn->prepare($query);
 //4. Execute
 $statement->execute([
     ":name" => $name,
     ":text" => $text,

 ]);
 header("Location:../php-codes/chat.php?msg=Melding opgeslagen");
 ?>