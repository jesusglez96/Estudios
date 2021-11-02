function buscarPosiciones(arr, num) {
  let posiciones = [];
  let pos;
  let index = 0;

  while ((pos = arr.indexOf(num, index) !== -1)) {
    posiciones.push(pos);
    index = pos + 1;
  }

  return posiciones;
}
