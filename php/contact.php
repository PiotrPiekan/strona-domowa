<?php
  $recipient = '313052@stud.umk.pl';

  $name = htmlspecialchars(trim($_POST['contactName']));
  $sender = filter_var($_POST['contactSender'], FILTER_SANITIZE_EMAIL);
  $subject = htmlspecialchars(trim($_POST['contactSubject']));
  $content = nl2br(htmlspecialchars($_POST['contactContent']));

  $subject = "Wiadomość ze strony: $subject";
  $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

  $headers = 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
  $headers .= 'From: =?UTF-8?B?' . base64_encode($name);
  $headers .= "?= <$sender>" . PHP_EOL;
  $headers .= "Reply-to: $sender" . PHP_EOL;
  $headers .= "Return-Path: $sender" . PHP_EOL;
  $headers .= 'X-Mailer: PHP/' . phpversion() . PHP_EOL;
  $headers .= 'X-Priority: 3' . PHP_EOL;

  $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
  $url = "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  # Serwer domyślnie bierze czas UTC
  date_default_timezone_set('Europe/Warsaw');
  $data = date('j.m.Y'); # np. 01.09.2022
  $czas = date('H:i:s'); # np. 18:15:01

  $footer = "Wiadomość wysłana dnia $date o godz. $time.";

  $message = <<<AEIOU
<!DOCTYPE html>
<html lang='pl'>
  <head>
    <meta charset='utf-8' />
    <title>mail</title>
  </head>
  <body>
    Wiadomość ze strony: $url<br />
    Imię i nazwisko: $name<br />
    Adres email: $sender<br />
    Treść wiadomości:<br />
    $content<br />
    $footer
  </body>
</html>
AEIOU;

  if (@mail($recipient, $subject, $message, $headers)) {
    echo 'Twoja wiadomość została wysłana!';
  }
  else {
    echo 'Wystąpił błąd podczas wysyłania!';
  }
?>