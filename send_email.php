<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "tarsasek@proton.me"; // Your company's email address
    $subject = "Üzenet a Társasék weboldalról";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "<p>Üzenet sikeresen elküldve!</p>";
    } else {
        echo "<p>Hiba történt az üzenet küldése közben. Kérjük, próbálja újra később.</p>";
    }
}
?>