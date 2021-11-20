let contador = 0;

function sumPara() {
  contador++;

  let div = document.getElementById("container");
  let newP = document.createElement("p");
  newP.innerText = `Parrafo número ${contador}`;
  div.appendChild(newP);
}
