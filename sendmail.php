<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Підключення Monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Підключення автозавантажувача PHPMailer
require_once './vendor/autoload.php'; // Підключіть автозавантажувач PHPMailer
require_once './vendor/phpmailer/phpmailer/get_oauth_token.php';

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
        $mail->Password = 'FUUhXJwPiqnWDEyG'; // Ваш пароль від поштової скриньки
        $mail->SMTPSecure = 'SSL';
        $mail->Port = 465;

        // Налаштування відправки листа
        $mail->setFrom($email, $name);
        $mail->addAddress('olegsiuma@gmail.com'); // Адреса, на яку ви хочете відправити пошту
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
