<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 
******************************************
CODE SOURCE "SOURCE" ECRIT PAR JO COLINA
DESIGN AMELIORE PAR MIKE NKUNKU

 MERCI DE NE PAS ELIMINER CE COMMENTAIRE

Original source code and idea, prototype and design
property of Jo Colina
****************************************** -->
<HTML>
	<HEAD profile="http://www.w3.org/2005/10/profile">
		<link rel="icon" type="image/ico" href="favicon.ico" />
		<meta http-equiv="content-type" content="text/html" ; charset="UTF-8" />
		<TITLE>Shortc'UTC</TITLE>
		<style type="text/css">
		@import url('entStyle.css');
		@import url('pages/help.css');
		@import url("font-awesome-4.3.0/css/font-awesome.css");
		</style>
		<script src="js/annyang.js"></script>
		<script src="js/dico.js"></script>
		<script src="jquery-ui/js/jquery-1.10.2.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/shortcut.js"></script>
		<script src="js/script.js"></script>
		<link href="jquery-ui/css/ui-darkness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<script src="jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="js/loginUTC.js"></script>
		
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
	</HEAD>

<BODY>

<script type="text/javascript">
	// shortcut.add("Shift+C",function() {
	// 	//showHideFocus('commandBack','commandBox');
	// 	document.getElementById("commandBox").focus();
	// });

	//CAS ticket alert, debug purposes
	<?php
		// if(isset($_GET['ticket'])){
		// echo "alert('".$_GET['ticket']."');";
		// }
	?>
	tablerize();
</script>

<div id="blackness">

	<div id="close">
		<table id="closeT">
		<tr><td onclick="hide('blackness');"><img src="images/close.png"></td></tr>
		</table>
	</div>

	<table id="firstTable">
	<tr valign=center><td>
		<div id="shareDiv">
		<table id="shareTable">
		<tr>
		<td><a href="https://www.facebook.com/sharer/sharer.php?u=http://wwwetu.utc.fr/~colinajo/ent/" target="_blank"><img border=0 src="images/f120.png"></a></td>
		<td><a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fabout.twitter.com%2Fresources%2Fbuttons&text=&tw_p=tweetbutton&url=http%3A%2F%2Fwwwetu.utc.fr%2F~colinajo%2Fent%2F" target=_blank><img  border=0 src="images/t120.png"></a></td>
		<td><a href="https://plus.google.com/share?url=http://wwwetu.utc.fr/~colinajo/ent/" target=_blank><img border=0 src="images/g120.png"></a></td>
		</tr>
		</table>
		</div>
	</td></tr>
	</table>

</div>
<!--****************END OF BLACKNESS************-->


<!-- <div id="commandBack">

	<table id="bigTable1">
		<tr>
			<td onclick="hide('commandBack');">
				<table id="inputTable">
					<tr>
						<td> -->
							<!--onkeyup="fuzzyCommand()"-->
							<!-- input id="commandBox" type="text"  onfocus="commandsCarousel();" placeholder="Tapez votre commande"/>
						</td>
					</tr>
				</table> -->
<!-- 				<table id="fuzzyTable">
					<tr>
						<td class="fuzzy1">twitter</td>
					</tr>
					<tr>
						<td class="fuzzy2">facebook</td>
					</tr>
					<tr>
						<td class="fuzzy3">edt</td>
					</tr>
				</table> -->
			<!-- </td>
		</tr>
	</table> -->


	
<!-- </div> -->


