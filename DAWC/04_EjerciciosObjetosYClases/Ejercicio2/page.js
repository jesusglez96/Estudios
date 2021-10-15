import Conductor from "./conductor.js";
import Persona from "./personas.js";

let con = new Conductor("pepe", 13);
console.log(con);

console.log(con.edad);

console.log(con.puntos);

console.log(con.toString());

let carnets = "B1, A2";

con.carnets = carnets;

console.log(con.carnets);

try {
    con.sancionPuntos(10);
} catch (Error) {
    console.warn("Imposible");
}

console.log(con.puntos);

try {
    con.sancionPuntos(10);
} catch (Error) {
    console.warn("Imposible");
}

console.log(con.puntos);

console.log(Persona.NUMERO_CROMOSOMAS());

let per1 = new Conductor("jesule", 10);
let per2 = new Conductor("antule", 20);
let per3 = new Conductor("manule", 30);

console.log(per1.personasConMasEdad(per2, per3));

console.log(Persona.comparaPersonas(per1, per3));
