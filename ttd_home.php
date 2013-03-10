<?php 
session_start();
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
    </head>


<body>
  <!-- Home -->
  <div id="home" data-role="page" data-fullscreen="true" data-theme="a" style="background-image:url(images/Pozadina_blank.jpg); background-size: 100% 100%;">

	<?php include("ttd_header.php"); ?>

	<!-- content -->
	<!-- u div ispod dodaj data-position="fixed" ako hoćeš da se heder i futer ne povlače... i obrnuto -->
	<div data-role="content" data-position="fixed" class="sredina">
	  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
		<tr><td>
		  <table width="100%" align="center" border="0" cellpadding="0" cellspacing="20"><!--style="max-width:600px"-->
              <tr>
                <td width="100%" class="taster"><a href="#" data-transition="slide"><img src="images/taster1.png" width="100%" class="round10"><bigtaster class="taster_text">find ride</bigtaster></a></td>
              </tr>
              <tr>
                <td width="100%" class="taster"><a href="ttd_filters.php" data-prefetch="true" data-transition="slide"><img src="images/taster2.png" width="100%" class="round10"><bigtaster class="taster_text">get car</bigtaster></a></td>
              </tr>
              <tr>
                <td width="100%" class="taster"><a href="ttd_offer.php" data-prefetch="true" data-transition="slide"><img src="images/taster3.png" width="100%" class="round10"><bigtaster class="taster_text">offer ride</bigtaster></a></td>
              </tr>
			<script type="text/javascript">
                $("bigtaster").fitText(1.1, { minFontSize: 36, maxFontSize: '180px' });
            </script>
		  </table>
		</td></tr>
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
	  </table>
	</div><!-- /content -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /Home -->

</body>
</html>
