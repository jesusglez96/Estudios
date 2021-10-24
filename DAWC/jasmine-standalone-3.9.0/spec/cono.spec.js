describe("Testeo de la función volumenCono", function () {
  let entradas = [
    [3, 7],
    [5, 12],
    [8.5, 19.2],
    [4.5, 14.1],
  ];
  let salidasEsperadas = [65.97, 314.16, 1452.67, 299.0];

  function testeo(entradaRadio, entradaAltura, salidaEsperada) {
    it("Debería devolver que el volumen es " + salidaEsperada, function () {
      expect(volumenCono(entradaRadio, entradaAltura)).toBeCloseTo(
        salidaEsperada
      );
    });
  }

  for (let i = 0; i < entradas.length; i++) {
    testeo(entradas[i][0], entradas[i][1], salidasEsperadas[i]);
  }
});
