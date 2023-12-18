<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['E-mail'];
    $phone = $_POST['Phone'];

    $project_name = $_POST["project_name"];
    $admin_email = $_POST["admin_email"];
    $form_subject = $_POST["form_subject"];

    $message = "Ім'я: $name\nE-mail: $email\nТелефон: $phone";

    mail($admin_email, $form_subject, $message, "From: $project_name");

    echo "Форма успішно відправлена!";
} else {
    echo "Помилка при обробці запиту.";
}
?>
