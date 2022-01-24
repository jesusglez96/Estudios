addEventListener("load", inicio);
var arrObj = [];

function inicio() {
  let annadir = document.getElementById("annadir");
  let vaciar = document.getElementById("vaciar");

  annadir.addEventListener("click", annadirProducto);
  vaciar.addEventListener("click", vaciarCarrito);

  if (localStorage.length > 0) arrObj = JSON.parse(localStorage.carrito);
  muestraCarrito();
}

function annadirProducto() {
  let text = document.getElementById("txt").value;
  let num = parseFloat(document.getElementById("num").value);

  // let existe = false;
  // arrObj.map((obj) => {
  //   console.log(`nombre objeto ${obj.articulo} texto ${text}`);
  //   console.log(obj);
  //   if (obj.articulo == text) {
  //     console.log("dentro del if");
  //     obj.cantidad += num;
  //     existe = true;
  //   }
  // });
  // if (existe == false) {
  //   arrObj.push({
  //     articulo: text,
  //     cantidad: num,
  //   });
  // }

  let obj = arrObj.find(({ articulo }) => articulo == text);
  if (obj == undefined)
    arrObj.push({
      articulo: text,
      cantidad: num,
    });
  else obj.cantidad += num;

  localStorage.carrito = JSON.stringify(arrObj);
  muestraCarrito();
}

function vaciarCarrito() {
  arrObj = [];
  localStorage.clear();
  muestraCarrito();
}

function muestraCarrito() {
  let resultado = document.getElementById("resultado");
  let inner =
    "<p class='nombre titulo'>Nombre</p><p class='cantidad titulo'>Cantidad</p>";
  arrObj.forEach((obj) => {
    inner += `<p class='nombre'>${obj.articulo}</p>
              <p class='cantidad'>${obj.cantidad}</p>`;
  });
  resultado.innerHTML = inner;
}
