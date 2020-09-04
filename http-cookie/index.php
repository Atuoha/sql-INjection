<?php   
 
 $date=  new DateTime('+1 day');
  setcookie('username','anthonio',$date->getTimestamp(),'/',null,true,true);
?>