<html>
    <head></head>
    <body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["button"])){
    $counter++;
    echo $counter;
   }
}
?>
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = post>
  <input type = "submit" name = "button" value = "vote" >
</form>
    </body>
</html>