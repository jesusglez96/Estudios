let cuenta1 = {
    cuentaBancaria: 1,
    titular: "Jesus",
    saldo: 0,
    ingresar: function (dinero) {
        this.saldo += dinero;
    },
    retirar: function (dinero) {
        this.saldo -= dinero;
    }
}
let cuenta2 = {
    cuentaBancaria: 2,
    titular: "capiYTHD360XD",
    saldo: 0,
    ingresar: function (dinero) {
        this.saldo += dinero;
    },
    retirar: function (dinero) {
        this.saldo -= dinero;
    }
}
let cuenta3 = {
    cuentaBancaria: 3,
    titular: "marialuisa",
    saldo: 1000000,
    ingresar: function (dinero) {
        this.saldo += dinero;
    },
    retirar: function (dinero) {
        this.saldo -= dinero;
    }
}

let arCuentas = [];
arCuentas.push(cuenta1, cuenta2, cuenta3);
console.log(arCuentas);

const orden = (x, y) => x.saldo - y.saldo;

arCuentas.sort(orden);
console.log(arCuentas);

arCuentas.reverse(orden);
console.log(arCuentas);
