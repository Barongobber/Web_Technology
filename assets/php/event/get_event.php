<?php
    require_once '../db.php';
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM event WHERE event_id=$id";
    } else {
        $sql = "SELECT * FROM event";
    }

    try {
        // Get DB Object
        $db = new db();
        // Connect to DB
        $db = $db->connect();
        
        $stmt = $db->query($sql);
        $event = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $obj = json_encode($event);
        echo $obj;
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
?>