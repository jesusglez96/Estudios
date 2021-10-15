export default class Persona {
    //Constructor
    constructor(nombre, edad, fumador = false) {
        this._nombre = nombre;
        this._edad = edad;
        this._fumador = fumador;
    }

    //getters
    get getNombre() {
        return this._nombre;
    }
    get getEdad() {
        return this._edad;
    }
    get getFumador() {
        return (this._fumador) ? "si" : "no";
    }

    //setters
    set setNombre(nombre) {
        this._nombre = nombre;
    }

    set setEdad(edad) {
        try {
            if (0 < edad) this._edad = edad;
            else throw new error;
        } catch (error) {
            alert("Edad introducida erronea");
        };
    }
    set setFumador(fumador) {
        this._fumador = fumador;
    }

    //Métodos de objetos
    toString() {
        return `Nombre: ${this._nombre}, Edad: ${this._edad}, Fumador: ${this.getFumador}`;
    }

    cumplirEdad() {
        this._edad++;
    }

    personasConMasEdad(...personas) {
        let arr = [];
        if (personas.length != 0) {
            personas.forEach(persona => {
                if (persona.getEdad > this.edad) {
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
        return (persona1.getEdad < persona2.getEdad) ? persona2 : persona1;
    }
}