<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Получаем данные из формы
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

// Проверьте, что поля не пустые
if (!empty($email) && !empty($message)) {
// Укажите email, куда отправлять сообщения
$to = "vris@post.cz"; // Замените на ваш email
$subject = "Сообщение с сайта";
$headers = "From: $email";

// Отправка письма
if (mail($to, $subject, $message, $headers)) {
echo "Сообщение отправлено успешно!";
} else {
echo "Ошибка при отправке сообщения.";
}
} else {
echo "Пожалуйста, заполните все поля.";
}
} else {
echo "Неверный метод отправки данных.";
}
?>
?>