<?php
  require_once 'protect.php';
  Protect\with('form.php', 'User');
  header( "Location: https://www.v2podcast.com/index.html" ) ;
?>
