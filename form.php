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
      <h1>Login Here</h1>
      <div class="input-box">
      <p>You are the User</br></p>
      <input type="password" name="password" placeholder="User's Name">
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

</body>
</html>
