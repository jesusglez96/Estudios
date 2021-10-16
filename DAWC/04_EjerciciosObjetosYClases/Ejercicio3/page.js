import Jarra from './jarra.js';

let jarra1 = new Jarra(10, 4);
let jarra2 = new Jarra(15, 8);

console.log(jarra1);
console.log(jarra2);

console.log(Jarra.comparar(jarra1, jarra2));
jarra1.llenarDesde(jarra2);

console.log("cantidad jarra1: " + jarra1._cantidad);
console.log("cantidad jarra2: " + jarra2._cantidad);

jarra2.vaciar();
console.log("cantidad jarra2: " + jarra2._cantidad);