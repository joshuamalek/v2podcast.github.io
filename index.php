<?php
  require_once 'protect.php';
  Protect\with('form.php', 'user' + 'User');
  header( 'Location: /index.html' ) ;
?>
