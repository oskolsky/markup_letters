<?php

  $send = $_REQUEST['send'];
  $to = 'info@oskolsky.com';
  $cc = 'settimomarzo@gmail.com';
  
  $data = $_REQUEST['data'];
  include_once ('../lib/mail.class.php');
  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('re:Store: ЗАКАЗ ТОВАРА В КРЕДИТ / Зарегистрированный пользователь');
  $mail -> Body(file_get_contents('reStore-2.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();
  
?>