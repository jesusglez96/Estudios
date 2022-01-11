addEventListener("load", inicio);

function inicio() {
  let curso = document.getElementById("container");

  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let registros = JSON.parse(this.responseText);

      let newOption = "<option value='' disabled selected>Seleccionar</option>";
      for (const key in registros) {
        newOption += `<option value='${key}'>${registros[key]}</option>`;
      }
      div.innerHTML = newOption;
    }
  };
  xhr.open("GET", "./cargar_cursos.php", true);
  xhr.send();

  curso.addEventListener("change", seleccionCurso);
}

function seleccionCurso(ev) {
  let curso = document.getElementById("asignaturas");

  let xhr2 = new XMLHttpRequest();
  xhr2.onreadystatechange = function () {
    let asignaturasXML;
    if (this.readyState == 4 && this.status == 200) {
      asignaturasXML = xhr2.responseXML;
      let arrCursos = asignaturasXML.getElementsByTagName("curso");

      let opcionProvincias =
        "<option value='' disabled selected>Seleccionar</option>";
      for (let i = 0; i < arrCursos.length; i++) {
        let id = arrCursos[i].getElementsByTagName("id");
        let nombre = arrCursos[i].getElementsByTagName("nombre");

        opcionProvincias += `<option value='${id[0].textContent}'>${nombre[0].textContent}</option>`;
      }
      curso.innerHTML = opcionProvincias;
    }
  };
  xhr2.open("GET", "./cargar_asignaturas.php?curso=" + ev.target.value, true);
  xhr2.send();
}
