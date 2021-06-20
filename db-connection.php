<?php 

$host = 'localhost';
$database = 'members';
$username = 'root';
$password = '123456789';


try{

    $pdo = new PDO("mysql:host=$host; dbname=$database", $username, $password);


}catch (PDOException $e) {
        echo 'Failed to connect DATABASE: '.$e->getMessage();
}
?>