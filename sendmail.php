<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// require_once './vendor/autoload.php';
// require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require './vendor/phpmailer/phpmailer/src/Exception.php';
// require './vendor/phpmailer/phpmailer/src/SMTP.php';

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler(__DIR__ . '/error.log', Level::Warning));

// if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $comment = $_POST['comment'];

//     $mail = new PHPMailer(true);

//     try {
//         $mail->isSMTP();
//         $mail->Host = 'smtp.ukr.net';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'romanbodnarr@ukr.net';
//         $mail->Password = 'FUUhXJwPiqnWDEyG';
//         $mail->SMTPSecure = 'SSL';
//         $mail->Port = 465;

//         $mail->setFrom($email, $name);
//         $mail->addAddress('romanbodnarr@ukr.net');
//         $mail->isHTML(true);
//         $mail->Subject = 'New Form Submission';
//         $mail->Body = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment;

//         $mail->send();

//         $log->info('Лист успішно відправлено: ' . $email);

//         header('Content-Type: application/json');
//         echo json_encode(['message' => 'Повідомлення успішно відправлене!']);
//     } catch (Exception $e) {
//         $log->error('Помилка відправки листа: ' . $e->getMessage());

//         header('Content-Type: application/json');
//         echo json_encode(['error' => 'Повідомлення не вдалося відправити. Помилка: ' . $mail->ErrorInfo]);
//     }
// }








require 'vendor/autoload.php';

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Створення транспорту для відправлення
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
        ->setUsername('olegsiuma@gmail.com')
        ->setPassword('qwtq sldb szow mpmn'); // Пароль для вашої поштової скриньки

    // Створення об'єкта Mailer
    $mailer = new Swift_Mailer($transport);

    // Створення листа
    $message = (new Swift_Message('New Form Submission'))
        // ->setFrom([$email => $name])
        ->setFrom(['olegsiuma@gmail.com' => 'glowing-journey'])
        ->setTo(['olegsiuma@gmail.com'])
        ->setBody('Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment);

    // Відправлення листа
    $result = $mailer->send($message);

    if ($result) {
        echo 'Лист успішно відправлено!';
    } else {
        echo 'Помилка відправки листа';
    }
}




// qwtq sldb szow mpmn