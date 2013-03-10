<?php
require("config.php");

 session_start();
 $IsLoged=false;  
 unset($_SESSION['invalid_login']);
 unset($_SESSION['no_pin']);
 if ((isset($_POST['pin']) && $_POST['pin'] != '')) 
 {	 	  
    $email= $_POST['email'];        	   
    $pin=$_POST['pin'];  
    
    $nekriptovanpin=$pin;                                    
    
    $db = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(mysql_error());
    mysql_select_db($mysql_database,$db) or die(mysql_error());        
    
    $email = mysql_real_escape_string($email);
    $pin = mysql_real_escape_string($pin);
    
    
    if (!($email==$pin))
    {       
      $pin=md5($pin);       
    } 
    
    
    
    $sql = "SELECT * FROM clanovi WHERE email='$email' AND pin='$pin' AND brojuzastopnihpokusajalogovanja  < 10";            
   
    $result1 = mysql_query($sql  ,$db);
    if ($myrow = mysql_fetch_array($result1))
    { 	
      $_SESSION['email'] = $myrow['email'];
	    $_SESSION['idclana'] = $myrow['idclana'];	
	     
	
	   
     unset($_SESSION['invalid_login']);
     
    
 	      header ("Location: ttd_home.php");
 	    
 	    $IsLoged=true;
 	    exit();
    }
   else
 {
 	 $_SESSION['invalid_login']=1;
 	 header ("Location: index.php"); 	
 	 
   
  
 }
    mysql_free_result($result1);
	  mysql_close();
 }
 else
 {
 	 $_SESSION['no_login']=1;
 	header ("Location: index.php"); 	
 }
?> 