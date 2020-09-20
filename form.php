<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    <div class="inc-pw" id="error">That is not your name, User.</br>User has already been told its name.</div>
  <?php } ?>

  <div class="pwform-box">
    <div class="user-msg" id="error" placeholder="You are the User of the Program.</br>User will now enter its name."></div>
      <div class="input-box">
        <input type="password" name="password" onmousedown="this.type='text'"
       onmouseout="this.type='password'" placeholder="enter name" />

      </div>
      <button type="submit" class="login-btn"> proceed </button>
  </div>
</form>

<!--JS for incorrect password text-->
<script>
function check(){
    if(document.getElementById("victory").value == "victory")
        return true;
    else
        document.getElementById("error").innerHTML = "Wrong keyword entry."
        return false;
}
</script>
</body>
</html>
