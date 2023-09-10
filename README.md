## Docker-compose LEMP
### Inkluderar
- nginx -> localhost:80
- php   
- mariadb -> mariadb
- phpmyadmin -> localhost:8080
- composer

### HowTo

##### Webbroten
    www/public
##### Starta servern (containern) med
    docker-compose up -d
##### Stoppa servern (containern) med
    docker-compose down
##### Serverns url
    localhost:1001
##### phpmyadmin (pma)
    localhost:1001/pma
##### Anslut till MariaDB med php

````php
<?php
    // Definierar konstanter med användarinformation.
    define ('DB_USER', 'userName'); // Användare i MariaDB
    define ('DB_PASSWORD', '12345'); // Byt lösenord
    define ('DB_HOST', 'mariadb');
    define ('DB_NAME', 'dbName');   // Databasen som anslutning skall ske till

    // Skapar en anslutning till MariaDB och databasen dbName
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
?> // Ej nödvändigt att avslut "ren" php med ?>
````
### .env
    Skapa filen ".env" med root-lösenordet till MariaDB
    PASSWORD=xxxxxxx
