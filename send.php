<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$subject = urldecode($subject);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$subject = trim($subject);
$message = trim($message);

if(mail("muxa1980.mg@gmail.com",
        "Новое письмо с сайта",
        "ФИО: ".$name."\n".
        "Логин: ".$login."\n".
        "Телефон: ".$phone."\n".
        "Тема: ".$subject."\n".
        "Письмо: ".$message."\n",
        "From: no-reply@mydomain.com \r\n")
  ){
    echo("Saccessful");
  }
  else{
    echo("error");
  }
?>