describe("Testeo de la función volumenTroncoCono", function () {
  let entradas = [
    [19.6, 9.4, 5.6],
    [20.2, 9.7, 5.7],
    [20.8, 10, 5.8],
  ];
  let salidaEsperadas = [3851.442, 4166.798, 4498.459];

  function testeo(entradaRInf, entradaRSup, entradaAltura, salidaEsparada) {
    it(`Para el radio inferior: ${entradaRInf}, radio superior: ${entradaRSup} y la altura: ${entradaAltura}, debería resultar: ${salidaEsparada}`, function () {
      expect(
        volumenTroncoCono(entradaRInf, entradaRSup, entradaAltura)
      ).toBeCloseTo(salidaEsparada, 3);
    });
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i][0], entradas[i][1], entradas[i][2], salidaEsperadas[i]);
  }
});
