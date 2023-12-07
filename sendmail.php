<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $comment = $_POST['comment'];

//     $mail = new PHPMailer(true);

//     try {
//         // Налаштування серверу SMTP
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com'; // Адреса вашого SMTP-серверу
//         $mail->SMTPAuth = true;
//         $mail->Username = 'petromelychyn@gmail.com'; // Ваша електронна пошта
//         $mail->Password = 'Tomik2017'; // Ваш пароль від поштової скриньки
//         $mail->SMTPSecure = 'tls';
//         $mail->Port = 587;

//         // Налаштування відправки листа
//         $mail->setFrom($email, $name);
//         $mail->addAddress('petromelychyn@gmail.com'); // Адреса, на яку ви хочете відправити пошту
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Comment: ' . $comment;

//         // Відправлення листа
//         $mail->send();
//         echo 'Повідомлення успішно відправлене!';
//     } catch (Exception $e) {
//         echo "Повідомлення не вдалося відправити. Помилка: {$mail->ErrorInfo}";
//     }
// }





// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// require './vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer
// require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/get_oauth_token.php';

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
//         $mail->Password = 'Tomik2017'; // Ваш пароль від поштової скриньки
//         $mail->SMTPSecure = 'tls';
//         $mail->Port = 587;

//         // Налаштування відправки листа
//         $mail->setFrom($email, $name);
//         $mail->addAddress('romanbodnarr@ukr.net'); // Адреса, на яку ви хочете відправити пошту
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body = 'Name: ' . $name . 'Email: ' . $email . 'Comment: ' . $comment;

//         // Відправлення листа
//         $mail->send();

//         // Відправлення JSON-відповіді
//         header('Content-Type: application/json');
//         echo json_encode(['message' => 'Повідомлення успішно відправлене!']);
//     } catch (Exception $e) {
//         // Відправлення JSON-відповіді у випадку помилки
//         header('Content-Type: application/json');
//         echo json_encode(['error' => 'Повідомлення не вдалося відправити. Помилка: ' . $mail->ErrorInfo]);
//     }
// }




// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// require './vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer
// require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/get_oauth_token.php';

// // Підключення Monolog
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

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
//         $mail->Password = 'Tomik2017'; // Ваш пароль від поштової скриньки
//         $mail->SMTPSecure = 'tls';
//         $mail->Port = 587;

//         // Налаштування відправки листа
//         $mail->setFrom($email, $name);
//         $mail->addAddress('romanbodnarr@ukr.net'); // Адреса, на яку ви хочете відправити пошту
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body = 'Name: ' . $name . 'Email: ' . $email . 'Comment: ' . $comment;

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








use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Підключення Monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Підключення автозавантажувача PHPMailer
require './vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer

// Ініціалізація логера
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__ . '/error.log', Logger::WARNING));

// Перевірка, чи прийшов запит методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $mail = new PHPMailer(true);

    try {
        // Налаштування серверу SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.ukr.net'; // Адреса вашого SMTP-серверу
        $mail->SMTPAuth = true;
        $mail->Username = 'romanbodnarr@ukr.net'; // Ваша електронна пошта
        $mail->Password = 'Tomik2017'; // Ваш пароль від поштової скриньки
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Налаштування відправки листа
        $mail->setFrom($email, $name);
        $mail->addAddress('romanbodnarr@ukr.net'); // Адреса, на яку ви хочете відправити пошту
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;


        // Відправлення листа
        $mail->send();

        // Логування успішної відправки листа
        $log->info('Лист успішно відправлено: ' . $email);

        // Відправлення JSON-відповіді
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Повідомлення успішно відправлене!']);
    } catch (Exception $e) {
        // Логування помилки відправки листа
        $log->error('Помилка відправки листа: ' . $e->getMessage());

        // Відправлення JSON-відповіді у випадку помилки
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Повідомлення не вдалося відправити. Помилка: ' . $mail->ErrorInfo]);
    }
}
