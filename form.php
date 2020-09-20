<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    That is not your name, User.
  <?php } ?>

  <div class="pwform-box">
      <h1>You are User</h1>
      <div class="input-box">
        <input type="password" name="password" placeholder="who are you?">
      </div>
      <button type="submit" class="login-btn"> > </button>
  </div>
</form>

</body>
</html>
