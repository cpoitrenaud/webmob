<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> TP 4 - sur UIU</title>
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" /> 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="http://jquery-ui-map.googlecode.com/svn/trunk/ui/min/jquery.ui.map.full.min.js"></script> 
<link rel="stylesheet" href="themes/test.css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<link rel="apple-touch-icon" href="../img/logo-114.png" sizes="114x114" /> <!-- favicon pour mobile-->
<link rel="apple-touch-icon" href="../img/logo-72.png" sizes="72x72" />
<link rel="apple-touch-icon" href="../img/logo-57.png" sizes="57x57" />
<link rel="apple-touch-startup-image" href="../img/splash-touch.png"/> <!-- image d'attente avant l'affichage du site -->
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
<script lang="javascript" type="text/javascript">
            function displayGeo() {
                document.getElementById("contenu").innerHTML = myGps.get(); /* recupère les infos de contenu*/
                myGps.update(function(position) { /* appel lors de la reception des coorodnnées gps*/
                	geoposString = ''+position.coords.latitude+','+position.coords.longitude;
                    $('#geoMap').gmap({'center':geoposString,'zoom':15}).bind('init', function(ev, map) { /* gmap plugin jquery mobile pour afficher la carte*/
                        $('#geoMap').gmap('addMarker', {'position': geoposString}).click(function() {/*addmarker affiche le point d'encrage et click affiche la fenetre de detail quand on clique sur le marker*/
                            $('#geoMap').gmap('openInfoWindow', {'content': 'Votre position !!!<br/>'+document.getElementById("geolocBox").innerHTML}, this);
                        });
                    });
                })
            }
            

            $(function() { /* quand le document est charger... remplace le onload dans le body*/
                myGps.init()
                displayGeo();
                gpsonload();
            })
        </script>
<script type="text/javascript" src="../css/lib.js"></script>
</head>
<body>

<div id="home" data-role="page">
	<div data-role="header" data-theme="b">
		<h1>MyBD.fr</h1>
	</div>
	<div data-role="content">
		<ul data-role="listview" data-theme="b">
			<li><a href="#search" title="Rechercher une bd">Rechercher une bd</a></li>
			<li><a href="#last" title="Liste des derni&egrave;res BD">Liste des derni&egrave;res BD</a></li>
			<li><a href="#random" title="Au hasard">Au hasard</a></li>
			<li><a href="#legal" title="Infos L&eacute;gales">Infos L&eacute;gales</a></li>
		</ul>
	</div>
	<div data-role="footer"data-theme="b">
		
	</div>
</div>

<div title="Une BD au hasard" id="random" data-role="page"  data-add-back-btn="true">
	<div data-role="header"data-theme="c">
		<h1>Trouver une Bande Dessin&eacute;e au hasard</h1>
		<a href="#home" data-icon="home" data-iconpos="notext" class="ui-btn-right">&nbsp;</a>
	</div>
	<div data-role="content">
		<span id="contenu"></span>
		<div id="geoMap" class="map rounded" style="width=100%;height:400px;">
		</div>
	</div>
	<div data-role="footer" data-theme="c">
		<div data-role="navbar" data-type="horizontal"><ul>
			<li><a href="#search" title="Rechercher une bd">Rechercher une bd</a></li>
			<li><a href="#last" title="Liste des derni&egrave;res BD">Liste des derni&egrave;res BD</a></li>
			<li><a href="#random" title="Au hasard">Au hasard</a></li>
			<li><a href="#legal" title="Infos L&eacute;gales">Infos L&eacute;gales</a></li>
		</ul></div>
	</div>
