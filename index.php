<?php 
$testo="Il mio nome è Sergio";
$bad_word = $_GET["word"];
$testo_nuovo = str_replace($bad_word, "***", $testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badworlds</title>
</head>
<body>
    
</body>
</html>