<?php

require 'db/connect.php';

try {
    $sqlInsert = $db->query("INSERT INTO enquiries VALUES");
} catch(Exception $e) {
    echo $e->getMessage();
    die();
} 

if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
}