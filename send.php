<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
$message = trim($message);

if (mail("yana@kirsanava.com", "Заявка с сайта", "name:".$name.". E-mail: ".$email, ,"From: example2@mail.ru \r\n"))
 {     echo "Message sent:)";
} else {
    echo "Message not sent.:( Try again";
}?>