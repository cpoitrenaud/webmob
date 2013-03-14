<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> TP 3 - sur UIU</title>
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="iui.css" rel="stylesheet" type="text/css"/>
<link href="t/default/default-theme.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="../img/favicon.ico" />
<link rel="apple-touch-icon" href="../img/logo-114.png" sizes="114x114" /> <!-- favicon pour mobile-->
<link rel="apple-touch-icon" href="../img/logo-72.png" sizes="72x72" />
<link rel="apple-touch-icon" href="../img/logo-57.png" sizes="57x57" />
<link rel="apple-touch-startup-image" href="../img/splash-touch.png"/> <!-- image d'attente avant l'affichage du site -->
<script type="text/javascript" src="iui.js"></script>
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
myGps.init();
function gpsonload()
{
	
	document.getElementById('contenu').innerHTML=myGps.get();
}

</script>
<script type="text/javascript" src="../css/lib.js"></script>
</head>
<body  onload="gpsonload();">
<div class="toolbar">
	<h1 id="pageTitle"></h1>
	<a id="backButton" class="button" href="#"></a>
</div>
<ul title="myBD.fr" id="home" selected="true">
		<li><a href="#search" title="Rechercher une bd">Rechercher une bd</a></li>
		<li><a href="#last" title="Liste des derni&egrave;res BD">Liste des derni&egrave;res BD</a></li>
		<li><a href="#random" title="Au hasard">Au hasard</a></li>
		<li><a href="#legal" title="Infos L&eacute;gales">Infos L&eacute;gales</a></li>
</ul>
<div title="Une BD au hasard" id="random" class="panel">
<header><h1>Trouver une Bande Dessin&eacute;e au hasard</h1></header>
		<fieldset style="padding:5px;"><span id="contenu"></span></fieldset>
</div>
<div title="La derni&egrave;re BD" id="last" class="panel">
<video width="320" height="240" controls>
			<source type="video/mp4" src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4">
			<source type="video/webm" src="http://clips.vorwaerts-gmbh.de/VfE.webm">
    		<source type="video/ogv" src="http://clips.vorwaerts-gmbh.de/VfE.ogv">
    		<span>Votre navigateur ne peut pas lire cette vid&eacute;o</span>
		</video>
</div>
<form action="#search" method="get"  title="Rechercher une BD" id="search" class="panel">
		<fieldset>
                <div class="row"><label for="auteur">Auteur</label><input placeholder="Auteur" type="text" name="auteur" id="auteur" onchange="MemoireSite.set('auteur',this.value);">
		</div>
                <div class="row"><label for="nationalite">Nationalit&eacute;</label><input placeholder="Nationalit&eacute;" type="text" name="nationalite" id="nationalite" onchange="MemoireSite.set('nationalite',this.value);">
		</div>
                <div class="row"><label for="Titre">Titre</label><input placeholder="Titre" required type="text" name="titre" id="titre" onchange="MemoireSite.set('titre',this.value);">
		</div>
                <div class="row"><label for="annee">Ann&eacute;e</label><br/><input type="range" min="1800" max="<?php echo date('Y'); ?>" style="width:50%;float:left"  onchange="rangeChange(this.value,'an');MemoireSite.set('annee',this.value);" name="annee" id="annee"><span id="an" style="font-size:12px;padding:0;color:#000">&nbsp;</span>
		</div>
                <div class="row"><label for="prix">Prix</label><br/><input type="range" min="0" max="100" name="prix" id="prix" style="width:50%;float:left" onchange="rangeChange(this.value,'price');MemoireSite.set('prix',this.value);"><div><span id="price" style="font-size:12px;color:#000;padding:0;height:20px">&nbsp;</span><span style="font-size:12px;padding:0;color:#000;height:20px">&euro;</span></div> 
		</div>
                <div class="row"><label for="dispo">Disponibilit&eacute</label><input type="checkbox" name="dispo" class="checkbox" id="dispo" onchange="MemoireSite.set('dispo',this.value);">
		</div></fieldset>
		<input type="reset" value="R&eacute;initialiser" onclick="rangeChange('','price');rangeChange('','an')" class="submit"><input type="submit" value="Rechercher" class="submit">
</form>

<div title="Informations l&eacute;gales" id="legal" class="panel">
<header><h1>Informations l&eacute;gales du site</h1></header>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
		<fieldset><div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div></fieldset>
</div>
</body>
</html>