addEventListener("load", inicio);
function inicio() {
  let submit = document.getElementById("crear");
  submit.addEventListener("click", crearCeldas);
}

function crearCeldas(ev) {
  let num = document.getElementById("celda").value;

  for (let i = 0; i < num; i++) {
    ev.target.insertAdjacentHTML(
      "afterend",
      `<input type="text" class="num" onblur="suma()"/>`
    );
  }
}
function suma() {
  let nums = document.getElementsByClassName("num");
  let sum = 0;
  for (let i = 0; i < nums.length; i++) {
    console.log(nums[i].value);
    sum += parseInt(nums[i].value);
  }
  document.getElementById("sum").innerHTML = sum;
}
