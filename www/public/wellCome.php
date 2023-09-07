<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Formulär och PHP</title>
</head>

<body>
    <h1>Namn kul</h1>
    <?php
    $fnamn = $_POST['forNamn'];        // forNamn och efterNamn kommer        
    $enamn = $_POST['efterNamn'];      // från formuläret

    echo "<b>Hej $fnamn, $enamn</b>";

    ?>
</body>

</html>