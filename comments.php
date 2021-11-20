<?php
  /* Принимаем данные из формы */
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $email = $_POST["email"];

  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $email = htmlspecialchars($email);

  $mysqli = new mysqli("localhost", "root", "root", "dt kazan trip");// Подключается к базе данных
  /*if (mysqli_connect_errno()) { // проверяем подключение
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
   }*/
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`, `email_comment`) VALUES ('$name', '$page_id', '$text_comment', '$email')");// Добавляем комментарий в таблицу

  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>
