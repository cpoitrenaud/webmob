<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> TP 1 - Page Random</title>
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="apple-touch-icon" href="img/logo-114.png" sizes="114x114" /> <!-- favicon pour mobile-->
<link rel="apple-touch-icon" href="img/logo-72.png" sizes="72x72" />
<link rel="apple-touch-icon" href="img/logo-57.png" sizes="57x57" />
<link rel="apple-touch-startup-image" href="img/splash-touch.png"/> <!-- image d'attente avant l'affichage du site -->
<script type="text/javascript" src="css/lib.js"></script>
<script type="text/javascript" language="javascript">
myGps.init();
function gpsonload()
{
	
	document.getElementById('contenu').innerHTML=myGps.get();
}
</script>
</head>
<body onload="gpsonload();">

<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<section class="wrapper">
<br class="clear"/>
	<article>
		<header><h1>Trouver une Bande Dessin&eacute;e au hasard</h1></header>
		<p><span id="contenu"></span></p>
	</article>
</section>
<?php include('inc/footer.php');?>
</body>
</html>