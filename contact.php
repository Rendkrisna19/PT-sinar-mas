<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.');
                window.location.href='index.html';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
                window.location.href='index.html';
              </script>";
    }
}
?>