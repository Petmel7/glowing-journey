<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';

// $mail = new PHPMailer(true);
// $mail->CharSet = 'UTF-8';
// $mail->setLanguage('ru', 'phpmailer/language');
// $mail->isHTML(true);

// $mail->setFrom('olegsiuma@gmail.com', 'Oleg Siuma');
// $mail->addAddress('melychynpetro@gmail.com');
// $mail->Subject = 'Привіт!';

// $body = '<h1>Зустрічайте письмо!</h1>';

// if (trim(!empty($_POST['name']))) {
//     $body = '<p><strong>Імя: </strong>' . $_POST['name'] . '</p>';
// }

// if (trim(!empty($_POST['email']))) {
//     $body = '<p><strong>Email: </strong>' . $_POST['name'] . '</p>';
// }

// if (trim(!empty($_POST['age']))) {
//     $body = '<p><strong>Вік: </strong>' . $_POST['name'] . '</p>';
// }

// if (trim(!empty($_POST['message']))) {
//     $body = '<p><strong>Повідомлення: </strong>' . $_POST['name'] . '</p>';
// }

// $mail->Body = 'body';

// if (!$mail->send()) {
//     $message = 'Помилка';
// } else {
//     $message = 'Дані відправленні!';
// }

// $response = ['message' => $message];

// header('Content-type: application/json');
// echo json_encode($response);







// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
// require 'phpmailer/PHPMailer-6.9.1/src/Exception.php';

// $mail = new PHPMailer(true);
// $mail->CharSet = 'UTF-8';
// $mail->setLanguage('ru', 'phpmailer/language');
// $mail->isHTML(true);

// $mail->setFrom('olegsiuma@gmail.com', 'Oleg Siuma');
// $mail->addAddress('melychynpetro@gmail.com');
// $mail->Subject = 'Привіт!';

// $body = '<h1>Зустрічайте письмо!</h1>';

// if (!empty(trim($_POST['name']))) {
//     $body .= '<p><strong>Імя: </strong>' . $_POST['name'] . '</p>';
// }

// if (!empty(trim($_POST['email']))) {
//     $body .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
// }

// if (!empty(trim($_POST['message']))) {
//     $body .= '<p><strong>Повідомлення: </strong>' . $_POST['message'] . '</p>';
// }

// $mail->Body = $body;

// $message = '';
// try {
//     if (!$mail->send()) {
//         throw new Exception('Помилка відправлення пошти: ' . $mail->ErrorInfo);
//     } else {
//         $message = 'Дані відправлені!';
//     }
// } catch (Exception $e) {
//     $message = $e->getMessage();
// }

// $response = ['message' => $message];
// header('Content-type: application/json');
// echo json_encode($response);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
require 'phpmailer/PHPMailer-6.9.1/src/Exception.php';
require 'phpmailer/PHPMailer-6.9.1/src/SMTP.php';

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();  // Використовувати SMTP для відправлення
    $mail->Host = 'smtp.gmail.com';  // SMTP сервер
    $mail->SMTPAuth = true;   // Ввімкнути аутентифікацію SMTP
    $mail->Username = 'olegsiuma@gmail.com'; // Ваша електронна пошта Gmail
    $mail->Password = 'your_password'; // Ваш пароль Gmail або пароль згенерований Google App Passwords
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Шифрування (tls або ssl)
    $mail->Port = 587; // Порт SMTP

    // Заголовок електронної пошти
    $mail->setFrom('olegsiuma@gmail.com', 'Oleg');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->Subject = 'Subject of the email';

    // Тіло електронної пошти
    $mail->isHTML(true);
    $mail->Body = '<h1>Hello, this is a test email.</h1>';

    // Відправлення електронної пошти
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Email sending failed. Error: {$mail->ErrorInfo}";
}

?>;