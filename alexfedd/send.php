<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'alexandrfedorov508@gmail.com'; // Адрес электронной почты получателя
$subject = 'СООБЩЕНИЕ НА САЙТЕ'; // Тема письма
$headers = 'From:' .  "info@alexfedd.kz" . "\r\n" . // Отправитель письма
            'Reply-To:' .  $email . "\r\n" . // Адрес для ответа
            'Content-Type: text/html; charset=utf-8' . "\r\n" . // Устанавливаем Content-Type заголовок
            'X-Mailer: PHP/' . phpversion(); // Информация о версии PHP

mail($to, $subject, $message, $headers); // Отправка письма

$response = array('status' => 'success', 'message' => 'Форма успешно отправлена');
echo json_encode($response); // Отправка JSON-ответа
?>