<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    <div class="inc-pw">That is not your name, User.</br>User has already been told its name.</div>
  <?php } ?>

  <div class="pwform-box">
      <h1>User enters its name.</h1>
      <div class="input-box">
        <input type="password" name="password" onmouseover="this.type='text'"
       onmouseout="this.type='password'" placeholder="enter name" />

      </div>
      <button type="submit" class="login-btn"> proceed </button>
  </div>
</form>

</body>
</html>
