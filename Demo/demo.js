alert('Hola fuera del html');
console.log('Mensaje en consola');
var a=4;
let variable=5;

console.log(a);

let persona = {
	nombre: 'Juan',
	apellido:'Perez'
}
console.log(persona);
function operar(){
	let dato = document.getElementById('valor1').value;
	alert(dato);
	console.log(dato);
	document.getElementById('valor1').style.color = "red";
	document.getElementById('boton').style.bottom = "100px";

}
function cambioColor(){
}

function escribeFecha(){
 	var meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
 	var fecha = new Date();
 	console.log(fecha);
 	var dia = fecha.getDate();
 	var mesNumero = fecha.getMonth();
 	var mes = meses[mesNumero];
 	var ano = fecha.getFullYear();
 	document.write("Hoy es " + dia + " de " + mes + " de " + ano);
 }
