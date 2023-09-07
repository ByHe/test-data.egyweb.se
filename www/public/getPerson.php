<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>GET och PHP</title>
</head>
<body>
<h1>Namn kul</h1>
<?php
    $name = $_GET['name'];        // forNamn och efterNamn kommer        
    $alder = $_GET['age'];      // från formuläret

    echo "Hej $name, $alder";
?>
</body>
</html>