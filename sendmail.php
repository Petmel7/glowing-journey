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

// $message = '';
// if (!$mail->send()) {
//     $message = 'Помилка';
// } else {
//     $message = 'Дані відправленні!';
// }

// $response = ['message' => $message];

// header('Content-type: application/json');
// echo json_encode($response);






use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
require 'phpmailer/PHPMailer-6.9.1/src/Exception.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language');
$mail->isHTML(true);

$mail->setFrom('olegsiuma@gmail.com', 'Oleg Siuma');
$mail->addAddress('melychynpetro@gmail.com');
$mail->Subject = 'Привіт!';

$body = '<h1>Зустрічайте письмо!</h1>';

if (!empty(trim($_POST['name']))) {
    $body .= '<p><strong>Імя: </strong>' . $_POST['name'] . '</p>';
}

if (!empty(trim($_POST['email']))) {
    $body .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
}

if (!empty(trim($_POST['message']))) {
    $body .= '<p><strong>Повідомлення: </strong>' . $_POST['message'] . '</p>';
}

$mail->Body = $body;

$message = '';
if (!$mail->send()) {
    $message = 'Помилка';
} else {
    $message = 'Дані відправленні!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
