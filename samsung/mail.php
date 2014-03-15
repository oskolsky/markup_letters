<?php

  $send = $_REQUEST['send'];
  $to = 'info@oskolsky.com';
  $cc = 'settimomarzo@gmail.com';
  
  include_once ('../lib/mail.class.php');

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / РЕГИСТРАЦИЯ БЕЗ ПОКУПКИ');
  $mail -> Body(file_get_contents('samsung-1.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();
  
  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ЗАКАЗ ТОВАРА В КРЕДИТ / Зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-2.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ЗАКАЗ ТОВАРА В КРЕДИТ / Не зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-3.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();
  
  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / КРЕДИТ ОДОБРЕН');
  $mail -> Body(file_get_contents('samsung-4.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ПОДЛЕНИЕ БРОНИ');
  $mail -> Body(file_get_contents('samsung-5.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / СНТЯТИЕ БРОНИ');
  $mail -> Body(file_get_contents('samsung-6.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ПОДТВЕРЖДЕНИЕ БРОНИ / Одобрение');
  $mail -> Body(file_get_contents('samsung-7.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ПОДТВЕРЖДЕНИЕ БРОНИ / Отказ');
  $mail -> Body(file_get_contents('samsung-8.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ЗАКАЗ ТОВАРА ЧЕРЕЗ КОРЗИНУ / Не зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-9.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / ЗАКАЗ ТОВАРА ЧЕРЕЗ КОРЗИНУ / Зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-10.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / БРОНИРОВАНИЕ ТОВАРА В ПУНКТЕ САМОВЫВОЗА / Не зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-11.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

  $mail = new mail('utf-8');
  $mail -> log_on(true);
  $mail -> To($to);
  $mail -> Cc($cc);
  $mail -> Subject('Samsung / БРОНИРОВАНИЕ ТОВАРА В ПУНКТЕ САМОВЫВОЗА / Зарегистрированный пользователь');
  $mail -> Body(file_get_contents('samsung-12.html'), 'html');
  $mail -> Priority(3);
  $mail -> Send();
  echo $mail -> Get();

?>