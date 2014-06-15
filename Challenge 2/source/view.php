<?php

if (isset($_GET["file"]))
{
	if (ctype_alnum($_GET["file"]))
	{
		print "<html><head><title>PasteGin v1.4</title><body>";
		#print '<p>Your link:<br/>http://www.fatterpurse.com/chal2/view.php?file=' . $_GET["file"] . '</p>
		print '<br/>Content:<br/><pre>';
		if (file_exists("./text/" . $_GET["file"] . ".txt"))
		{
			print htmlspecialchars(file_get_contents("./text/" . $_GET["file"] . ".txt"));
		}
		else
		{
			print "Not Found";
		}
		print "</pre></body></html>";
	}
	else
	{
	header( 'Location: /chal2' );
	}
}
else
{
	header( 'Location: /chal2' );
}
?>