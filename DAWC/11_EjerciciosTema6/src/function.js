addEventListener("load", inicio);

function inicio() {
  let comunidad = document.getElementById("lista__comunidad");

  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let registros = JSON.parse(this.responseText);

      let newOption = "<option value='' disabled selected>Seleccionar</option>";
      for (const key in registros) {
        newOption += `<option value='${key}'>${registros[key]}</option>`;
      }
      comunidad.innerHTML = newOption;
    }
  };
  xhr.timeout = 3000;
  xhr.ontimeout = function () {
    let div = document.getElementById("texto");
    xhr.abort();
    div.innerHTML = "Servidor saturado";
  };
  xhr.open("GET", "./model/cargar_comunidades_autonomas.php", true);
  xhr.send();

  comunidad.addEventListener("change", seleccionComunidad);

  let provincias = document.getElementById("lista__provincias");
  provincias.addEventListener("change", seleccionProvincia);
}

function seleccionComunidad(ev) {
  let provincias = document.getElementById("lista__provincias");

  let xhr2 = new XMLHttpRequest();
  xhr2.onreadystatechange = function () {
    let provinciasXML;
    if (this.readyState == 4 && this.status == 200) {
      provinciasXML = xhr2.responseXML;
      let arrProvincias = provinciasXML.getElementsByTagName("provincia");

      let opcionProvincias =
        "<option value='' disabled selected>Seleccionar</option>";
      for (let i = 0; i < arrProvincias.length; i++) {
        let id = arrProvincias[i].getElementsByTagName("id");
        let nombre = arrProvincias[i].getElementsByTagName("nombre");

        opcionProvincias += `<option value='${id[0].textContent}'>${nombre[0].textContent}</option>`;
      }
      provincias.innerHTML = opcionProvincias;

      let div = document.getElementById("texto");
      div.innerHTML = "";
      let btn = (document.getElementById("btn").disabled = true);
    }
  };
  xhr2.open(
    "GET",
    "./model/cargar_provincias.php?comunidad=" + ev.target.value,
    true
  );
  xhr2.send();
  let btn = document.getElementById("btn");
  btn.disabled = false;
  btn.addEventListener(
    "click",
    function () {
      cancelPeticion(xhr2);
    },
    false
  );
}

function seleccionProvincia(ev) {
  let div = document.getElementById("texto");

  let provinciaSelect = ev.target.options[ev.target.selectedIndex];
  div.innerHTML = `ID: ${provinciaSelect.value} ---------> Nombre: ${provinciaSelect.textContent}`;
}

function cancelPeticion(xhr) {
  let div = document.getElementById("texto");

  xhr.abort();
  div.innerHTML = "Peticion cancelada";
}
