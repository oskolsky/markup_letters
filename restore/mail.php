<?php

  $send = $_REQUEST['send'];
  $to = 'info@oskolsky.com';
  $cc = 'settimomarzo@gmail.com';
  
  include_once ('../lib/mail.class.php');

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / РЕГИСТРАЦИЯ БЕЗ ПОКУПКИ');
  // $mail -> Body(file_get_contents('reStore-1.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();
  
  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ЗАКАЗ ТОВАРА В КРЕДИТ / Зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-2.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ЗАКАЗ ТОВАРА В КРЕДИТ / Не зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-3.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();
  
  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / КРЕДИТ ОДОБРЕН');
  // $mail -> Body(file_get_contents('reStore-4.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ПОДЛЕНИЕ БРОНИ');
  // $mail -> Body(file_get_contents('reStore-5.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / СНТЯТИЕ БРОНИ');
  // $mail -> Body(file_get_contents('reStore-6.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ПОДТВЕРЖДЕНИЕ БРОНИ / Одобрение');
  // $mail -> Body(file_get_contents('reStore-7.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ПОДТВЕРЖДЕНИЕ БРОНИ / Отказ');
  // $mail -> Body(file_get_contents('reStore-8.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ЗАКАЗ ТОВАРА ЧЕРЕЗ КОРЗИНУ / Не зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-9.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / ЗАКАЗ ТОВАРА ЧЕРЕЗ КОРЗИНУ / Зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-10.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / БРОНИРОВАНИЕ ТОВАРА В ПУНКТЕ САМОВЫВОЗА / Не зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-11.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  // $mail = new mail('utf-8');
  // $mail -> log_on(true);
  // $mail -> To($to);
  // $mail -> Cc($cc);
  // $mail -> Subject('re:Store / БРОНИРОВАНИЕ ТОВАРА В ПУНКТЕ САМОВЫВОЗА / Зарегистрированный пользователь');
  // $mail -> Body(file_get_contents('reStore-12.html'), 'html');
  // $mail -> Priority(3);
  // $mail -> Send();
  // echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('re:Store / ТОВАР');
  $mail -> Body(file_get_contents('reStore-13.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

?>