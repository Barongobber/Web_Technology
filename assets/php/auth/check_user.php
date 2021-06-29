<?php
require '../db.php';
session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM member WHERE email = '$email'";

try{
    $db = new db();
    $db = $db->connect();

    $stmt = $db->query($sql);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    $userObj = array();
    if($user) $userObj = get_object_vars($user);
    $pass_check = false;

    if(count($userObj) > 0) $pass_check = password_verify($password, $userObj['password']);
    
    if($user && $pass_check) $_SESSION['userlogin'] = $userObj['matrix_card'];

    $db = null;
    

    $data = array(
        "status" => "success",
        "user" => $user,
        "pass" => $pass_check
    );

    echo json_encode($data);
}catch (PDOException $e) {
    $data = array(
        "status" => "fail",
        "error" => $e
    );
    echo json_encode($data);
}

?>