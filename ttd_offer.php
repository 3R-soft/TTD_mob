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
  <!-- Offer -->
  <div id="offer" data-role="page" data-fullscreen="true" data-theme="f">

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
                      <form action="ttd_home.php" method="get" data-transition="slide" data-direction="reverse" data-prefetch="true" >
                        <style type="text/css">
                          /*pozicioniranje polja za input text*/
                          div.ui-input-text { margin-top: 0px; }
                          /*pozicioniranje teksta u select tasteru, pozicioniranje tastera i njegova visina*/
                          .ui-select .ui-btn { text-shadow: 0 0 0; margin-top: 4px; height: 36px; }
                        </style>
                        <div>
                          <label for="destcity"> destination city: </label>
<!--					  <input type="text" name="destcity" id="destcity" data-clear-btn="true">	-->
                          <input type="text" name="destcity" id="destcity">
                        </div>
                        <div class="razmak">
                          <label for="deststreet"> destination street: </label>
                          <input type="text" name="deststreet" id="deststreet">
                        </div>
                        <div class="razmak">
                          <label for="startfrom"> start from: </label>
                          <input type="text" name="startfrom" id="startfrom">
                        </div>
                        <div class="razmak">
                          <label for="starttime"> start time: </label>
                          <input type="text" name="starttime" id="starttime" placeholder="&nbsp;              sample 12:30">
                        </div>
                        <div class="razmak">
                          <label for="arrivaltime"> arrival time: </label>
                          <input type="text" name="arrivaltime" id="arrivaltime" placeholder="&nbsp;              sample 21:15">
                        </div>
                        <div class="razmak">
                          <label for="seats"> free seats: </label>
                          <select name="seats" data-icon="false" data-shadow="false">
                            <option value="0">chose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="morethan">more than 4</option>
                          </select>
                        </div>
                        <br><br>
                        <input type="submit" id="ok" value="OK" data-theme="d">
                      </form>
                    </td>
                  </tr>
			  </table>
			</td></tr>
		  </table>
		</td></tr>
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
	  </table>
	</div><!-- /content -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /Offer -->

</body>
</html>
