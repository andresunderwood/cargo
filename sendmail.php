<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Створення нового об'єкта PHPMailer
$mail = new PHPMailer(true);

// Отримання даних з форми
$name = 'EASY CARGO'; // $_POST['name']
$email = 'andrey.belchev@gmail.com'; //$_POST['email']

$name = $_POST['exampleInputName1'];
$phone = $_POST['exampleInputPhone1'];
$emailUser = $_POST['exampleInputEmail1'];

$message = "Ім'я: $name\n";
$message .= "Телефон: $phone\n";
$message .= "Електронна пошта: $emailUser\n";

// Підключення до SMTP-сервера
$smtpHost = 'mx1.mirohost.net';
$smtpPort = 465;
$smtpUsername = 'devs@onenet.com.ua';
$smtpPassword = '7HDVHgcpGDf0';

try {
    // Налаштування параметрів відправки
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = $smtpPort;

     // Встановлення таймауту для спроби з'єднання
    $mail->Timeout = 10;

    // Встановлення параметрів електронного листа
    $mail->setFrom($smtpUsername, $name);
    $mail->addAddress('andrey.belchev@gmail.com', 'Recipient Name');
    $mail->isHTML(true);
    $mail->Subject = 'New Message from Website';
    $mail->Body = $message;

    // Відправлення листа
    $mail->send();
    echo 'Повідомлення успішно надіслано';
} catch (Exception $e) {
    echo 'Виникла помилка при відправці повідомлення: ', $mail->ErrorInfo;
}
?>
