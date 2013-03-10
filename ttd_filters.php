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
  <!-- Filters -->
  <div id="filters" data-role="page" data-fullscreen="true" data-theme="f">

	<?php include("ttd_header.php"); ?>

	<!-- content -->
	<!-- u div ispod dodaj data-position="fixed" ako hoćeš da se heder i futer ne povlače... i obrnuto -->
	<div data-role="content" data-position="fixed" class="sredina">
	  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
	    <tr><td>
		<table width="100%" align="center" border="0" cellpadding="0" cellspacing="20"><!--style="max-width:600px"-->
		  <tr><td>
			<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="20" class="backgr">
              <tr class="formclass">
				<td align="center">
				  <form enctype="multipart/form-data" action="ttd_cartype.php" method="post" data-transition="slide" data-prefetch="true" >
					<style type="text/css">
					  /*pozicioniranje teksta u tasteru i samog tastera*/
					  .ui-select .ui-btn { text-align: center; text-shadow: 0 0 0; margin-top: 2px; }
					</style>
					<fieldset>
					  <div>
                        <label for="udaljenost">distance</label>
                        <select name="udaljenost" data-icon="false" data-shadow="false">
                          <option value="0" selected>any distance</option>
                          <option value="1">0 - 200 m</option>
                          <option value="2">200 - 500 m</option>
                          <option value="3">500 - 1000 m</option>
                          <option value="4">1000 - 5000 m</option>
                        </select>
					  </div>
					  <div class="razmak">
                        <label for="cena">price</label>
                        <select name="cena" data-icon="false" data-shadow="false">
                          <option value="0" selected>any price</option>                	
                          <option value="1">0,79€/h - 0,079€/km</option>                	
                          <option value="2">0,89€/h - 0,089€/km</option>                	
                          <option value="3">0,99€/h - 0,099€/km</option>                	
                          <option value="4">1,29€/h - 0,129€/km</option>                	
                          <option value="5">1,79€/h - 0,179€/km</option>                	
                        </select>
					  </div>
					  <div class="razmak">
                        <label for="gorivo">type of fuel</label>
                        <select name="gorivo" data-icon="false" data-shadow="false">
                          <option value="0" selected>any fuel</option>                	
                          <option value="1">Electric</option>                	
                          <option value="2">Hybrid</option>                	
                          <option value="3">Hydrogen</option>                	
                          <option value="4">EcoGas (CNG)</option>                	
                          <option value="5">Gas (LPG)</option>                	
                          <option value="6">Petrol</option>                	
                          <option value="7">Diesel</option>                	
                        </select>
					  </div>
					  <div class="razmak">
                        <label for="tip">type of car</label>
                        <select name="tip" data-icon="false" data-shadow="false">
                          <option value="0" selected>any type</option>                	
                          <option value="1">small</option>
                          <option value="2">hatchback</option>
                          <option value="3">SUV</option>
                          <option value="4">coupe</option>
                          <option value="5">convertible</option>
                          <option value="6">sallon</option>
                          <option value="7">estate</option>
                          <option value="8">van</option>
                        </select>
					  </div>
					</fieldset>
					<div style="margin-top:30px">
					  <input type="submit" id="ok" value="OK" data-theme="d">
					</div>
				  </form>
				</td>
			  </tr>
			</table>
		  </td></tr>
		</table>
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
		</td></tr>
	  </table>
	</div><!-- /content -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /Filters -->

</body>
</html>
