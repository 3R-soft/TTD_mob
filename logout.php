<?php // logout.php
session_start();

// you may want to delete the session cookie
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time()-60);
}
setcookie("idclana",  '', time()-60);
unset($_SESSION['idclana']);
unset($_SESSION['ref_number']);
$_SESSION = array(); // reset session array
session_destroy(); // destroy session.


header ("Location: index.php");
?>