<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> TP 1 - d&eacute;veloppement pour mobile</title>
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="apple-touch-icon" href="img/logo-114.png" sizes="114x114" /> <!-- favicon pour mobile-->
<link rel="apple-touch-icon" href="img/logo-72.png" sizes="72x72" />
<link rel="apple-touch-icon" href="img/logo-57.png" sizes="57x57" />
<link rel="apple-touch-startup-image" href="img/splash-touch.png"/> <!-- image d'attente avant l'affichage du site -->
<script type="text/javascript" language="javascript">
function rangeChange(newval,id)
{
	document.getElementById(id).innerHTML=newval;
}
function init(){

	if ((MemoireSite.get('auteur')!="")&&(document.getElementById("auteur").value==""))
	{
		document.getElementById("auteur").value=MemoireSite.get('auteur');
	}
	if ((MemoireSite.get('nationalite')!="")&&(document.getElementById("nationalite").value==""))
	{
		document.getElementById("nationalite").value=MemoireSite.get('nationalite');
	}
	if (MemoireSite.get('annee')!="")
	{
		document.getElementById("annee").value=MemoireSite.get('annee');
		document.getElementById("an").innerHTML=MemoireSite.get('annee');
	}
	if (MemoireSite.get('prix')!="")
	{
		document.getElementById("prix").value=MemoireSite.get('prix');
		document.getElementById("price").innerHTML=MemoireSite.get('prix');
	}
	if ((MemoireSite.get('titre')!="")&&(document.getElementById("titre").value==""))
	{
		document.getElementById("titre").value=MemoireSite.get('titre');
	}
}
</script>
<script type="text/javascript" src="css/lib.js"></script>
</head>
<body onload="init();">
<?php include('inc/header.php');?>
<?php include('inc/menu.php');?>
<section class="wrapper">
<br class="clear"/>
	<article>
		<header><h1>Recherchez une Bande dessin&eacute;e ?</h1></header>
		<p class="soustitre">Crit&egrave;res de recherche</p>
		<form action="search.php" method="get">
		<label for="auteur">Auteur<input placeholder="Auteur" type="text" name="auteur" id="auteur" onchange="MemoireSite.set('auteur',this.value);"></label>
		<label for="nationalite">Nationalit&eacute;<input placeholder="Nationalit&eacute;" type="text" name="nationalite" id="nationalite" onchange="MemoireSite.set('nationalite',this.value);"></label>
		<label for="Titre">Titre<input placeholder="Titre" required type="text" name="titre" id="titre" onchange="MemoireSite.set('titre',this.value);"></label>
		<br/>
		<label for="annee">Ann&eacute;e<input type="range" min="1800" max="<?php echo date('Y'); ?>"  onchange="rangeChange(this.value,'an');MemoireSite.set('annee',this.value);" name="annee" id="annee"><span id="an"></span></label>
		<label for="prix">Prix<input type="range" min="0" max="100" name="prix" id="prix" onchange="rangeChange(this.value,'price');MemoireSite.set('prix',this.value);"><span id="price"></span>&euro;</label>
		<label for="dispo">Disponibilit&eacute<input type="checkbox" name="dispo" class="checkbox" id="dispo" onchange="MemoireSite.set('dispo',this.value);"></label>
		<br/>
		<input type="reset" value="R&eacute;initialiser" onclick="rangeChange('','price');rangeChange('','an')" class="submit"><input type="submit" value="Rechercher" class="submit">
		</form>
	</article>
</section>
<?php include('inc/footer.php');?>
</body>
</html>