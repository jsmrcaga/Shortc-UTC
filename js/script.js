

// ******************************************
// CODE SOURCE "SOURCE" ECRIT PAR JO COLINA

//  MERCI DE NE PAS ELIMINER CE COMMENTAIRE

// Original source code and idea, prototype and design
// property of Jo Colina
// OPEN SOURCE 
// ******************************************


$(window).load(function(){
	document.getElementById("commandBox").focus();
});


function hide(what){
what=document.getElementById(what);
what.style.display='none';
}

function show(what){
what=document.getElementById(what);
what.style.display='block';
}

function showHide(what){
what=document.getElementById(what);
	if(what.style.display=='block'){
		what.style.display='none';
	}else{
		what.style.display='block';
	}
}

function showHideFocus(what, wFocus){
what=document.getElementById(what);
	if(what.style.display=='block'){
		what.style.display='none';
		document.getElementById(wFocus).value="";
	}else{
		what.style.display='block';
		document.getElementById(wFocus).focus();
	}
}


function apply(where,what1, what2){
where=document.getElementById(where);


	if (where.src==what1){
		alert("|"+what2+"|");
		where.src=what2;
	}else{
		where.src=what1;
	}
	
}

function goTo(where){
	frame=document.getElementById('contentFrame');
	frame.src=where;
}

function closeWindow(){
window.close();
}

function changeTitle(what){
	document.title = "ENT v2.0 - " + what;

}






//tomorrow (10-06-2014): add def -lang <word> to dictionary
//change obligatory parameters to dash


//wolfram alpha 

var dictMots=[];

function tablerize(){
	dictioGral=JSON.stringify(jsonDict);
	dictioGral=JSON.parse(dictioGral);

	for (i=0; i<dictioGral.dico.length; i++){
		dictMots.push(dictioGral.dico[i].mot);
	}
	// alert(dictMots.toString());	
}






function commandsCarousel(){
	while(document.getElementById("commandBox").hasFocus){
		setTimeout(function(){
		rand = Math.random()*dictMots.length +1;
		alert(rand);
		document.getElementById("commandBox").setAttribute('placeholder',dictMots[rand]);
		},1000);
	}	
}

function launchAnnyang () {
	var command = {

		'*term': function(term){
			executeCommand(term);
		},

	};
	annyang.setLanguage('fr-FR');
	annyang.addCommands(command);
	annyang.start();

}


function wolframAlphaSearch (what) {
	var args=arguments;
	var search="";
	for (i=0; i<args.length; i++){
		search+=" "+args[i];
	}
	search=search.substring(1, search.length);
	search=encodeURI(search);
	search=search.replace("+", "%2B")
	// alert(search);
	var searchL="http://www.wolframalpha.com/input/?i="+search;
	window.open(searchL);
}


function matchReunion () {
	var args=arguments;
	var search="";
	//search doit ressembler a search={logins:[{"log":"8c"},{"log":"8c"},{"log":"8c"},{"log":"8c"}]}
	for (i=0;i<args.length; i++){
		search+="{\"log\":\""+args[i]+"\"},";
	}
	search="{\"logins\":["+search.substring(0, search.length-1)+"]}";
	//alert(search);
	search=encodeURI(search);
	goTo("./pages/match.php?j_login="+search);
	
}



function searchYoutube (what) {
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    //https://www.youtube.com/results?search_query=someInaugSearch
    search="https://www.youtube.com/results?search_query="+search;
	window.open(search);
}


function mailToFun (who) {
	window.open("mailto:"+who+"@utc.fr");
}

function emploiTemps (login) {
	var args=arguments;
	
	if (args.length==0){
		goTo('http://wwwetu.utc.fr/sme/edt.php');
	}else{
		var search=args[0];
	
		goTo("http://wwwetu.utc.fr/sme/edt_grille.php?uid="+search);
	}
}


function googleImage (what) {
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    search="https://www.google.com/search?site=&tbm=isch&q="+search;
	window.open(search);
}


