let contador = 0;
function newPara() {
  contador++;

  let p = document.createElement("p");
  let txt = document.createTextNode(`Parrafo número ${contador}`);

  p.appendChild(txt);
  console.log(p.outerHTML);
  console.log(document.getElementById("parrafos"));
  document.getElementById("parrafos").appendChild(p);
}

let input = document.getElementById("color");

input.addEventListener("change", function () {
  let paras = document.querySelectorAll("p");

  paras.forEach((element) => {
    element.style.color = input.value;
  });
});
