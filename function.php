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


//Search
$search_keyword = '';
if (!empty($_POST['search']['keyword'])) {
    $search_keyword = $_POST['search']['keyword'];
    $sql = 'SELECT * FROM member WHERE name LIKE :keyword OR special LIKE :keyword OR email LIKE :keyword ORDER BY id DESC';
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll(PDO::FETCH_OBJ);
}
