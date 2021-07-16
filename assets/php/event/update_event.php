<?php
    require_once '../db.php';

    $inputJSON = $_POST['json'];
    $img1name= $_FILES['img1']['name'];
    $img2name= $_FILES['img2']['name'];
    $img3name= $_FILES['img3']['name'];
    $input = json_decode($inputJSON, TRUE);

    
    $event_title = $input["event_title"];
    $event_category = $input["event_category"];
    $event_venue = $input["event_venue"];
    $open_for = $input["open_for"];
    $closed_on = $input["closed_on"];
    $event_details = $input["event_details"];
    $event_url = $input["event_url"];
    $event_date = $input["event_date"];
    $event_pic1 = $img1name;
    $event_pic2 = $img2name;
    $event_pic3 = $img3name;

    $id = $input["event_id"];

    try {

        $sql = "UPDATE event SET
                    event_title 	= :event_title,
                    event_category 	= :event_category,
                    event_venue = :event_venue,
                    open_for 	= :open_for,
                    closed_on 	= :closed_on,
                    event_details 	= :event_details,
                    event_url 	= :event_url,
                    event_date 	= :event_date
                WHERE event_id = $id";
        
        $sql1 = "UPDATE event SET
                    event_pic1 	= :event_pic1
                WHERE event_id = $id";
        $sql2 = "UPDATE event SET
                    event_pic2 	= :event_pic2
                WHERE event_id = $id";
        $sql3 = "UPDATE event SET
                    event_pic3 	= :event_pic3
                WHERE event_id = $id";
        

        $db = new db();
        
        $db = $db->connect();
        if ( 0 < $_FILES['img1']['error'] ) {
            echo 'Error: ' . $_FILES['img1']['error'] . '<br>';
        }
        else {
            move_uploaded_file($_FILES['img1']['tmp_name'], '../../img/' . $_FILES['img1']['name']);
        }
        if ( 0 < $_FILES['img2']['error'] ) {
            echo 'Error: ' . $_FILES['img2']['error'] . '<br>';
        }
        else {
            move_uploaded_file($_FILES['img2']['tmp_name'], '../../img/' . $_FILES['img2']['name']);
        }
        if ( 0 < $_FILES['img3']['error'] ) {
            echo 'Error: ' . $_FILES['img3']['error'] . '<br>';
        }
        else {
            move_uploaded_file($_FILES['img3']['tmp_name'], '../../img/' . $_FILES['img3']['name']);
        }
        $stmt = $db->prepare($sql);

        

        $stmt->bindValue(':event_title', $event_title);
        $stmt->bindValue(':event_category',$event_category);
        $stmt->bindValue(':event_venue', $event_venue);
        $stmt->bindValue(':open_for', $open_for);
        $stmt->bindValue(':closed_on', $closed_on);
        $stmt->bindValue(':event_details', $event_details);
        $stmt->bindValue(':event_url', $event_url);
        $stmt->bindValue(':event_date', $event_date);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($_FILES['img1']['size'] != 0)
        {
            $stmt=$db->prepare($sql1);
            $stmt->bindValue(':event_pic1', $event_pic1);
            $stmt->execute();
            $count2 = $stmt->rowCount();
        }
        if ($_FILES['img2']['size'] != 0)
        {
            $stmt=$db->prepare($sql2);
            $stmt->bindValue(':event_pic2', $event_pic2);
            $stmt->execute();
            $count2 = $stmt->rowCount();
        }
        if ($_FILES['img3']['size'] != 0)
        {
            $stmt=$db->prepare($sql3);
            $stmt->bindValue(':event_pic3', $event_pic3);
            $stmt->execute();
            $count = $stmt->rowCount();
        }
        

        $db = null;
        
        $data = array(
            "status" => "success",
            "rowcount" =>$count
        );

        echo json_encode($input);

        } catch (PDOException $e) {
        
            $data = array(
            "status" => "fail"
        );

        echo json_encode($data);
    }
?>