<?php
    require_once '../db.php';

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);
    
    $event_title = $input["event_title"];
    $event_category = $input["event_category"];
    $event_venue = $input["event_venue"];
    $posted_on = $input["posted_on"];
    $open_for = $input["open_for"];
    $closed_on = $input["closed_on"];
    $event_details = $input["event_details"];
    $event_url = $input["event_url"];
    $event_date = $input["event_date"];
    $event_pic1 = $input["event_pic1"];
    $event_pic2 = $input["event_pic2"];
    $event_pic3 = $input["event_pic3"];

    $id = $_GET['id'];

    try {

        $sql = "UPDATE event SET
                    event_title 	= :event_title,
                    event_category 	= :event_category,
                    event_venue = :event_venue,
                    posted_on 	= :posted_on
                    open_for 	= :open_for
                    closed_on 	= :closed_on
                    event_details 	= :event_details
                    event_url 	= :event_url
                    event_date 	= :event_date
                    event_pic1 	= :event_pic1
                    event_pic2 	= :event_pic2
                    event_pic3 	= :event_pic3
                WHERE event_id = $id";

        $db = new db();
        
        $db = $db->connect();

        $stmt = $db->prepare($sql);
        

        $stmt->bindParam(':event_title', $event_title);
        $stmt->bindParam(':event_category',$event_category);
        $stmt->bindParam(':event_venue', $event_venue);
        $stmt->bindParam(':posted_on', $posted_on);
        $stmt->bindParam(':open_for', $open_for);
        $stmt->bindParam(':closed_on', $closed_on);
        $stmt->bindParam(':event_details', $event_details);
        $stmt->bindParam(':event_url', $event_url);
        $stmt->bindParam(':event_date', $event_date);
        $stmt->bindParam(':event_pic1', $event_pic1);
        $stmt->bindParam(':event_pic2', $event_pic2);
        $stmt->bindParam(':event_pic3', $event_pic3);

        $stmt->execute();
        $count = $stmt->rowCount();
        $db = null;
    
        $data = array(
            "status" => "success",
            "rowcount" =>$count
        );

        echo json_encode($data);

        } catch (PDOException $e) {
        
            $data = array(
            "status" => "fail"
        );

        echo json_encode($data);
    }
?>