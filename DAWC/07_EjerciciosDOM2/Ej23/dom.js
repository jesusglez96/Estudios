function insertar() {
  var texto = document.getElementById("txtCaja").value;
  var codigoFila = "<td>" + texto + "</td>";
  codigoFila +=
    "<td><input type='button' onclick='copiarEncima(this);' value='Copiar encima'></td>";
  codigoFila +=
    "<td><input type='button' onclick='borrar(this);' value='Borrar'></td>";

  var fila = document.createElement("tr");
  fila.innerHTML = codigoFila;
  document.getElementById("tabla").appendChild(fila);
}
function borrar(boton) {
  var filaABorrar = boton.parentElement.parentElement; // Será un elto tr

  // Manera 1 de eliminar el elto tr
  filaABorrar.remove();

  // Manera 2 de eliminar el elto tr
  // document.getElementById("tabla").removeChild(filaABorrar);
}
function copiarEncima(boton) {
  var filaActual = boton.parentElement.parentElement;
  var filaACopiar = boton.parentElement.parentElement.cloneNode(true);
  document.getElementById("tabla").insertBefore(filaACopiar, filaActual);
}
