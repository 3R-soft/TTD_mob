<?php
  session_start();
  require("config.php");
  if (isset($_SESSION['idclana']))
  { 
	$id = $_REQUEST['id'];
	$db = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database,$db) or die(mysql_error());  

	mysql_query("SET NAMES 'utf8'");    

	$sql = "SELECT * FROM ttd_demo_vozila WHERE id=$id";
	$result = mysql_query($sql  ,$db);
	$myrow = mysql_fetch_array($result);
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
  <!-- Start -->
  <div id="start" data-role="page" data-fullscreen="true" data-theme="a">

	<?php include("ttd_header.php"); ?>

	<!-- content -->
	<!-- u div ispod dodaj data-position="fixed" ako hoćeš da se heder i futer ne povlače... i obrnuto -->
	<div data-role="content" data-position="fixed" class="sredina">
	  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
		<tr><td>
		  <table width="100%" border="0" cellpadding="0" cellspacing="0"><!--style="max-width:600px"-->
            <tr>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
              <td>&nbsp;</td>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
            </tr>

            <tr>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
              <td>
                <div class="startcarinfo">
				<?php 
                  echo '<cars_naslov><strong>';
                  echo $myrow['naziv'];                	  
                  echo '</strong></cars_naslov>';

                  echo '<cars_podnaslov><strong>';
                  echo $myrow['opis_cena'];
                  echo '</strong></cars_podnaslov>';            
                  
                  echo ' <cars_opis>';
                  echo $myrow['opis_ostalo'];               
                  echo '</cars_opis>';
                ?>
                </div>
				<script type="text/javascript">
					$("cars_naslov").fitText(1.2, { minFontSize: 22 });
					$("cars_podnaslov").fitText(2.0, { minFontSize: 13 });
					$("cars_opis").fitText(2.5, { minFontSize: 10 });
                </script>
              </td>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
            </tr>

            <tr>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
              <td>
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="starttasters">
                  <tr>
                    <td class="start">
					  <?php 
						echo '<a href="ttd_stop.php?id= ';
						echo $myrow['id'];
						echo '"> ';
						echo '<img src="images/start-engine.png" width="100%" alt="START"></a> ';
					  ?>
                    </td>
                  </tr>
                  <tr>
                    <td width="50%" class="menuok">
					  <?php 
						echo '<a href="ttd_startstop.php?id= ';
						echo $myrow['id'];
						echo '"> ';
						echo '<img src="images/start_lock.png" width="100%" alt="unlock"></a> ';
					  ?>
                    </td>
                    <td width="50%" class="menunok"><a href="#"><img src="images/start_unlock.png" width="100%" alt="unlock"></a></td>
                  </tr>
                  <tr>
                    <td width="50%" class="menunok"><a href="#"><img src="images/start_panic.png" width="100%" alt="panic"></a></td>
                    <td width="50%" class="menuok"><a href="#"><img src="images/start_trunk.png" width="100%" alt="trunk"></a></td>
                  </tr>
                </table>
              </td>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
            </tr>

            <tr>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
              <td>&nbsp;</td>
              <td width="6%"><img src="images/all4_blank.gif" alt="all4" width="100%"></td>
            </tr>
		  </table>
		</td></tr>
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
      </table>
	</div><!-- /content -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /Start -->

</body>
</html>

<?php 
  }
  else
  {
	header ("Location: index.php"); 	
}
?>