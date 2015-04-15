// JavaScript Document

//-> Traitement générique des appels asynchrones
function generateurGroupe() {
 var xhr = null;
 
 //-> POST avec données pour formulaire    
 // var item = document.getElementById("ajout").value;
 
 var divGenerateur = document.getElementById("content");
 cardinal = document.getElementById('maxCardGroupe').value;
 file = document.getElementById('userfile').value;
 donnees = "maxCardGroupe="+cardinal+"&file="+file;
 
 //-> Création de l'objet XHR
 if (window.XMLHttpRequest) { xhr = new XMLHttpRequest(); } else {
  if (window.ActiveXObject) { 
   try {
    xhr = new ActiveXObject("Msxml2.XMLHTTP");
   } catch (e) {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
     }
  } else { 
     alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
     xhr = false; 
    }
 }
 
//-> Attente des résultats en asynchrone 
xhr.onreadystatechange = function()
{
	if (xhr.readyState==4) {
		if (xhr.status==200) {
			//-> Retour par chargement de la page principale ou erreur
			document.getElementById('content').innerHTML = xhr.responseText;
			divGenerateur.style.visibility = "visible";
   		}
		else
		{
			alert(xhr.status);   
		} 
  	}
}
 
 //-> Gestion de l'envoi
 xhr.open("POST","./reception.php",true);
 xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 xhr.send(donnees);
}
