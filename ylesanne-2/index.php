<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 2 - Suunamine</title>
  </head>
  <?php
  function redirect_to($new_address){
      return header("Location:".$new_address);
  }

  redirect_to("redirect.php");
  ?>
  <body>
    <p>Kui oled lõpetanud, siis seda lehte ei tohiks enam kuvada.</p>
  </body>
</html>
