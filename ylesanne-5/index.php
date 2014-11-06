<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessioon</title>
  </head>

  <body>

    <?php
        $_SESSION['username'] = 'tester';
        $_SESSION['password'] = 'tester';
    ?>

    <a href="result.php">Vaata tulemust</a>
  </body>
</html>
