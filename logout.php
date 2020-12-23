<?php
session_start();
session_destroy();
setcookie ("username",'' ,time()-10, "/","", 0);
setcookie ("password", '',time()-10, "/","", 0);
header("Location: index.php");
?>