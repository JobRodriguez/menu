let vector = new Array();
function crear(){
	var datos=document.getElementById("dato").value;

				vector.push(datos);
        document.getElementById('dato').value="";
          document.getElementById("vec").innerHTML ="";                  
        for(var i=0;i<vector.length;i++){
          document.getElementById("vec").innerHTML +=(vector[i]+' ');

        }
}
let matriz=[[],[]];
function crearMatriz(){
  var datos2=document.getElementById("datosm1").value;
  var datos3=document.getElementById("datosm2").value;
  matriz[0].push(datos2);
  matriz[1].push(datos3);

  document.getElementById("mac").innerHTML ="";

    for(var i=0;i<matriz.length;i++){
      document.getElementById("mac").innerHTML +=(matriz[0][i]);
      document.getElementById("mac").innerHTML +=(matriz[1][i]+'<br>');

    }
}

let listass=[];
function listas(){
  var datos4=document.getElementById("datolista").value;

        listass.push(datos4);
          document.getElementById("datoslista").innerHTML ="";                  
        for(var i=0;i<listass.length;i++){
          document.getElementById("datoslista").innerHTML +=(listass[i]+'<br>');

        }
}

var pila=[];
function pilas(){
  var datos5=document.getElementById("datoPila").value;

        pila.push(datos5);
          document.getElementById("datosPila").innerHTML ="";                  
        for(var i=0;i<pila.length;i++){
          document.getElementById("datosPila").innerHTML +=(pila[i]+' ');

        }
}
var cola=[];
function colass(){
  var datos6=document.getElementById("datoCola").value;

        pila.push(datos6);
          document.getElementById("datosCola").innerHTML ="";                  
        for(var i=0;i<cola.length;i++){
          document.getElementById("datosPila").innerHTML +=(cola[i]+' ');

        }
}

function salir() {
	alert("Gracias por participar");
}

function datos(){
  //dat,noControl,nombre
  var control=document.getElementById('noControl').value;
  var name=document.getElementById('nombre').value;

  document.getElementById('dat').innerHTML += ('<br>'+'Nombre: '+name+'<br>');
  document.getElementById('dat').innerHTML += ('Numero de control: '+control+'<br>');

}