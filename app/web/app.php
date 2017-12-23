<?php
$user = 'jen';
$pass = 'root';

try {
    $dbh = new PDO('mysql:host=db;dbname=mydb', $user, $pass);
    echo 'Database connection Ok';
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
