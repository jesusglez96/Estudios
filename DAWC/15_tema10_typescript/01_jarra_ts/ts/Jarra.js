"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class Jarra {
    //Constructor
    constructor(capacidad, cantidad) {
        this._capacidad = capacidad;
        this._cantidad = cantidad;
    }
    //Métodos
    llenar() {
        this._cantidad = this._capacidad;
    }
    vaciar() {
        this._cantidad = 0;
    }
    llenarDesde(jarra2) {
        if (this._capacidad - this._cantidad > jarra2._cantidad) {
            this._cantidad += jarra2._cantidad;
            jarra2.vaciar();
        }
        else {
            jarra2._cantidad -= this._capacidad - this._cantidad;
            this.llenar();
        }
    }
    toString() {
        let cad = `Capacidad: ${this._capacidad}, Cantidad: ${this._cantidad}`;
        return cad;
    }
    //Método static
    static comparar(jarra1, jarra2) {
        const orden = (x, y) => (x._cantidad > y._cantidad) ? x : y;
        return orden(jarra1, jarra2);
    }
}
class JarraLimitada extends Jarra {
    constructor(capacidad, cantidad) {
        if (capacidad > 0 && capacidad <= 10)
            super(capacidad, cantidad);
        else
            throw new Error("Limite de capacidad superado");
    }
    vaciarMitad() {
        this._cantidad /= 2;
    }
}
let jarra1 = new Jarra(10, 4);
let jarra2 = new Jarra(15, 8);
console.log("Jarras");
console.log(jarra1);
console.log(jarra2);
console.log("ToString de Jarra 2");
console.log(jarra2.toString());
console.log("Aplicado el metodo llenardesde");
jarra1.llenarDesde(jarra2);
console.log(jarra1);
console.log(jarra2);
console.log("Comparacion de jarras");
console.log(Jarra.comparar(jarra1, jarra2));
console.log("Jarras de la clase JarrasLimitadas");
let jarra3 = new JarraLimitada(10, 4);
console.log(jarra3);
console.log("Aplicamos a la jarra 3 el metodo vaciarMitad");
jarra3.vaciarMitad();
console.log(jarra3);
console.log("Jarra 4 con capacidad mayor a 10");
let jarra4 = new JarraLimitada(11, 8);
