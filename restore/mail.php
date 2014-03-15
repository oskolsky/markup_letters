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
  $mail -> Subject('re:Store: РЕГИСТРАЦИЯ БЕЗ ПОКУПКИ');
  $mail -> Body(file_get_contents('reStore-9.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();
  
?>