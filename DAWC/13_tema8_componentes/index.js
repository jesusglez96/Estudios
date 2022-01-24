addEventListener("load", inicio);
function inicio() {
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // console.log(this.response);
      let registros = JSON.parse(this.responseText);
      let datos = [];
      for (const key in registros) {
        datos.push(registros[key]);
      }
      console.log(datos);
      muestraGraficos(datos);
    }
  };
  xhr.timeout = 3000;
  xhr.ontimeout = function () {
    xhr.abort();
    console.log("Servidor saturado");
  };
  xhr.open("GET", "./model/peticion.php", true);
  xhr.send();
}
function muestraGraficos(datos) {
  const ctx = document.getElementById("myChart");
  const myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Jesus", "Capi", "Ezequiel"],
      datasets: [
        {
          label: "Notas de clase",
          data: datos,
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  const ctx2 = document.getElementById("myChart2");

  const data = {
    type: "doughnut",
    data: {
      labels: ["Jesus", "Capi", "Ezequiel"],
      datasets: [
        {
          label: "Notas de clase",
          data: datos,
          backgroundColor: [
            "rgb(255, 99, 132)",
            "rgb(54, 162, 235)",
            "rgb(255, 205, 86)",
          ],
          hoverOffset: 4,
        },
      ],
    },
  };
  const myChart2 = new Chart(ctx2, data);
}
