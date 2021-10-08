//funciones.js
describe("Testeo de la función verCalificacion", function () {
  let entradas = [-1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
  let salidasEsperadas = [
    "Valor incorrecto",
    "Insuficiente",
    "Insuficiente",
    "Insuficiente",
    "Insuficiente",
    "Insuficiente",
    "Suficiente",
    "Bien",
    "Notable",
    "Notable",
    "Sobresaliente",
    "Sobresaliente",
    "Valor incorrecto",
  ];

  function testeo(entrada, salidaEsperada) {
    it(
      "Debería devolver que la nota " +
        entrada +
        " es un valor " +
        salidaEsperada,
      function () {
        expect(verCalificacion(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});

describe("Testeo de la función verCalificacionDecimal", function () {
  let entradas = [-1.5, 0, 3.5, 4.9, 5.6, 6.9, 8.9, 9.1, 10, 11];
  let salidasEsperadas = [
    "No valido",
    "Insuficiente",
    "Insuficiente",
    "Insuficiente",
    "Suficiente",
    "Bien",
    "Notable",
    "Sobresaliente",
    "Sobresaliente",
    "No valido",
  ];

  function testeo(entrada, salidaEsperada) {
    it(
      "Debería devolver que la nota " +
        entrada +
        " es un valor " +
        salidaEsperada,
      function () {
        expect(verCalificacionDecimal(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});

describe("Testeo de la función comprobarEsPar", function () {
  let entradas = [1, 2, 5, 8, 9, 12, 16];
  let salidasEsperadas = [false, true, false, true, false, true, true];

  function testeo(entrada, salidaEsperada) {
    let salidaStr = salidaEsperada ? "par" : "impar";
    it(
      "Debería devolver que el número " + entrada + " es un valor " + salidaStr,
      function () {
        expect(comprobarEsPar(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});

describe("Testeo de la función europea2talla", function () {
  let entradas = [
    "XS",
    "xs",
    "S",
    "s",
    "M",
    "m",
    "L",
    "l",
    "XL",
    "xl",
    "XXL",
    "xxl",
  ];
  let salidasEsperadas = [
    "Pequeña",
    "Pequeña",
    "Pequeña",
    "Pequeña",
    "Mediana",
    "Mediana",
    "Grande",
    "Grande",
    "Grande",
    "Grande",
    "Grande",
    "Grande",
  ];

  function testeo(entrada, salidaEsperada) {
    it(
      "Debería devolver que la talla " + entrada + " es " + salidaEsperada,
      function () {
        expect(europea2talla(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});

describe("Testeo de la función hexa2decimal", function () {
  let entradas = ["14", "36", "F", "A0", "3ED", "64"];
  let salidasEsperadas = [20, 54, 15, 160, 1005, 100];

  function testeo(entrada, salidaEsperada) {
    it(
      "Debería devolver que el número hexadecimal " +
        entrada +
        " es en base decimal " +
        salidaEsperada,
      function () {
        expect(hexa2decimal(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});
