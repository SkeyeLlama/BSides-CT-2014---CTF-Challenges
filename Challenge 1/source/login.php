<?php
$time = time();
setcookie("visit", time() ,$time + 36000,"","",0);
setcookie("k_val", rand() , $time + 36000,"","",0);
if (!isset($_POST["auth"]))
{
	header( 'Location: /chal1/' ) ;
}
if ($_POST["auth"] == 'knvcoinvoirnv3435')
{
	setcookie("role", "b3aca92c793ee0e9b1a9b0a5f5fc044e05140df3", $time +36000,"","",0);
	header( 'Location: echo.php' ) ;
	
}
else if ($_POST["auth"] =='guest')
{
	setcookie("role", "35675e68f4b5af7b995d9205ad0fc43842f16450",$time +36000,"","",0);
	header( 'Location: echo.php' ) ;
} 
else 
{
	header( 'Location: /chal1/' ) ;
}
?>