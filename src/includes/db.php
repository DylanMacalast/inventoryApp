<?php
// Connecting to the database
$user = 'root';
$pass = 'root';
try {
    $DB = new PDO('mysql:host=localhost;dbname=pizza_inventory', $user, $pass);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}