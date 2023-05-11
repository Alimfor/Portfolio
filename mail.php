<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Max-Age: 100000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

// Exit early so the page isn't fully loaded for options requests
if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
    exit();
}
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $subjectM = $_POST['subject'];
    $message = $_POST['message'];

	$to = "muxa1980.mg@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта: $subjectM";

	
	$msg="
    ФИО: $name \n
    Телефон: $phone \n
    Почта: $email \n
    Текст: $message"; 	
	mail($to, $subject, $msg, "From: $from ");

?>
