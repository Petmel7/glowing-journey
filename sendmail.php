<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// // Підключення Monolog
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // Підключення автозавантажувача PHPMailer
// require_once './vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer

// // Ініціалізація логера
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler(__DIR__ . '/error.log', Logger::WARNING));

// // Перевірка, чи прийшов запит методом POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $comment = $_POST['comment'];

//     $mail = new PHPMailer(true);

//     try {
//         // Налаштування серверу SMTP
//         $mail->isSMTP();
//         $mail->Host = 'smtp.ukr.net'; // Адреса вашого SMTP-серверу
//         $mail->SMTPAuth = true;
//         $mail->Username = 'romanbodnarr@ukr.net'; // Ваша електронна пошта
//         $mail->Password = 'FUUhXJwPiqnWDEyG'; // Ваш пароль від поштової скриньки
//         $mail->SMTPSecure = 'SSL';
//         $mail->Port = 465;

//         // Налаштування відправки листа
//         $mail->setFrom($email, $name);
//         $mail->addAddress('olegsiuma@gmail.com'); // Адреса, на яку ви хочете відправити пошту
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;


//         // Відправлення листа
//         $mail->send();

//         // Логування успішної відправки листа
//         $log->info('Лист успішно відправлено: ' . $email);

//         // Відправлення JSON-відповіді
//         header('Content-Type: application/json');
//         echo json_encode(['message' => 'Повідомлення успішно відправлене!']);
//     } catch (Exception $e) {
//         // Логування помилки відправки листа
//         $log->error('Помилка відправки листа: ' . $e->getMessage());

//         // Відправлення JSON-відповіді у випадку помилки
//         header('Content-Type: application/json');
//         echo json_encode(['error' => 'Повідомлення не вдалося відправити. Помилка: ' . $mail->ErrorInfo]);
//     }
// }








// use PHPMailer\PHPMailer\PHPMailer;

// require_once('vendor/autoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

// $name = $_POST['name'];
// $email = $_POST['email'];
// $comment = $_POST['comment'];

// //$mail->SMTPDebug = 3;
// $mail->isSMTP();
// $mail->Host = 'smtp.ukr.net';

// $mail->SMTPAuth = true;
// $mail->Username = 'romanbodnarr@ukr.net';
// $mail->SMTPSecure = 'SSL';
// $mail->Port = 465;

// $mail->setFrom('romanbodnarr@ukr.net');
// $mail->addAddress('romanbodnarr@ukr.net');
// $mail->isHTML(true);

// $mail->Subject = 'Заявка с тестового сайта';
// $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;
// $mail->AltBody = '';

// if ($mail->send()) {
//     echo 'Error';
// } else {
//     header('location: thank-you.html');
// }





// use PHPMailer\PHPMailer\PHPMailer;

// // require_once('vendor/autoload.php');
// require 'vendor/autoload.php';

// if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
//     $mail = new PHPMailer();
//     $mail->CharSet = 'utf-8';

//     $name = $_POST['name'] ?? '';
//     $email = $_POST['email'] ?? '';
//     $comment = $_POST['comment'] ?? '';

//     if ($name && $email && $comment) {
//         $mail->isSMTP();
//         $mail->Host = 'smtp.ukr.net';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'romanbodnarr@ukr.net';
//         $mail->SMTPSecure = 'SSL';
//         $mail->Port = 465;

//         $mail->setFrom('romanbodnarr@ukr.net');
//         $mail->addAddress('romanbodnarr@ukr.net');
//         $mail->isHTML(true);

//         $mail->Subject = 'Заявка з тестового сайту';
//         $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;
//         $mail->AltBody = '';

//         if (!$mail->send()) {
//             echo 'Помилка відправлення';
//         } else {
//             // header('location: thank-you.html');
//             // exit();
//             header('Content-Type: text/xml');
//             // Логіка для генерації XML-документу
//             echo (['message' => 'Повідомлення успішно відправлене!']);
//         };
//     } else {
//         echo 'Будь ласка, заповніть всі поля форми.';
//     }
// }







use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer();
    $mail->CharSet = 'utf-8';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if ($name && $email && $comment) {
        $mail->isSMTP();
        $mail->Host = 'smtp.ukr.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'romanbodnarr@ukr.net';
        $mail->SMTPSecure = 'SSL';
        $mail->Port = 465;

        $mail->setFrom('romanbodnarr@ukr.net');
        $mail->addAddress('romanbodnarr@ukr.net');
        $mail->isHTML(true);

        $mail->Subject = 'Заявка з тестового сайту';
        $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;
        $mail->AltBody = '';

        if (!$mail->send()) {
            echo 'Помилка відправлення';
        } else {
            $xml = new SimpleXMLElement('<response></response>');
            $xml->addChild('message', 'Повідомлення успішно відправлене!');

            header('Content-Type: text/xml');
            echo $xml->asXML();
        };
    } else {
        echo 'Будь ласка, заповніть всі поля форми.';
    }
}
