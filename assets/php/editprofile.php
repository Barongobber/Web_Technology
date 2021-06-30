<?php

require 'db.php';

$email = $_POST['email'];
$address = $_POST['address'];
$matrix_card = $_POST['matrix_card'];

try{
    $sql = "UPDATE member SET email=?, address=? WHERE matrix_card=?";
    $db= new db();

    $db = $db->connect();
    $stmt = $db->prepare($sql);

    $stmt->execute([$email, $address, $matrix_card]);
    $count = $stmt->rowCount();
    $db = null;

    $data = array(
        "status" => "success",
        "count" => $count
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}

?>