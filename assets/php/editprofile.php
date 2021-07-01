<?php

require 'db.php';

$matrix_card = $_POST['matrix_card'];
$email = $_POST['email'];
$address = $_POST['address'];

try{
    $sql = "UPDATE `member` SET `email` = :email, `address` =  :address WHERE `matrix_card` = :matrix_card";
    $db= new db();

    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":address", $address);
    $stmt->bindValue(":matrix_card", $matrix_card);


    $stmt->execute();
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