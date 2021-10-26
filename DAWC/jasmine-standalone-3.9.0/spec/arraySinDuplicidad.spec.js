describe("Prueba de la función arraySinDuplicidad.", function () {
  let arrEntrada = [
    4, 0, 4, 7, 7, 5, 8, 1, 8, 8, 0, 2, 3, 1, 2, 5, 7, 3, 2, 5, 1,
  ];
  let arrSalida = [0, 1, 2, 3, 4, 5, 7, 8];

  it("Deberia devolver un array ordenado y sin duplicidades", function () {
    expect(arraySinDuplicidad(arrEntrada)).toEqual(arrSalida);
  });
});
