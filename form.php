<html>
  <head>
      <title>Enter Password</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
  </head>
  <body>
  <div class="pwform-box">
  </div>

<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    Invalid password
  <?php } ?>
  <p>Enter password for access:</p>
  <input type="password" name="password">
  <button type="submit">Submit</button>
</form>

</body>
</html>
