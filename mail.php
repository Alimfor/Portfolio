<?php
// Проверяем, что запрос отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Получаем данные из формы
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : 'Без темы';
    $message = $_POST["message"];

    // Проверяем, что все обязательные поля заполнены
    if (!empty($name) && !empty($email) && !empty($message)) {

        // Устанавливаем заголовки для отправки письма
        $to = "example@mail.com"; // Адрес, на который будет отправлено письмо
        $headers = "From: " . $email . "\r\n" .
            "Reply-To: " . $email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Формируем тело письма
        $body = "Имя: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Телефон: " . $phone . "\n\n" .
            "Сообщение:\n" . $message;

        // Отправляем письмо
        if (mail($to, $subject, $body, $headers)) {
            echo "Сообщение успешно отправлено!";
        } else {
            echo "Произошла ошибка при отправке сообщения.";
        }

    } else {
        echo "Пожалуйста, заполните все обязательные поля.";
    }
}
?>