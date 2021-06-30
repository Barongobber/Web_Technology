<?php

require 'db.php';
session_start();
$id = $_SESSION['userlogin'];
$sql = "SELECT * FROM member WHERE matrix_card = '$id'";

try {
    $db = new db();
    $db = $db->connect();

    $stmt = $db->query($sql);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    $db = null;
    
    $data = array(
        "status" => "success",
        "user" => $user
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail",
        "error" => $e
    );
    echo json_encode($data);
}

?>