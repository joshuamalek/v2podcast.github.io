<html>
  <head>
      <title>Enter Password</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    Invalid password
  <?php } ?>

  <div class="pwform-box">
      <h1>you are the User</h1>
      <div class="input-box">
      <input type="password" name="password" placeholder="enter your name">
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

</body>
</html>
