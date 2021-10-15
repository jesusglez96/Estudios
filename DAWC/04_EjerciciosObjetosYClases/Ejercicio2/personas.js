export default class Persona {
    //Constructor
    constructor(nombre, edad, fumador = false) {
        this._nombre = nombre;
        this._edad = edad;
        this._fumador = fumador;
    }

    //getters
    get nombre() {
        return this._nombre;
    }
    get edad() {
        return this._edad;
    }
    get fumador() {
        return (this._fumador) ? "si" : "no";
    }

    //setters
    set nombre(nombre) {
        this._nombre = nombre;
    }

    set edad(edad) {
        if (0 < edad) this._edad = edad;
        else throw new Error;
    }
    set fumador(fumador) {
        this._fumador = fumador;
    }

    //Métodos de objetos
    toString() {
        return `Nombre: ${this._nombre}, Edad: ${this._edad}, Fumador: ${this.fumador}`;
    }

    cumplirEdad() {
        this._edad++;
    }

    personasConMasEdad(...personas) {
        let arr = [];
        if (personas.length != 0) {
            personas.forEach(persona => {
                if (persona.edad > this.edad) {
                    arr.push(persona);
                }

            });
        }
        return arr;
    }

    //Métodos estáticos
    static NUMERO_CROMOSOMAS() {
        return 46;
    }

    static comparaPersonas(persona1, persona2) {
        return (persona1.edad < persona2.edad) ? persona2 : persona1;
    }
}