<div id="desktop">
	<div id="all">

		<div id="hidden">

		</div>

		<!--************* START OF HEAD BAR **********--> 
		<div id="headBar">
			<table id="menuBar">
				<tr>
				<TD class="alLeft">
				<table class="menuLeftTable">
				<tr>
				<td class="logOutTD" onclick="javascript:window.close();"><i class="fa fa-times" onclick="logOutUTC();"></i></td><td id="optionsTD" onclick="showHide('arrowUpOpt'); showHide('options'); hide('moiMenu'); hide('menuAsso');">Options</td>
				</tr>
				</table>
				</TD>
				<TD class="alCenter"><input type="text" id="commandBox" placeholder="Tapez votre commande ..." /></TD>
				<TD class="alRight">
				<table  class="menuRightTable">
				<tr>
				<td id="miniPhotoTD"><a href="https://cas.utc.fr/cas/login?service=http://wwwetu.utc.fr/~colinajo/UTHub/"><img id="userPhotoMin" src="images/mePhoto.jpg"></a></td><td id="arrowDownTD"><img id="arrowDownImg" src="images/arrowDown.gif"  onclick="showHide('moiMenu'); hide('menuAsso'); hide('arrowUpOpt'); hide('options');"></td>
				</tr>
				</table>
				</TD>
				</tr>
			</table>
			<script type="text/javascript">
			$("#commandBox").autocomplete({
						source: dictMots
			});
			</script>


			<script type="text/javascript">
			document.getElementById('commandBox').onkeypress = function(e){
			    if (!e) e = window.event;
			    var keyCode = e.keyCode || e.which;

			    if (keyCode == '13'){
					executeCommand(document.getElementById('commandBox').value);
				      return false;
			    // }else if(keyCode=='38'){
			    //    	goUpCommands();
			    // 	return false;
			    // }else if(keyCode=='40'){
			    // 	goDownCommands();
			    // 	return false;
			    }
			  }


			</script>

		</div>
		<!--************* END OF HEAD BAR **********--> 
		<div id="arrowUpOpt">
			<table cellspacing=0>
			<tr><td><img src="images/arrowUp.png"></td></tr>
			</table>
		</div>

		<div id="options">
			<table id="menuOpt" cellspacing=2>
				<tr><td class="optionsTD" align=center onclick="goTo('comm.html'); hide('options'); hide('arrowUpOpt');">Commentaire</td></tr>
				<tr><td class="optionsTD" align=center onclick="show('blackness'); hide('options'); hide('arrowUpOpt');">Partager</td></tr>
				<tr><td class="optionsTD" align=center>About</td></tr>
			</table>
		</div>



		<!-- PUT ALL MENUS ON COMMENT -->

		<!--************START OF MINI MENU (ASSOS) ***********-->

		<div id="menuAsso">
			<table id="menuT2" cellspacing=12>
			
				<tr>
				<td class="iconTd uvweb"><img class="iconImg" title="UV Web" src="images/icones/void.png" onclick="goTo('https://assos.utc.fr/uvweb/');  hide('moiMenu'); hide('menuAsso');"></td>
				<td class="iconTd trocUT"><img class="iconImg" title="Troc UTC V2" src="images/icones/void.png" onclick="goTo('http://assos.utc.fr/trocutc/v2/');  hide('moiMenu'); hide('menuAsso');"></td>
				</tr>

				<tr>
				<td class="iconTd payUTC"><img class="iconImg" title="Pay'UTC" src="images/icones/void.png" onclick="goTo('https://assos.utc.fr/payutc/');  hide('moiMenu');  hide('menuAsso');"></td>
				<td class="iconTd lePolar"><img class="iconImg" title="Le Polar" src="images/icones/void.png" onclick="goTo('https://assos.utc.fr/polar/news/index');  hide('moiMenu');  hide('menuAsso');"></td>
				</tr>
			</table>

		</div>


		<!--************END OF MINI MENU (ASSOS) ***********-->

		<!--******** START OF GENERAL MENU ***********-->

		<div id="moiMenu">
			<table id="menuT" cellspacing=10>
				<tr><td colspan="4" class="iconTitle">G&eacute;n&eacute;ralit&eacute;s</td></tr>
				<tr>
					<td class="iconTd mail"><img class="iconImg" title="Mail" src="images/icones/void.png" onclick="goTo('https://webmail.utc.fr'); hide('moiMenu'); hide('menuAsso'); changeTitle('Webmail');"></td>
					<td class="iconTd dossier"><img class="iconImg" title="Dossier" src="images/icones/void.png" onclick="goTo('https://demeter.utc.fr/pls/portal30/ETUDIANTS.CONSULT_DODDIER_ETU_ETU_DYN.show');  hide('moiMenu'); hide('menuAsso'); changeTitle('Dossier Etudiant');"></td>
					<td class="iconTd empTemps"><img class="iconImg" title="Emploi du temps" src="images/icones/void.png" onclick="goTo('http://wwwetu.utc.fr/sme/edt.php');  hide('moiMenu'); hide('menuAsso'); changeTitle('Emploi du Temps');"></td>
					<td class="iconTd moodle"><img class="iconImg" title="Moodle" src="images/icones/void.png" onclick="goTo('http://moodle.utc.fr');  hide('moiMenu'); hide('menuAsso');  changeTitle('Moodle');"></td>
				</tr>

				<tr><td colspan="4" class="iconTitle">Espace Perso</td></tr>
				<tr>
					<td class="iconTd filex"><img class="iconImg" title="FilEx" src="images/icones/void.png" onclick="goTo('https://www.utc.fr/filex/');  hide('moiMenu'); hide('menuAsso'); changeTitle('Filex');"></td>
					<td class="iconTd myDocs"><img class="iconImg" title="Mes Documents" src="images/icones/void.png" onclick="goTo('http://utcenligne.utc.fr/mesdocuments/index.php');  hide('moiMenu'); hide('menuAsso'); changeTitle('Mes Docs (Z)');"></td>
					<td class="iconTd myFav"><img class="iconImg" title="Mes Favoris" src="images/icones/void.png" onclick="goTo('https://webapplis.utc.fr/Ent_favoris_web/');  hide('moiMenu'); hide('menuAsso'); changeTitle('Favoris');"></td>
					<td class="iconTd intranet"><img class="iconImg" title="Intranet" src="images/icones/void.png" onclick="goTo('http://interne.utc.fr/');  hide('moiMenu');  hide('menuAsso'); changeTitle('Intranet');"></td>
				</tr>

				<tr><td colspan="4" class="iconTitle">Services</td></tr>
				<tr>
					<td class="iconTd BDE"><img class="iconImg" title="Sites Etudiants" src="images/icones/void.png" onclick="showHide('menuAsso');"></td>
					<td class="iconTd trombi"><img class="iconImg" title="Trombinoscope" src="images/icones/void.png" onclick="goTo('https://webapplis.utc.fr/Trombinoscope_web/');  hide('moiMenu'); hide('menuAsso');  changeTitle('Trombinoscope');"></td>
					<td class="iconTd accords"><img class="iconImg" title="Accords et Partenariats" src="images/icones/void.png" onclick="goTo('pages/profile.html');  hide('moiMenu'); hide('menuAsso'); changeTitle('Accords & Partenariats');"></td>
					<td class="iconTd cloudUTC"><a href="https://cloud.utc.fr/" target=_blank><img class="iconImg" border=0 title="" src="images/icones/void.png" onclick="goTo('https://cloud.utc.fr/');  hide('moiMenu'); hide('menuAsso');  changeTitle('Cloud UTC');"></a></td>
				</tr>
				
				<tr><td colspan="4" class="iconTitle">Documentaire</td></tr>
				<tr>
					<td class="iconTd assos"><img class="iconImg" title="Portail des Assos" src="images/icones/void.png" onclick="goTo('http://wwwassos.utc.fr/');  hide('moiMenu'); hide('menuAsso'); changeTitle('Portail Assos');"></td>
					<td class="iconTd portDoc"><img class="iconImg" title="Portail Documentaire" src="images/icones/void.png" onclick="goTo('http://bibliotheque.utc.fr/medias/medias.aspx?INSTANCE=EXPLOITATION');  hide('moiMenu'); hide('menuAsso'); changeTitle('Portail Documentaire');"></td>
					<td class="iconTd dsi"><img class="iconImg" title="DSI" src="images/icones/void.png" onclick="goTo('https://www.utc.fr/wiki/index.php/R%C3%A9seau');  hide('moiMenu'); hide('menuAsso'); changeTitle('DSI');"></td>
					<td class="iconTd"><img class="icon" title="Troc UTC V2" src="images/icones/void.png"></td>

				</tr>

			</table>

		</div>


		<!-- //cas link https://cas.utc.fr/cas/login?service=http%3A%2F%2Fwwwetu.utc.fr/~colinajo/ent/pages/profile.html -->

		<iframe id="contentFrame" src="./pages/about.php" frameBorder="0">Votre navigateur ne supporte pas les iFrames, veuillez telecharger IE8-11, Chrome ou Firefox </br> Your browser does not support iFrames, please download IE8-11 Chrome or Firefox</iframe>
		<!-- <div id="contentFrame"><object type="text/html" id="contentObject" data="./pages/about.php" style="overflow:auto;"></object></div> -->
	</div>
