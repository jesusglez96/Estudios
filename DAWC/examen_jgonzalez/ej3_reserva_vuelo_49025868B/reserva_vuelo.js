addEventListener("load", inicio);
function inicio() {
  let btn = document.getElementById("enviar");
  btn.addEventListener("click", valida);
}
function valida(ev) {
  //   let ida = document.getElementById("inputFechaIda");
  //   let vuelta = document.getElementById("inputFechaVuelta");
  //   validaFecha(ida, vuelta);

  let origen = document.getElementById("inputOrigen");
  let destino = document.getElementById("inputDestino");
  validaOrigen(origen);
  validaDestino(destino);
  validaDestinoAeropuerto(origen, destino);
}

function validaOrigen(origen) {
  console.log(origen);
  origen.setCustomValidity =
    origen.value == 0 ? "Debes rellenar el aeropuerto de origen" : "";
}

function validaDestino(destino) {
  destino.setCustomValidity =
    destino.value == 0 ? "Debes rellenar el aeropuerto de origen" : "error";
}
function validaDestinoAeropuerto(origen, destino) {
  let origenText = origen.selectedOptions[0].innerText;
  console.log(origenText);
  let destinoText = destino.selectedOptions[0].innerText;
  if (origenText == "Jerez") {
    if (!(destinoText == "Madrid" || destinoText == "Barcelona")) {
      destino.setCustomValidity = "Elige un destino valido";
      destino.validity.valid = false;
    }
  }
  if (destinoText == "Nueva York" || destinoText == "Paris") {
    if (!(origenText == "Sevilla" || origenText == "Málaga")) {
      destino.setCustomValidity =
        "Vuelos internacionales solamente desde Sevilla o Malaga";
      destino.validity.valid = false;
    }
  }
}

// function validaFecha(ida, vuelta) {
//   console.log(ida.value);
//   console.log(vuelta.value);

//   let fechaIda = new Date(ida.value);
//   console.log(fechaIda);
//   let fechaVuelta = new Date(vuelta.value);
//   console.log(fechaVuelta);

//   if (fechaIda - fechaVuelta < 0) {
//     vuelta.setCustomValidity = "Selecciona una fecha posterior a la de ida";
//   } else {
//     vuelta.setCustomValidity = "";
//   }
// }
