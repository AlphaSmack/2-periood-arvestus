<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
</head>
<body>
<?php

$p=isset($_POST['submit']);
$x=empty($_POST['submit']);

if($x){
    echo "Tundub, et sattusid siia otseteed pidi";
}
else{
    $u = $_POST['user'];
    $s = $_POST['sex'];

if( isset($u) and $u!=="" and $s!=="" and isset($s)){
    $message="Tere ". $u . "! Tundub, et olete ". $s;
}
elseif( isset($u) and $u!=="" and $s=="" and empty($s)){
    $message="Palun minge tagasi ja valige sugu.";
}
elseif( empty($u) and $u=="" and $s!=="" and isset($s)){
    $message="Palun minge tagasi ja sisestage nimi.";
}
else{
    $message="Palun minge tagasi ja täidke väljad.";
}

if($p){
    echo $message;
}
}

?>

<div><a href="index.php">Mine tagasi</a></div>
</body>
</html>
