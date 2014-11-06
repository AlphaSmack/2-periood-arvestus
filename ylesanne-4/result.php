<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsiste tagasiside</title>
  </head>

  <body>

  <?php
    if(isset($_COOKIE)){
        echo $_COOKIE['PHPSESSID'];
    }
  else{
      echo "Cookie-t ei ole!";
  }
  ?>
  </body>
</html>
