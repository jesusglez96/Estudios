function cambiar() {
  let select = document.getElementById("select");
  let op = select.options[select.selectedIndex].value;

  let visible = document.getElementById("visible").checked
    ? "visible"
    : "hidden";

  console.log(visible);
  let paras = document.querySelectorAll("p");

  paras.forEach((element) => {
    element.style.display = op;
    element.style.visibility = visible;
  });
}
