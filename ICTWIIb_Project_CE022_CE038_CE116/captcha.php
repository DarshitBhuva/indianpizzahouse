<?php
   session_start();

   $captcha = rand(1000, 9999);
   $_SESSION['captcha'] = $captcha;
?>