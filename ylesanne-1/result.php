<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a>

    <?php

    $isSubmitted = isset($_GET["submit"]);

    if ($isSubmitted) {
        $username = $_GET["username"];
        $age = $_GET["age"];
    }

    if (!isset($username) or $username == "") {
        $usernameMessage = 'Kasutajanime väli ei tohi olla tühi.';
    }
    else {
        $usernameMessage = 'Täname korrektselt sisesatud nime eest!';
    }

    if (!isset($age) or $age==""){
        $ageMessage = 'Vanus peab olema valitud';
    } elseif ($age<18){
        $ageMessage = 'Vanust peab olema vähemalt 18';
    }else{
        $ageMessage = 'Vanust on piisavalt';
    }

    if ($isSubmitted) {
        echo $usernameMessage;
        echo $ageMessage;
    }
    ?>
  </body>
</html>
