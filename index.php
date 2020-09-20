<?php
  require_once 'protect.php';
  Protect\with('form.php', 'my_password');
  header( 'Location: /index.html' ) ; 
?>
