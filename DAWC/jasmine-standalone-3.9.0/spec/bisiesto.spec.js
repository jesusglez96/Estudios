describe("Testeo de la función bisiesto", function () {
  let entradas = [400, 1200, 1904, 1905];
  let salidasEsperadas = [true, true, true, false];

  function testeo(entrada, salidaEsperada) {
    let salidaStr = salidaEsperada ? "si" : "no";
    it(
      "debería devolver que  el año " +
        entrada +
        " " +
        salidaStr +
        " es bisiesto",
      function () {
        expect(esBisiesto(entrada)).toEqual(salidaEsperada);
      }
    );
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i], salidasEsperadas[i]);
  }
});
