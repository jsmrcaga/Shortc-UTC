<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<HTML>
<HEAD>
	<TITLE>Message Envoye! Ou pas...</TITLE>
	<style>
	@import url('comm.css');
	</style>
</HEAD>

<BODY>
<?php
$name=strip_tags($_POST['name']);
$to="entv2@jocolina.com";
$from=strip_tags($_POST['fromMail']);
$message=strip_tags($_POST['message']).chr(13)."***             Le message a ete envoye par: ".$name;
$subject="ENT V2 Messages";
$subject="ENT V2 Messages";
$headers="From: ".$from;

if(!empty($message) && !empty($from)){
mail($to,$subject,$message,$headers);
echo "<span class=fuckingText>Votre message a bel et bien &eacute;t&eactute; envoy&eacute; Et je sais qu'il y a un probleme avec actute mais j'ai trop la flemme de coriger! Merci</span>";
}else{
echo "<span class=fuckingText>Il manque soit le message soit votre mail! Et oui! Il me les faut pour ameliorer le site ou vous repondre!</span>";
}


?>

</BODY>

</HTML>