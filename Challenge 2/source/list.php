<?php
if (isset($_POST["dir"]))
{
	if ($_POST["dir"] == "./text/")
	{
		print '<html><head><title>PasteGin v1.4</title><body>';
		chdir("text/");
		foreach (glob("*") as $filename)
		{
			$withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $filename);
			print '<a href="view.php?file=' . $withoutExt . '">' . $filename . '</a><br/>';
		}
		print "</body></html>";

	}
	else if ($_POST["dir"] == "." || $_POST["dir"] == "./" || $_POST["dir"] == "" || $_POST["dir"] == "/")
	{
		print '<html><head><title>PasteGin v1.4</title><body>';
		#chdir("text/");
		foreach (glob("*") as $filename)
		{
			$withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $filename);
			print '<a href="view.php?file=' . $withoutExt . '">' . $filename . '</a><br/>';
		}
		print "</body></html>";
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