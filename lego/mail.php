<?php

  $send = $_REQUEST['send'];
  $to = 'info@oskolsky.com';
  $cc = 'settimomarzo@gmail.com';
  
  include_once ('../lib/mail.class.php');

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Lego / Спасибо за регистрацию');
  $mail -> Body(file_get_contents('Register_on_event.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();

  echo $mail -> Get();

?>