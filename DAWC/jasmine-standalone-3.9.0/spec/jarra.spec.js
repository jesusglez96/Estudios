describe("Testeo clase Jarra", function () {
  let jarra1, jarra2;
  beforeEach(function () {
    jarra1 = new Jarra(10, 4);
    jarra2 = new Jarra(15, 8);
  });

  it("Debería devolver que la jarra más grande es: jarra2.", function () {
    expect(Jarra.comparar(jarra1, jarra2)).toBe(jarra2);
  });

  it("Debería devolver que jarra1 tiene 10 litros y jarra2 2 litros.", function () {
    jarra1.llenarDesde(jarra2);
    expect(jarra1._cantidad).toBe(10), expect(jarra2._cantidad).toBe(2);
  });

  it("Debería devolver que jarra2 está vacía.", function () {
    jarra2.vaciar();
    expect(jarra2._cantidad).toBe(0);
  });
});
