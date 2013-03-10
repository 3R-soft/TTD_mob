<?php 
  session_start();
  if (isset($_SESSION['idclana'])) {
	  header ("Location: ttd_home.php");
  }
  else {
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<title>TTD_mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" href="themes/3R_theme-1.3.css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css">
		<link rel="stylesheet" href="css/3r-style.css">

		<link rel="stylesheet" href="css/ttd_mob.css" type="text/css">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/3r-jquery.mobile-1.3.0-rc.1.js"></script>
		<script type="text/javascript" src="js/cordova.js"></script>
		<script type="text/javascript" src="js/3r-custom.js"></script>
		<script type="text/javascript" src="js/fittext.js"></script>

		<script type="text/javascript">
          document.addEventListener("backbutton", function(e){
            if($.mobile.activePage.is('#login')){
                e.preventDefault();
                navigator.app.exitApp();
            }
            else {
                navigator.app.backHistory()
            }
          }, false);
        </script>

    </head>


<body>
  <!-- LogIn -->
  <div id="login" data-role="page" data-fullscreen="true" data-theme="a" style="background-image:url(images/Pozadina.jpg); background-size: 100% 100%;">

	<?php include("ttd_header.php"); ?>

	<!-- content -->
	<!-- u div ispod dodaj data-position="fixed" ako hoćeš da se heder i futer ne povlače... i obrnuto -->
	<div data-role="content" data-position="fixed" class="sredina">
          <a href="#popupLogin" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-icon="false" data-theme="f" data-transition="false" style="position:absolute; top:60px; left:3%; width:30%">Log in</a>

	<div style="position:absolute; bottom:70px">
        <hr color="#333333">
        <span class="copyright">&nbsp; Copyright &copy; 2013 <a href="https://www.facebook.com/pages/3R-Design-NS/167682319942586" target="_blank" class="ui-link">3R Design - NS</a> web design &amp; development &nbsp;</span><br>
        <hr color="#333333">
	</div>

	</div><!-- /content -->

	<!-- popupLogin -->
    <div id="popupLogin" data-role="popup" data-theme="a" data-overlay-theme="a" class="ui-corner-all"
    style="padding:0 15%">
        <form enctype="multipart/form-data" action="dologin.php" method="post">
          <div style="margin:0 -10% 20px -10%">
            <h3 style="text-align:center">Please log in</h3>
                <?php
                if (isset($_SESSION['no_pin']))
                {
                    echo '<p style="text-align:center; color:#ff0">Password is not entered!</p>';
                }
                else if (isset($_SESSION['invalid_login']))
                {
                    echo '<p style="text-align:center; color:#ff0">Invalid username or password !</p>';
                }
                ?>
            <label for="email" class="ui-hidden-accessible">Username:</label><!--skriveno-->
            <input type="text" name="email" id="email" value="" placeholder="username or e-mail address" data-theme="e" style="text-align:center" />
            <label for="pin" class="ui-hidden-accessible">Password:</label><!--skriveno-->
            <input type="password" name="pin" id="pin" value="" placeholder="password" data-theme="e" class="lozinka" />
        <br>
            <input type="submit" name="submit" value="Log in" data-theme="f" />
          </div>
        </form>
    </div><!-- /popupLogin -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /LogIn -->

</body>
</html>

<?php 
	}
  unset($_SESSION['invalid_login']);
  unset($_SESSION['no_pin']);
?>
