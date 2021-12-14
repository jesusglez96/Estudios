function validaCP(cp) {
  const patron = /^\s*([0-4]\d|5[0-2])\d\d\d\s*$/;
  return patron.test(cp);
}
function testValidaCP() {
  let datosIntroducidos = ["41710", "11111111", "111", "53111", "12444", "50"];
  let datosEsperados = [true, false, false, false, true, false];

  for (let i = 0; i < datosIntroducidos.length; i++) {
    console.log(
      `Con el dato ${datosIntroducidos[i]} se espera ${datosEsperados[i]}`
    );
    console.log("dato devuelto " + validaCP(datosIntroducidos[i]));
    console.log("dato esperado " + datosEsperados[i]);
    console.log();
  }
}
testValidaCP();

function extraeCPs(frase) {
  const patron = /\b([0-4]\d|5[0-2])\d\d\d\b/;
  let arrEncontrados = patron.exec(frase);
  return arrEncontrados;
}
function testExtraeCP() {
  let datosIntroducidos = "41710, 11111111, 111, 53111, 12444, 50";
  let datosEsperados = [41710, 12444];
  let arrEncontrados = extraeCPs(datosIntroducidos);
  for (let i = 0; i < arrEncontrados.length; i++) {
    console.log("dato devuelto " + arrEncontrados[i]);
  }
  // console.log(
  //   `Con el dato ${datosIntroducidos} se espera ${datosEsperados[0]} y ${datosEsperados[1]}`
  // );

  console.log("dato esperado " + datosEsperados[0] + " y " + datosEsperados[1]);
  console.log();
}
testExtraeCP();
function sustituyeCPs(frase) {
  const patron = /\s*([0-4]\d|5[0-2])\d\d\d\s*/;
  let sustituida = frase.replaceAll(patron, "CP");
  return sustituida;
}
function testsustituyeCPs() {
  let datosIntroducidos = "41710, 11111111, 111, 53111, 12444, 50";
  let sustituida = sustituyeCPs(datosIntroducidos);

  console.log("dato devuelto " + sustituida);

  // console.log(
  //   `Con el dato ${datosIntroducidos} se espera ${datosEsperados[0]} y ${datosEsperados[1]}`
  // );

  // console.log("dato esperado " + datosEsperados[0] + " y " + datosEsperados[1]);
  console.log();
}
testsustituyeCPs();
