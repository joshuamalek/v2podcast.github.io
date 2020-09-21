<html>
  <head>
      <title>Passkey</title>
      <link rel="stylesheet" href="assets/css/pwform.css">
      <link rel="stylesheet" href="assets/webfontkit/wfk-stylesheet.css" />

  </head>
  <body>


<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    <div id="error" value="Hello poopface"></div>
  <?php } ?>

  <div class="pwform-box">
      <div class="input-box">
        <input type="password" name="password" onmouseover="this.type='text'"
       onmouseout="this.type='password'" placeholder="enter name" />

      </div>
      <button type="submit" class="login-btn"> proceed </button>
  </div>
</form>

<!--JS for incorrect password text-->
<script>
function check(){
    if(document.getElementById("error").value == "Wrong keyword entry.")
        return true;
}
</script>
</body>
</html>
