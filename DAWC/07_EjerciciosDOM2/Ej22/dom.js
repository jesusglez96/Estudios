function insert() {
  let lista = document.getElementById("lista");
  let txt = document.getElementById("txt").value;

  lista.insertAdjacentHTML("beforeend", `<li>${txt}</li>`);
}

function create() {
  let lista = document.getElementById("lista");
  let txt = document.getElementById("txt").value;
  let p = document.createElement("li");
  p.innerHTML = txt;
  lista.appendChild(p);
}
