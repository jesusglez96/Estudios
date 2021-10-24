describe("Testeo clase Jarra", function () {
  let jarra1, jarra2;
  beforeEach(function () {
    jarra1 = new Jarra(10, 4);
    jarra2 = new Jarra(15, 8);
  });
  it("Debería devolver que la jarra más grande es: jarra2", function () {
    expect(Jarra.comparar(jarra1, jarra2)).toBe(jarra2);
  });
});
