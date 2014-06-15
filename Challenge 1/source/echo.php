<?php
$logon = 0;
if (isset($_COOKIE["k_val"], $_COOKIE["role"], $_COOKIE["visit"]))
{
	if ($_COOKIE["role"] == "b3aca92c793ee0e9b1a9b0a5f5fc044e05140df3")
	{
		print "key{6e17f3d9348623234cbbd2dd4a900fc7}";
		$logon = 1;	
	}
	else if ($_COOKIE["role"] == "35675e68f4b5af7b995d9205ad0fc43842f16450")
	{
		$logon = 1;
	}
	else
	{
		header( 'Location: /chal1/' ) ;
	}

	if ($logon == 1)
	{
		print "<html><head><title>Echo Tool V0.3</title></head><body>Enter your payload:<br/><form action=\"echo.php\" method=\"post\"/><input name=\"echotext\" type=\"textarea\"/><input type=\"submit\"/><p>Your Payload:</p>";
		if (isset($_POST["echotext"]))
		{
			print "<pre>";
			print htmlspecialchars($_POST["echotext"]); 
			print "</pre>";
		}
		print "</body></html>";
	}
	else
	{
		header( 'Location: /chal1/' ) ;
	}
}
else
{
	header( 'Location: /chal1/' ) ;
	
}
?>