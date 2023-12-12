<?php

// require 'vendor/autoload.php';

// header('Content-Type: application/json');

// $response = array();

// if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'] ?? '';
//     $email = $_POST['email'] ?? '';
//     $comment = $_POST['comment'] ?? '';

//     if (!empty($name) && !empty($email) && !empty($comment)) {
//         $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
//             ->setUsername('olegsiuma@gmail.com')
//             ->setPassword('qwtq sldb szow mpmn');

//         $mailer = new Swift_Mailer($transport);

//         $message = (new Swift_Message('New Form Submission'))
//             ->setFrom([$email => $name])
//             ->setTo(['olegsiuma@gmail.com'])
//             ->setBody('Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment);

//         $result = $mailer->send($message);

//         if ($result) {
//             $response['success'] = true;
//             $response['message'] = 'Лист успішно відправлено!';
//         } else {
//             $response['success'] = false;
//             $response['message'] = 'Помилка відправки листа';
//         }
//     } else {
//         $response['success'] = false;
//         $response['message'] = 'Будь ласка, заповніть усі поля форми';
//     }
// } else {
//     $response['success'] = false;
//     $response['message'] = 'Помилка методу запиту';
// }

// echo json_encode($response);






require 'vendor/autoload.php';

header('Content-Type: application/json');

$response = array();

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $teacher = $_POST['teacher'] ?? '';

    if (!empty($name) && !empty($email) && !empty($comment) && !empty($teacher)) {

        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
            ->setUsername('olegsiuma@gmail.com')
            ->setPassword('qwtq sldb szow mpmn');

        $mailer = new Swift_Mailer($transport);

        $messageBody = 'Name: ' . $name . "\nEmail: " . $email . "\nComment: " . $comment . "\nChosen Teacher: " . $teacher;

        $message = (new Swift_Message('New Form Submission'))
            ->setFrom([$email => $name])
            ->setTo(['olegsiuma@gmail.com'])
            ->setBody($messageBody);

        $result = $mailer->send($message);

        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Лист успішно відправлено!';
        } else {
            $response['success'] = false;
            $response['message'] = 'Помилка відправки листа';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Будь ласка, заповніть усі поля форми та оберіть хоча б одного вчителя';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Помилка методу запиту';
}

echo json_encode($response);
