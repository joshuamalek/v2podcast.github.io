<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    <div class="inc-pw">That is not your name, User.</div>
  <?php } ?>

  <div class="pwform-box">
      <h1>You are the User of the Program</h1>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter your name to proceed.">
      </div>
      <button type="submit" class="login-btn"> > </button>
  </div>
</form>

</body>
</html>