</div>

<div id="mobile">
	<div id="container">
	</div>
</div>
<div id="disconnectCAS" title="Déconnexion">
	<table border="0" id="disconnectTable">
		<tr>
			<td><i class="fa fa-exclamation-triangle"></i></td>
			<td id="disconnectMessage">Êtes-vous sûr(e) de vouloir vous déconnecter du CAS UTC ?</td>
		</tr>
	</table>
</div>
<div id="alreadyDisconnected" title="Déconnexion déjà effectuée">
	<div id="alreadyDisconnectedMessage">Votre déconnexion a bien été effectuée auparavant ...</div>
</div>
<?php
	if(isset($_GET['q'])){
		
		$request=str_replace("\n","",$_GET['q']);

		echo "<script type=\"text/javascript\">\n";
		echo "$(window).load(function(){";
			//echo "alert('entered');\n";
			//echo "showHideFocus('commandBack','commandBox');";
			//echo "document.getElementById('commandBox').style.display='block';\n";
			
			echo "document.getElementById('commandBox').value=\"".$request."\";\n";
			
			usleep (1000000);

			echo "var e = $.Event( \"keypress\", { which: 13 } );\n";
			echo "$('#commandBox').trigger(e);\n";
			
			// echo "var e = jQuery.Event(\"keypress\");";
			// echo "e.which = 13;" ;
			// echo "e.keyCode = 13;";
			// echo "$(window).trigger(e);";

		echo"});";
		echo "</script>";
	}
?>

	<script type="text/javascript">
		launchAnnyang();
	</script>

</BODY>
</HTML>

