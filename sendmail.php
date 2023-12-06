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








// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
// require 'phpmailer/PHPMailer-6.9.1/src/Exception.php';
// require 'phpmailer/PHPMailer-6.9.1/src/SMTP.php';

// // Отримання даних з форми
// $name = $_POST['name'] ?? '';
// $email = $_POST['email'] ?? '';
// $comment = $_POST['comment'] ?? '';

// // Створення екземпляру PHPMailer
// $mail = new PHPMailer(true);

// try {
//     $mail = new PHPMailer(true);
//     $mail->isSMTP();  // Використовувати SMTP для відправлення
//     $mail->Host = 'smtp.gmail.com';  // SMTP сервер
//     $mail->SMTPAuth = true;   // Ввімкнути аутентифікацію SMTP
//     $mail->Username = 'romanbodnarr@ukr.net'; // Ваша електронна пошта Gmail
//     $mail->Password = 'Tomik2017'; // Ваш пароль Gmail або пароль згенерований Google App Passwords
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Шифрування (tls або ssl)
//     $mail->Port = 587; // Порт SMTP

//     // Заголовок електронної пошти
//     $mail->setFrom('olegsiuma@gmail.com', 'Petro');
//     $mail->addAddress('romanbodnarr@ukr.net', 'Roman');
//     $mail->Subject = 'Subject of the email';

//     // Тіло електронної пошти
//     $mail->isHTML(true);
//     $mail->Body = '<h1>Hello, this is a test email.</h1>';

//     // Відправлення електронної пошти
//     $mail->send();
//     echo 'Email sent successfully';
// } catch (Exception $e) {
//     echo "Email sending failed. Error: {$mail->ErrorInfo}";
// }








use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
require 'phpmailer/PHPMailer-6.9.1/src/Exception.php';
require 'phpmailer/PHPMailer-6.9.1/src/SMTP.php';

// Отримання даних з форми
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Налаштування відправлення електронної пошти
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'romanbodnarr@ukr.net'; // Замініть на свою електронну адресу
$mail->Password = 'Tomik2017'; // Замініть на свій пароль
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom($email, $name); // Від кого
$mail->addAddress('romanbodnarr@ukr.net', 'Roman'); // Кому
$mail->Subject = 'Subject of the email';
$mail->isHTML(true);
$mail->Body = '<h1>Hello, this is a test email.</h1>'; // Текст повідомлення

try {
    $mail->send();
    $response = ['status' => 'success', 'message' => 'Email sent successfully'];
    http_response_code(200);
    echo json_encode($response);
} catch (Exception $e) {
    $response = ['status' => 'error', 'message' => 'Email sending failed. Error: ' . $mail->ErrorInfo];
    http_response_code(500);
    echo json_encode($response);
}



?>;