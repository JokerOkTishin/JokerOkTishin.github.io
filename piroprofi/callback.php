<?php 
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['user_name'];
$userphone=$_POST['user_phone'];
$usermessage=$_POST['user_message'];

//Тут указываем на какой ящик посылать письмо
$to = "jokertrade1@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Запрос на консультацию";
// Сообщение письма
$message = "
Тип формы: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Телефон: ".htmlspecialchars($userphone)."<br />
Сообщение: ".htmlspecialchars($usermessage);

// Отправляем письмо при помощи функции mail();
$headers = "From: homework.ls <putin@homework.ls>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>