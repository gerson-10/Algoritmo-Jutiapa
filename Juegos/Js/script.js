document.getElementById('player').addEventListener("mouseover",sumarPuntos);

puntos = 0;
tiempo = 5;
necesarios = 4;
function sumarPuntos(){
   puntos++;
   document.getElementById("puntos").innerHTML = "Puntos: <b>" + puntos + "/" + necesarios +" meta"+ "  </b>";
   randNum =  Math.round(Math.random()*500);
   randNum2 =  Math.round(Math.random()*500);
   document.getElementById("player").style.marginTop =randNum + "px";
   document.getElementById("player").style.marginLeft =randNum2 + "px";
   if (puntos == 4) {
   	alert("	Que pilas, avancemos ...");
	tiempo = 7;      //tiempo actual
	necesarios = 10; //sumatoria 
   }if(puntos == 10){
	   alert( "wow.. subiste otro nivel");
	   tiempo = 13; //tiempo actual
	   necesarios = 27; //sumatoria
   }if(puntos == 27){
	   alert( "me asombras");
	   tiempo = 18; 
	   necesarios = 50; //sumatoria
   }if(puntos == 50){
	   alert( "on fire....");
	   tiempo = 21;
	   necesarios = 85; //sumatoria
   }if(puntos == 85){
	   alert( "Impresionante");
	   tiempo = 25;
	   necesarios = 125; //sumatoria
   }if(puntos == 125){
	   alert( "No tienes rival");
	   tiempo = 30;
	   necesarios = 160; //sumatoria
   }if(puntos == 160){
	   alert( "Ganaste.....Iniciamos nuevamente?");
	   location.href ="index.html";
   }
}


function restarTiempo() {
	tiempo--;
	document.getElementById("tiempo").innerHTML = "&nbsp;&nbsp;&nbsp;Tiempo: "+tiempo; 
	if (tiempo == 0 ) {
		alert("perdiste, quieres inciar nuevamente?");
		tiempo = 0;
		puntos = 0;
		location.href ="index.html";
	}
}

setInterval(restarTiempo,1000);