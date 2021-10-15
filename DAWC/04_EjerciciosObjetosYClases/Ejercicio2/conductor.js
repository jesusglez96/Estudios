import Persona from "./personas.js";
export default class Conductor extends Persona {
    //Constructor
    constructor(nombre, edad, fumador = false, puntos = 15, ...carnets) {
        super(nombre, edad, fumador);
        this._puntos = puntos;
        this._carnets;
        if (carnets.length != 0) {
            carnets.forEach(carnet => {
                this._carnets += `${carnet}, `;
            });
        }
    }

    //getter
    get getPuntos() {
        return this._puntos;
    }
    get getCarnets() {
        return this._carnets;
    }

    //setter
    set setCarnets(carnet) {
        this._carnets += `${carnet}, `;
    }

    sancionPuntos(puntos) {
        try {
            if (this._puntos - puntos >= 0) this._puntos -= puntos;
            else throw new error;
        } catch (error) {
            alert("No puede quitar tantos puntos.");
        }
    }
}