function verCalificacion(nota) {
  switch (nota) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
      return "Insuficiente";
      break;

    case 5:
      return "Suficiente";
      break;

    case 6:
      return "Bien";
      break;

    case 7:
    case 8:
      return "Notable";
      break;
    case 9:
    case 10:
      return "Sobresaliente";
      break;

    default:
      return "Valor incorrecto";
      break;
  }
}
function verCalificacionDecimal(nota) {
  if (nota >= 0 && nota < 5) {
    return "Insuficiente";
  } else if (nota >= 5 && nota < 6) {
    return "Suficiente";
  } else if (nota >= 6 && nota < 7) {
    return "Bien";
  } else if (nota >= 7 && nota < 9) {
    return "Notable";
  } else if (nota >= 9 && nota <= 10) {
    return "Sobresaliente";
  } else return "No valido";
}
function comprobarEsPar(numero) {
  if (numero % 2 == 0) return true;
  else return false;
}
function europea2talla(europea) {
  let talla = europea.toLowerCase();

  switch (talla) {
    case "xs":
    case "s":
      return "Pequeña";
      break;
    case "m":
      return "Mediana";
      break;
    case "l":
    case "xl":
    case "xxl":
      return "Grande";
      break;

    default:
      "No valido";
      break;
  }
}
function hexa2decimal(numhex) {
  let num = parseInt(numhex, 16);
  return num;
}

function gradoARadiane(grados) {
  let radianes = (grados * Math.PI) / 180;
  return radianes;
}