function googleLucky(what){
	
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    
	search="http://www.google.com/search?q="+search+"&btnI";
	window.open(search);
}

function searchWikipedia (lang) {
// http://en.wikipedia.org/wiki/Special:Search?search=sfgsrthgfbxdf&go=Go
	
	//to oblige lang as argument
	//var args = Array.prototype.slice.call(arguments, 1);
	var args=arguments;
	var search="";
	
    var langL;
    if(args[0].substring(0,1)=="-"){

	    if(lang=='-fr'||lang=='-fran'||lang=='-fra'){
	    	langL="fr";
	    }else if(lang=='-en'||lang=='-engl'||lang=='-ang'){
	    	langL='en';
	    }else if(lang=='-es'||lang=='-esp'){
	    	langL="es";
	    }  

	    for(var i=1; i<args.length; i++){
	        search+="+"+args[i];
	    }
	    search=search.substring(1,search.length);//delete first + sign
	
	}else{
		langL="fr";

	    for(var i=0; i<args.length; i++){
	        search+="+"+args[i];
	    }
	    search=search.substring(1,search.length);//delete first + sign

	}

	search="http://"+langL+".wikipedia.org/wiki/Special:Search?search="+search+"&go=Go";
	window.open(search);
}


function loginRetrieve (lName, fName) {
	// alert("lastName: "+lName+"-firstName: "+fName);
	document.getElementById('commandBox').value=loginUTC(lName,fName);
	// show('commandBack');
}


function search_gNews (what) {
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    
	search="https://www.google.com/search?&tbm=nws&q="+search+"&gs_l=news";
	window.open(search);
}


function searchMap (how) {
	var args = Array.prototype.slice.call(arguments, 1);
	
	var search="";

	if(how=="dir" || how=="routes" || how=="directions" || how=="itin" || how=="itineraire"){
		how="dir";
	}else if(how=="lieu" || how=="l" || how=="v" || how=="ville" || how=="endroit"){
		how="search";
	}else{
		how="search";
	}
	//https://www.google.com/maps/search/Vannes/
	//https://www.google.com/maps/dir/Bordeaux,+France/Compiègne,+France/
	var searchLink="https://www.google.com/maps/"+how+"/";
	if(args.length==1){
		search=args[0];
	}else if (args.length==2){
		search=args[0]+"/"+args[1];
		
	}
	searchLink+=search;
	window.open(searchLink);
}


function searchPinterest () {
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    
	search="http://www.pinterest.com/search/pins/?q="+search;
	window.open(search);
}

function searchTwitter () {
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
    search=search.replace("#", "%23");
	search="https://twitter.com/search?q="+search+"&src=typd";
	window.open(search);
}

function searchFacebook(how) {
	var searchLink="";
	var args=arguments;
	var search="";
	var howS="";
	if(args[0].substring(0,1)=="-"){

		if(how=="-utilisateurs" || how=="-users" || how=="-util" || how=="-utilisateur" || how=="-user" || how=="-u"){
			howS="users-named";
		}else if(how=="-groups" || how=="-groupes" || how=="-g" || how=="-group" || how=="-groupe"){
			howS="groups-named";
		}else{
			howS="users-named";
		}

		for(var i=1; i<args.length; i++){
	        search+="+"+args[i];
	    }
	}else{
		howS="users-named";

		for(var i=0; i<args.length; i++){
	      
	        search+="+"+args[i];
	    }

    }

    search=search.substring(1, search.length);
	
	
	searchLink="https://www.facebook.com/search/str/"+search+"/"+howS;
	
	window.open(searchLink);
}


function searchGoogle(){
	var args = arguments;
	var search="";
    for(var i=0; i<args.length; i++){
        search+="+"+args[i];
    }
    search=search.substring(1,search.length);
 
	window.open('https://www.google.com/?gws_rd=ssl#q='+search);
}


