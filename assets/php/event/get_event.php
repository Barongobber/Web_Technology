<?php
    require_once '../db.php';
    
    $sql = "SELECT * FROM event";
    try {
        // Get DB Object
        $db = new db();
        // Connect to DB
        $db = $db->connect();
        
        $stmt = $db->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $obj = json_encode($user);
        echo $obj;
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
?>