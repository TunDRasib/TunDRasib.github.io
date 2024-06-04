<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $to = 'korotin.dani@yandex.ru'; // Замените на ваш адрес электронной почты
    $subject = 'Новая заявка на аренду программ 1С';
    $body = "Имя и фамилия: $name\nТелефон: $phone\nE-mail: $email\nКомментарий: $comment";

    $headers = "From: korotin.dani@yandex.ru\r\n"; // Замените на ваш адрес
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Ваша заявка успешно отправлена.";
    } else {
        echo "Ошибка при отправке заявки. Попробуйте еще раз.";
    }
} else {
    echo "Некорректный запрос.";
}
?>
