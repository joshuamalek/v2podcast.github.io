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
      <h1>User enters its name.</h1>
      <div class="input-box">
        <input type="password" name="password" value="FakePSW" id="myInput" placeholder="What is your name, User?">
        <input type="checkbox" onclick="myFunction()"> Show User name
      </div>
      <button type="submit" class="login-btn"> proceed </button>
  </div>
</form>

<!--JS - for toggle show PW-->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
