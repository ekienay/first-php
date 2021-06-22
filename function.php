<?php

include 'db-connection.php';



//Insert
// $name = $_POST['name'];
// $special = $_POST['special'];
// $email = $_POST['email'];
// $get_Id = $_POST['id'];

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

//Sort
if (!empty($_POST['spec'])) {
    $spec = $_POST['spec'];
    $sql = "SELECT * FROM member WHERE special LIKE'" . $spec . "'ORDER BY id DESC";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll(PDO::FETCH_OBJ);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'SELECT projects.project_name from projects inner join member_has_projects on member_has_projects.projects_id = projects.id where member_has_projects.member_id = ? ';
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute([$id]);
    $list = $pdo_statement->fetchAll(PDO::FETCH_OBJ);
}


