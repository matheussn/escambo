<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

<?php
if ( $this->logged_in ) {
	echo '<p class="alert">Logado</p>';
}
?>
<html lang="en">
  <head>
 	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

  </head>

  <body>
    <form method="post" class="col s12">
      <input id="icon_prefix" type="text" name="userdata[user]" class="validate" required autofocus>
      <input id="icon_telephone" type="password" name="userdata[user_password]"  class="validate" required>
      <button class="btn blue" name="enviar" type="submit">Login</button>      
    </form>
  </body>
</html>

  