function arraySinDuplicidad(arr) {
  let arrNoDuplicado = [];
  arr.forEach((element) => {
    if (arrNoDuplicado.indexOf(element) == -1) {
      arrNoDuplicado.push(element);
    }
  });
  arrNoDuplicado.sort((num1, num2) => num1 - num2);
  return arrNoDuplicado;
}
