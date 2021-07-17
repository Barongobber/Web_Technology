<?php
require_once '../db.php';

$inputJSON = $_POST['json'];
$input = json_decode($inputJSON, TRUE);

$event_title = $input["event_title"];
$event_category = $input["event_category"];
$event_venue = $input["event_venue"];
$posted_on = date("Y-m-d");
$open_for = $input["open_for"];
$closed_on = $input["closed_on"];
$event_details = $input["event_details"];
$event_url = $input["event_url"];
$event_date = $input["event_date"];
$event_pic1 = $_FILES["event_pic1"]["name"];
$event_pic2 = $_FILES["event_pic2"]["name"];
$event_pic3 = $_FILES["event_pic3"]["name"];
$created_at = date("Y-m-d");
$updated_at = $input["updated_at"];
$deleted_at = $input["deleted_at"];


try {
    $sql = "INSERT INTO event (event_title, event_category, 
        event_venue, posted_on, open_for, closed_on, event_details, 
        event_url, event_date, event_pic1, event_pic2,  
        event_pic3, created_at, updated_at, deleted_at) VALUES 
        (:event_title, :event_category, 
        :event_venue, :posted_on, :open_for, :closed_on, :event_details, 
        :event_url, :event_date, :event_pic1, :event_pic2,  
        :event_pic3, :created_at, :updated_at, :deleted_at)";

    $db = new db();
    // Connect
    $db = $db->connect();

    if (0 < $_FILES['event_pic1']['error']) {
        echo 'Error: ' . $_FILES['event_pic1']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['event_pic1']['tmp_name'], '../../img/' . $_FILES['event_pic1']['name']);
    }
    if (0 < $_FILES['event_pic2']['error']) {
        echo 'Error: ' . $_FILES['event_pic2']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['event_pic2']['tmp_name'], '../../img/' . $_FILES['event_pic2']['name']);
    }
    if (0 < $_FILES['event_pic3']['error']) {
        echo 'Error: ' . $_FILES['event_pic3']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['event_pic3']['tmp_name'], '../../img/' . $_FILES['event_pic3']['name']);
    }

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':event_title', $event_title);
    $stmt->bindValue(':event_category', $event_category);
    $stmt->bindValue(':event_venue', $event_venue);
    $stmt->bindValue(':posted_on', $posted_on);
    $stmt->bindValue(':open_for', $open_for);
    $stmt->bindValue(':closed_on', $closed_on);
    $stmt->bindValue(':event_details', $event_details);
    $stmt->bindValue(':event_url', $event_url);
    $stmt->bindValue(':event_date', $event_date);
    $stmt->bindValue(':event_pic1', $event_pic1);
    $stmt->bindValue(':event_pic2', $event_pic2);
    $stmt->bindValue(':event_pic3', $event_pic3);
    $stmt->bindValue(':created_at', $created_at);
    $stmt->bindValue(':updated_at', $updated_at);
    $stmt->bindValue(':deleted_at', $deleted_at);


    $stmt->execute();
    $count = $stmt->rowCount();
    $db = null;

    $data = array(
        "status" => "success",
        "rowcount" => $count
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}