</div>
<div title="La derni&egrave;re BD" id="last" data-role="page"  data-add-back-btn="true">
	<div data-role="header">
		<h1>La derni&egrave;re BD</h1>
		<a href="#home" data-icon="home" data-iconpos="notext" class="ui-btn-right">&nbsp;</a>
	</div>
	<div data-role="content">
		<video width="320" height="240" controls>
			<source type="video/mp4" src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4">
			<source type="video/webm" src="http://clips.vorwaerts-gmbh.de/VfE.webm">
    		<source type="video/ogv" src="http://clips.vorwaerts-gmbh.de/VfE.ogv">
    		<span>Votre navigateur ne peut pas lire cette vid&eacute;o</span>
		</video>
	</div>
	<div data-role="footer" data-theme="a">
		<div data-role="navbar" data-type="horizontal"><ul>
			<li><a href="#search" title="Rechercher une bd">Rechercher une bd</a></li>
			<li><a href="#last" title="Liste des derni&egrave;res BD">Liste des derni&egrave;res BD</a></li>
			<li><a href="#random" title="Au hasard">Au hasard</a></li>
			<li><a href="#legal" title="Infos L&eacute;gales">Infos L&eacute;gales</a></li>
		</ul></div>
	</div>
</div>
<div  title="Rechercher une BD" id="search" data-role="page"  data-add-back-btn="true">
	<div data-role="header" data-theme="c">
		<h1>Rechercher une BD</h1>
		<a href="#home" data-icon="home" data-iconpos="notext" class="ui-btn-right">&nbsp;</a>
	</div>
	<div data-role="content" data-theme="c">
		<form action="#search" method="get">
			<div data-role="fieldcontain">
				<label for="auteur">Auteur</label>
				<input placeholder="Auteur" type="text" name="auteur" id="auteur" onchange="MemoireSite.set('auteur',this.value);">
			</div>
        	<div data-role="fieldcontain">	
        		<label for="nationalite">Nationalit&eacute;</label>
        		<input placeholder="Nationalit&eacute;" type="text" name="nationalite" id="nationalite" onchange="MemoireSite.set('nationalite',this.value);">
        	</div>
        	<div data-role="fieldcontain">
        		<label for="titre">Titre</label>
        		<input placeholder="Titre" required type="text" name="titre" id="titre" onchange="MemoireSite.set('titre',this.value);">
			</div>
        	<div data-role="fieldcontain">
        		<label for="annee">Ann&eacute;e</label>
        		<input type="range" min="1800" max="<?php echo date('Y'); ?>"  name="annee" id="annee" onchange="MemoireSite.set('annee',this.value);">
        	</div>
        	<div data-role="fieldcontain">
				<label for="prix">Prix (&euro;)</label>
				<input type="range" min="0" max="100" name="prix" id="prix"  onchange="MemoireSite.set('prix',this.value);">
			</div>
        	<div data-role="fieldcontain">
				<label for="dispo">Disponibilit&eacute</label>
				<input type="checkbox" name="dispo" class="checkbox" id="dispo" onchange="MemoireSite.set('dispo',this.value);">
			</div>
			
		</form>
	</div>
	<div data-role="footer" data-theme="c" class="ui-bar">
		<a href="javascript:reInit()" data-role="button" data-icon="delete">Re-initialiser</a>
		<a href="javascript:recherche.submit()" data-role="button" data-icon="search" data-theme="a">Rechercher</a>
		
	</div>
</div>
<div title="Informations l&eacute;gales" id="legal" data-role="page"  data-add-back-btn="true">
	<div data-role="header">
		<h1>Informations l&eacute;gales du site</h1>
		<a href="#home" data-icon="home" data-iconpos="notext" class="ui-btn-right">&nbsp;</a>
	</div>
	<div data-role="content">
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
		<div style="padding:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		</div>
	</div>
	<div data-role="footer" data-theme="c">
		<div data-role="navbar" data-type="horizontal"><ul>
			<li><a href="#search" title="Rechercher une bd">Rechercher une bd</a></li>
			<li><a href="#last" title="Liste des derni&egrave;res BD">Liste des derni&egrave;res BD</a></li>
			<li><a href="#random" title="Au hasard">Au hasard</a></li>
			<li><a href="#legal" title="Infos L&eacute;gales">Infos L&eacute;gales</a></li>
		</ul></div>
	</div>
</div>
</body>
</html>