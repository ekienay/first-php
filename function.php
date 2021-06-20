<?php

include 'db-connection.php';

// $name = $_POST['name'];
// $special = $_POST['special'];
// $email = $_POST['email'];
// $get_Id = $_POST['id'];

//Insert
// if(isset($_POST['add'])){
//     $sql = ("INSERT INTO member (name,special,email) VALUES (?,?,?)");
//     $query = $pdo -> prepare($sql);
//     $query -> execute([$name,$special,$email]);
// }


//Select
$sql = $pdo->prepare("SELECT * FROM member");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

//Update


//Delete 