<?php
//CREATE CONNECTION TO THE SERVER
require_once __DIR__ . '/../db/connect.php';
// require_once __DIR__ . '/../vendor/autoload.php';
//IF FORM POSTED FILTER INPUTS
if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'enq_name', FILTER_SANITIZE_STRING); 
    $email = filter_input(INPUT_POST, 'enq_email', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'enq_tel', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'enq_subject', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'enq_message', FILTER_SANITIZE_STRING);
    //INSET DATA TO DB
    try {
        $sqlInsert = $db->query("INSERT INTO enquiries (enq_name, enq_email, enq_tel, enq_subject, enq_message) 
                                 VALUES ('" . $name . "', '" .  $email . "', '" .  $tel . "', '" .  $subject . "', '" .  $msg . "')");
    } catch(Exception $e) {
        echo $e->getMessage();
        die();
    } 

    //PRINT RESPONSE FROM DB
    if($sqlInsert) {
        header("location: /contact-us.php");
        echo "Success!";
        exit();
    } else {
        die("Error: '. $e .'");
    }

    //CLOSE CONNECTION
    $sqlInsert->close();
}

//REDIRECT BACK TO CONTACT US PAGE
