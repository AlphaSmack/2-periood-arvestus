<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>

    <?php
        $validUsername = "tester";
        $validPassword = "tester";
    $u = $_SESSION['username'];
    $s = $_SESSION['password'];


  if( $u==$validUsername and $u!=="" and $s==$validPassword and $s!==""){
      echo "Kasutajanimi ja parool on õiged";
  }else{
      echo "Kasutajanimi ja/või parool ei klapi";
  }


    ?>


    <a href="index.php">Mine tagasi</a>
  </body>
</html>
