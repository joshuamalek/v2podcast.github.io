<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    Invalid password
  <?php } ?>

  <div class="pwform-box">
      <h1>User enters its name</h1>
      <div class="input-box">
      <input type="password" name="password" placeholder="enter your name">
      <div class="login-btn">
      <button type="submit">Submit</button>
      </div>
    </div>
  </div>
</form>

</body>
</html>
