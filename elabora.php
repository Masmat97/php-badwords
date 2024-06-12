<?php
$paragrafo = $_GET["paragrafo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1><?php echo $paragrafo; ?></h1>
    <h5>La lunghezza del paragrafo è :<?php echo strlen($paragrafo)?></h5>
</body>
</html>