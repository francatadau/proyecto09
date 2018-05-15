//Definimos Variables
var palabra0=[];
var condicion=true;
var intentosUsuario=0;
var aciertos=0;
var boton=document.getElementById("boton");
var palabrasjuegos = ["juego","sala","silla","gato","ordenador"];
aleatoria = Math.floor(Math.random()*(palabrasjuegos.length));
adivinar = palabrasjuegos[aleatoria];

//Para saber que palabra ha salido
console.log(adivinar);

// Estructuras de repeticion
for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]='_';
}

// Funcion de Comprobacion de letra introducida
function ComprobarCaracter() {
    var acertado=false;
    var palabraIntroducida="";
    palabraIntroducida = letraUsuario.value;
      if (isNaN(palabraIntroducida)) {
        for (var i = 0; i < adivinar.length; i++) {
          if (adivinar.charAt(i)==palabraIntroducida) {
            palabra0[i]=adivinar.charAt(i);
            acertado=true;
            aciertos++;
        }
        caja2.value=palabra0;
        if (aciertos>=adivinar.length) {
              caja2.value="Tu palabra era: "+adivinar
              boton=document.getElementById("boton");
        } else if (intentosUsuario>=5) {
              caja2.value="Has fallado";
              boton=document.getElementById("boton");
        }
            letraUsuario.value="";
        }
        if (acertado==true) {
              caja1.value="Has adivinado la letra";
        } else {
              caja1.value="Has fallado";
              intentosUsuario++;
              caja3.value=caja3.value+palabraIntroducida+"-";
        }
         console.log(palabra0);
         console.log(intentosUsuario);
      }  else {
            caja1.value="Una letra por favor";

      }
  }
