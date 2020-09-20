<?php
  require_once 'protect.php';
  Protect\with('form.php', 'user');
  header( 'Location: /index.html' ) ;
?>