function searchWiki (search) {
	if(search!=null){
		// window.open("http://assos.utc.fr/wiki/index.php?search="+search+"&go=Lire&title=Sp%C3%A9cial%3ARecherche");
		goTo("http://assos.utc.fr/wiki/index.php?search="+search+"&go=Lire&title=Sp%C3%A9cial%3ARecherche");
	}else{
		goTo('http://assos.utc.fr/wiki/');
	}
}




function httpGet(url){
	var xmlHttp= new XMLHttpRequest();
	xmlHttp.open("GET",url, false);
	xmlHttp.send(null);
	console.log("accessed httpGet and about to return value");
	return xmlHttp.responseText;
}



function callBitLy(url){
	// alert('entered callBitLy');
	//Replace for file reading
	if(url.substring(0,7)!="http://" && url.substring(0,8)!="https://"){
		
		url="http://"+url;
		
	}
	oAuthToken="3f0e0452947a039ea129a28ebd6854429c943167";
	var bitLyURL="https://api-ssl.bitly.com/v3/shorten?access_token="+oAuthToken+"&longUrl="+url;
	// alert(bitLyURL);

	var result= httpGet(bitLyURL);
	
	var parsedResult= JSON.parse(result);
	// alert(parsedResult.data.url);
	document.getElementById('commandBox').value=parsedResult.data.url;
	// show('commandBack');
	// return parsedResult.data.url;
}

var commandsUsed=[];
var currentCommand;

function printCommands () {
	alert(commandsUsed.toString());
}





function goUpCommands () {
	document.getElementById("commandBox").value=commandsUsed[currentCommand-1];
	currentCommand-=1;
	alert("Up");
}
function goDownCommands () {
	document.getElementById("commandBox").value=commandsUsed[currentCommand+1];
	currentCommand+=1;
	alert("Down");
}




//saves used commands to be able to fetch them later

//most IMPORTANT function for the command line
//works perfectly with eval, although not recommended
function executeCommand(command){
	//parse the dictionary
	dict=JSON.stringify(jsonDict);
	dict=JSON.parse(dict);

	var found=0;
	command=command.toLowerCase();

	var params= [];
	var j=0;
	//subtring(x,y): x start character, y last character not inclusive
	commandsUsed.push(command);
	currentCommand=commandsUsed.length-1;
	for(i=0; i<=command.length; i++){
		if(command.substring(i,i+1)==" " || i==command.length){
			params.push(command.substring(j,i));
			j=i+1;
		}

	}
	// alert("|"+params.toString()+"|");
	command=params[0]; //give the first word to command
	params.splice(0,1); //delete first word from params array
	// alert("|"+params.toString()+"|");
	/*// alert(dict.dico.length);*/
	var action;

	for(i=0; i<dict.dico.length; i++){
		if(command==dict.dico[i].mot){
			action=dict.dico[i].action;
			document.getElementById('commandBox').value="";
			// hide('commandBack');
			found=1;
			j=i;
			break;
		}
	}
	if(found==0){
		// alert("Commande non trouvee!");
		// document.getElementById('commandBox').value="";
		//window.open('https://www.google.com/?gws_rd=ssl#q='+document.getElementById('commandBox').value);

	}else{
	//met les parametres dans la fonction, mais l'utilisateur doit mettre les quotes
	insertParams="";

		if(dict.dico[j].nParam!=null && params.length!=0){
		insertParams="(";
		for(i=0; i<params.length;i++){
			var currParam=params[i].replace("'", "\\'");
			insertParams+="'"+currParam+"'"+",";
		}
		insertParams=insertParams.substring(0,insertParams.length-1)+")";
		// alert(insertParams);
	}
	//action=action+"("+params.toString()+")"; 
	action+=insertParams;
	
	if (action.substring(action.length-1, action.length)!=')') {
		// alert("|"+action.substring(action.length-1, action.length)+"|");
		action+="()";
	}
	// action=action.replace("'", "\\'");
	// alert(action);
	var currentTime = new Date().getTime();
	console.log(currentTime + "- Action requested: "+action);
	eval(action); //execute the function
	}

}

