function mayus(e) {
  e.value = e.value.toUpperCase();
}

function soloLetras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz.";
  especiales = "8-37-39-46";

  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}


function soloNumeros(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key);
  letras = " 1,2,3,4,5,6,7,8,9,0";
  especiales = "8-37-39-46";

  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}


function curp2date() {
  var miCurp =document.getElementById('curp').value;
  var m = miCurp.match( /^\w{4}(\w{2})(\w{2})(\w{2})/
    );


  var anyo = parseInt(m[1],10)+1900;
  if( anyo < 1950 ) anyo += 100;
  var mes = parseInt(m[2], 10)-1;
  var dia = parseInt(m[3], 10);

  var fech = new Date( anyo, mes, dia );
  document.getElementById("fechaNacimiento").value = fech;
}


Date.prototype.toString = function() { 
  var anyo = this.getFullYear(); 
  var mes = this.getMonth()+1; 
  if( mes<=9 ) mes = "0"+mes; 
  var dia = this.getDate(); 
  if( dia<=9 ) dia = "0"+dia; 
  return dia+"/"+mes+"/"+anyo;  
}  


function validarFecha(){

  var fecha =document.getElementById('fecha').value;
  if(fecha=="")
  {

  } else {

    if (!moment(fecha).isValid()) {
      document.getElementById("errorFecha").innerHTML = "Fecha Invalida";
      document.getElementById('submit').disabled=true;

    }  else {
      document.getElementById("errorFecha").innerHTML = "";
      document.getElementById('submit').disabled=false;
    }

  }

}

function validarFecha1(){


  var fecha1 =document.getElementById('fecha1').value;


  if (!moment(fecha1).isValid()) {
    document.getElementById("errorFecha1").innerHTML = "Fecha Invalida";
    document.getElementById('submit').disabled=true;
  } else {
    document.getElementById("errorFecha1").innerHTML = "";
    document.getElementById('submit').disabled=false;
  }

}


///VALIDAR URL
function URL(path,arg=''){
  var url =window.location.href;
  if(url.includes("public/")){
    route=url.replace(url.substring(url.indexOf("public")+6,url.length),'/'+path+((arg!='')?('/'+arg):''));
        //alert(route);
      }else{
        //alert(window.location.pathname);
        
        /*FORM1*/
        route=url.replace(window.location.pathname,'/'+path+((arg!='')?('/'+arg):''));
        /*FIN FORM1*/

        /*FORM2*/
        /*var routi = "prot//hostport/patharg"

        route = routi.replace("prot",window.location.protocol).replace("host",window.location.hostname)
        .replace("port",(window.location.port!='')?(':'+window.location.port):'').replace("path",path).replace("arg",((arg!='')?('/'+arg):''));*/
        /*FIN FORM2*/

      }

      return route;

    }




