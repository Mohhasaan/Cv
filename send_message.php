<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";
    $subject = "رسالة جديدة من موقعك";
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";

    if (mail($to, $subject, $body)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }
}
?>
