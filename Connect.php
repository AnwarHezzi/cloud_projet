<?php

try{
$con = new PDO ("mysql:host=ensit.czm4qyh9vmfw.eu-west-1.rds.amazonaws.com:3306;dbname=imageupload","anwar","anwar1644"); 
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "connected";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>