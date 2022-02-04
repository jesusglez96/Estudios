$(document).ready(function () {
  $.ajax({
    async: true,
    url: "https://api.openweathermap.org/data/2.5/weather?q=sevilla&units=metric&lang=sp&appid=db07a2dc62b855fe1f53205b91221081",
    type: "GET",
    ContentType: "application/json",
    dataType: "json",
    beforeSend: cargando,
    success: llegadaDatos,
    //   function (respuesta) {
    //   console.log(respuesta.name);
    // },
    error: function () {
      console.error("No es posible completar la operación");
    },
  });
  $.ajax({
    async: true,
    url: "https://api.openweathermap.org/data/2.5/weather?q=madrid&units=metric&lang=sp&appid=db07a2dc62b855fe1f53205b91221081",
    type: "GET",
    ContentType: "application/json",
    dataType: "json",
    beforeSend: cargando,
    success: llegadaDatos,
    //   function (respuesta) {
    //   console.log(respuesta.name);
    // },
    error: function () {
      console.error("No es posible completar la operación");
    },
  });
  $.ajax({
    async: true,
    url: "https://api.openweathermap.org/data/2.5/weather?q=vigo&units=metric&lang=sp&appid=db07a2dc62b855fe1f53205b91221081",
    type: "GET",
    ContentType: "application/json",
    dataType: "json",
    beforeSend: cargando,
    success: llegadaDatos,
    //   function (respuesta) {
    //   console.log(respuesta.name);
    // },
    error: function () {
      console.error("No es posible completar la operación");
    },
  });
  return false;
});

function cargando() {
  $("#tabs-1").html('<img src="./cargando.gif">');
}
function llegadaDatos(datos) {
  console.log(JSON.stringify(datos));
  let texto;
  texto = `<div class='cielo'><h3>${datos.name}</h3><div class='foto'><img src="http://openweathermap.org/img/wn/${datos.weather[0].icon}.png"></div>
  </div>
  <p>Cielo: ${datos.weather[0].main}</p>
  <p>Cielo detallado: ${datos.weather[0].description}</p>
  <p>Temperatura: ${datos.main.temp}ºC</p>
  <p>Temperatura maxima: ${datos.main.temp_max}ºC</p>
  <p>Temperatura minima: ${datos.main.temp_min}ºC</p>
  <p>Humedad: ${datos.main.humidity}%</p>`;

  if (datos.name == "Seville") $("#tabs-1").html(texto);
  else if (datos.name == "Madrid") $("#tabs-2").html(texto);
  else if (datos.name == "Vigo") $("#tabs-3").html(texto);
}
