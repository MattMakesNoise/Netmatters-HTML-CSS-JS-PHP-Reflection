<?php
//=================================================================================================================//
//======================================== INCLUDE GLOBAL VARIABLES ===============================================//
//=================================================================================================================//
require 'globals.php';
//=================================================================================================================//
//======================================== CREATE CONNECTION TO THE SERVER ========================================//
//=================================================================================================================//
require_once __DIR__ . '/../db/connect.php';
//=================================================================================================================//
//======================================== VARIABLES FOR FORM FIELDS ==============================================//
//=================================================================================================================//
$name = ''; 
$email = '';
$tel = '';
$subject = '';
$msg = '';
$marketing = isset($_POST['enq_marketing']) ? $_POST['enq_marketing'] : 0; 
//=================================================================================================================//
//======================================== PERFORM VALIDATION AND RETURN TO THIS PAGE =============================//
//=================================================================================================================//
// error_reporting(E_ALL); ini_set('display_errors', 1);

// if(isset($_POST['submit'])) {
//     //NAME
//     if(isset($_POST['enq_name'])) { //Check for POST'd value
//         if(!empty($_POST['enq_name'])) {
//             $name = $_POST['enq_name'];
//         } else {
//             $errors = 1; //Form processed but $name is POST'd empty
//         }
//     } else {
//         $errors = $errors; //needed if one field is set but not the rest, so we don't get errors back to 0
//     }

//     //EMAIL
//     if(isset($_POST['enq_email'])) { //Check for POST'd value
//         if(!empty($_POST['enq_email'])) {
//             $email = $_POST['enq_email'];
//         } else {
//             $errors = 1; //Form processed but $name is POST'd empty
//         }
//     } else {
//         $errors = $errors; //needed if one field is set but not the rest, so we don't get errors back to 0
//     }

//     //TEL NO
//     if(isset($_POST['enq_tel'])) { //Check for POST'd value
//         if(!empty($_POST['enq_tel'])) {
//             $tel = $_POST['enq_tel'];
//         } else {
//             $errors = 1; //Form processed but $name is POST'd empty
//         }
//     } else {
//         $errors = $errors; //needed if one field is set but not the rest, so we don't get errors back to 0
//     }

//     //SUBJECT
//     if(isset($_POST['enq_subject'])) { //Check for POST'd value
//         if(!empty($_POST['enq_subject'])) {
//             $subject = $_POST['enq_subject'];
//         } else {
//             $errors = 1; //Form processed but $name is POST'd empty
//         }
//     } else {
//         $errors = $errors; //needed if one field is set but not the rest, so we don't get errors back to 0
//     }

//     //MESSAGE
//     if(isset($_POST['enq_message'])) { //Check for POST'd value
//         if(!empty($_POST['enq_message'])) {
//             $msg = $_POST['enq_message'];
//         } else {
//             $errors = 1; //Form processed but $name is POST'd empty
//         }
//     } else {
//         $errors = $errors; //needed if one field is set but not the rest, so we don't get errors back to 0
//     }
//     header("location: /contact-us.php");
//     exit();
// } 
//=================================================================================================================//
//=================================================================================================================//
//======================================== IF FORM POSTED FILTER INPUTS ===========================================//
//=================================================================================================================//
//=================================================================================================================//

/*if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'enq_name', FILTER_SANITIZE_STRING); 
    $email = filter_input(INPUT_POST, 'enq_email', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'enq_tel', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'enq_subject', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'enq_message', FILTER_SANITIZE_STRING);
    $marketing = isset($_POST['enq_marketing']) ? $_POST['enq_marketing'] : 0; 
    //=================================================================================================================//
    //=================================================================================================================//
    //======================================== INSERT DATA TO DB ======================================================//
    //=================================================================================================================//
    //=================================================================================================================//
    try {
        $sqlInsert = $db->query("INSERT INTO enquiries (enq_name, enq_email, enq_tel, enq_subject, enq_message, enq_marketing) 
                                 VALUES ('" . $name . "', '" .  $email . "', '" .  $tel . "', '" .  $subject . "', '" .  $msg . "', '" .  $marketing . "')");
    } catch(Exception $e) {
        echo $e->getMessage();
        die();
    } 
    //=================================================================================================================//
    //=================================================================================================================//
    //======================================== PRINT RESPONSE FROM DB =================================================//
    //=================================================================================================================//
    //=================================================================================================================//
    if($sqlInsert) {
        header("location: /contact-us.php");
        exit();
    } else {
        die("Error: '. $e .'");
    }

    //=================================================================================================================//
    //=================================================================================================================//
    //======================================== CLOSE CONNECTION =======================================================//
    //=================================================================================================================//
    //=================================================================================================================//
    $sqlInsert->close();
}*/