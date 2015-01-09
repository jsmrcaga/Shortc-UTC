<html>
<head>
	<title>Matching des emplois du temps</title>
	<style type="text/css">
		@import url('styleMatch.css');
	</style>
</head>
<body>
<div id="all">
	<?php
	
	if (isset($_GET["j_login"])) {
		
		$gotJ=urldecode($_GET["j_login"]);
		$gotJ=str_replace("\\", "", $gotJ);
		// print_r($gotJ);

		
			$loginsT=json_decode($gotJ);
			// print_r($loginsT);
			// echo "</br>";

			// print $loginsT->logins[0]->log;
			// print count($loginsT->logins);
			$logCount=count($loginsT->logins);
			//print $logCount."</br>";
			for ($i=0; $i <$logCount ; $i++) {
				//echo $i.' and count '.$logCount.' and login '.$loginsT->logins[$i]->log.'</br>';
								
				echo '<div class="edtDiv">';
				//print('<object data="http://wwwetu.utc.fr/sme/edt_grille.php?uid='.($loginsT->logins[$i]->log).'"/>');
				echo '<iframe class="edtDiv" src="http://wwwetu.utc.fr/sme/edt_grille.php?uid='.($loginsT->logins[$i]->log).'"></iframe>';
				echo '</div></br>';
				
			}

		
	}else{
		echo "Problem reading logins, did you specify them?";
	}


	// $json = '{poulet:[{"foo-bar": 12345},{"foo-bar":987654}]}';
	// print_r ($json);
	// $obj = json_decode($json);
	// print_r($obj);
	// print $obj->{'poulet'}[1]; // 12345

	?>
</div>
</body>
</html>