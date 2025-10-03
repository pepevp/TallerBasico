function milog(textolog){
    console.log(textolog);
}

function saludar(){
    alert("Hola");
}

function saludar(nombre){
    alert("Hola " + nombre);
}

function saludar(nombre, apellido1, apellido2){
    alert("Hola " + nombre+ " " + apellido1 + " " + apellido2);
}

function saludarObjeto(MiObjeto){
    alert(`Hola  + ${MiObjeto.nombre} +  tienes  + ${MiObjeto.edad} + años`);
}