import Persona from "./personas.js";
export default class Conductor extends Persona {
    //Constructor
    constructor(nombre, edad, puntos = 15, carnets) {
        super(nombre, edad);
        this._puntos = puntos;
        this._carnets = carnets;
    }

    //getter
    get puntos() {
        return this._puntos;
    }
    get carnets() {
        return this._carnets;
    }

    //setter
    set carnets(carnets) {
        this._carnets = carnets;
    }

    sancionPuntos(puntos) {
        if (this._puntos - puntos >= 0) this._puntos -= puntos;
        else throw new Error;
    }
}