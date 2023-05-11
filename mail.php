<?php
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
