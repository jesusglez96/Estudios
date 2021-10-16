export default class Jarra {
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
        } else {
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