<?php
  session_start();
  require("config.php");
  if (isset($_SESSION['idclana']))
  { 
	$db = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database,$db) or die(mysql_error());  
    
	mysql_query("SET NAMES 'utf8'");      
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
  <!-- CarType -->
  <div id="cartype" data-role="page" data-fullscreen="true" data-theme="a" style="background-image:url(images/Pozadina_blank.jpg); background-size: 100% 100%;">

	<?php include("ttd_header.php"); ?>

	<!-- u div ispod dodaj data-position="fixed" ako hoćeš da se heder i futer ne povlače... i obrnuto -->
	<!-- content -->
	<div data-role="content" data-position="fixed" class="sredina">
	  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
        <tr><td>
		  <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"><!--style="max-width:600px"-->
			<tr><td>
			  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="20">
    
                  <?php 
                    $sql="SELECT * FROM ttd_demo_vozila ORDER BY id";
                    $result = mysql_query($sql  ,$db);
                    while ($myrow = mysql_fetch_array($result)) 
                    {  
                      echo '<tr>';
                      echo '<td width="100%" height="100%" class="taster"><a href="ttd_startstop.php?id=';
                      echo $myrow['id'];
                      echo '" data-transition="slide">';
                      echo '<div class="cars_text"><cars_naslov>';
                      echo $myrow['naziv'];          
                      echo '</cars_naslov>';          
                      echo '<cars_podnaslov>';          
                      echo $myrow['opis_cena'];
                      echo '</cars_podnaslov>';            
                      echo '<cars_opis>';
                      echo $myrow['opis_ostalo'];               
                      echo '</cars_opis></div>';
                      echo '<div class="cars"><img src="images/';
                      echo  $myrow['slika'];          
                      echo '" width="100%"></div></a></td>';
                      echo '</tr>';
                    }	
                  ?>
    
				<script type="text/javascript">
					$("cars_naslov").fitText(1.2, { minFontSize: 22 });
					$("cars_podnaslov").fitText(2.0, { minFontSize: 13 });
					$("cars_opis").fitText(2.5, { minFontSize: 10 });
                </script>

			  </table>
			</td></tr>
		  </table>
		</td></tr>
		<tr width="100%" height="46"><td>&nbsp;</td></tr>
	  </table>
	</div><!-- /content -->

	<?php include("ttd_footer.php"); ?>

  </div><!-- /CarType -->

</body>
</html>

<?php 
  }
  else
  {
	header ("Location: index.php"); 	
}
?>