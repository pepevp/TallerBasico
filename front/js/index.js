//Esto es codigo JS


/*
  document.writeln("Hola mundo en JavaScript");

  document.getElementById("mensaje").innerText = "Este es mi mensaje 1"; 
  document.getElementById("mensaje2").innerText = "Este es mi mensaje 2";
  document.getElementById("mensaje3").innerText = "Este es mi mensaje 3";

  const MiFecha = new Date();
  document.getElementById("fecha").innerText = "Hoy es " + MiFecha.toLocaleDateString(); 

  //Ejemplos de alertas con los botones del html
  function saludo() {
    alert("Buenas");
  }

  function adios() {
    alert("Nos vemos");
  }

var num1 = 5;
var num2 = 10;
var resultado = num1 + num2;

  document.getElementById("resultado").innerText = resultado;


if(resultado > 20){
  document.getElementById("resultado").innerText ="El resultado es mayor que 20";
}else{
  document.getElementById("resultado").innerText ="El resultado es menor que 20";
}

*/

let nombre="pepe";
let apellido1="velazquez";
let apellido2="Perez";

const PI=3.14;

console.log(nombre);
console.log(apellido1);
console.log(apellido2);
console.log(PI);

let saludo= "Bienvenido " + nombre;

console.log(saludo);
console.log(`Hola ${apellido1}`);

let edad =45;
let temperatura= -45;
let decimal= 1.55;

let activo=true;
let noActivo=false;


//funcion ya cargada del global.js
milog(activo);
let frutas=["manzana", "pera","melon", "sandia"];
console.log(frutas);

let alumno1={
nombre:"Carlos",
apellido1:"Basulto",
apellido2:"Pardo",
edad:45,
estudios:"Ingeniero informático",

}
console.log(alumno1);

let alumno2={
nombre:"Carlos",
apellido1:"Basulto",
apellido2:"Pardo",
edad:45,
estudios:"Ingeniero informático",

}
console.log(alumno2);

saludar(nombre, apellido1, apellido2);
saludarObjeto(alumno1);

let oPersona=new Persona("Carlos");
oPersona.saludar();


document.writeln("Hola Mundo");


/*
let edad =1;
MiEdad();
function(MiEdad(edad)){}


  for(var i; i < 5; i++){
    console.log(edad = 1);
  }

}

*/