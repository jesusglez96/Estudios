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
        } else {
            this.llenar();
            jarra2._cantidad -= this._capacidad - this._cantidad;
        }
    }

    //Método static
    static comparar(jarra1, jarra2) {
        return
    }
}