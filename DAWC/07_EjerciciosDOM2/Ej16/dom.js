function cambiar() {
  let select = document.getElementById("select");
  let op = select.options[select.selectedIndex].value;
  let paras = document.querySelectorAll("p");

  paras.forEach((element) => {
    element.style.fontSize = op;
  });
}
