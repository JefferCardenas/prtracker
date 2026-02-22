let checkboxtamano = document.querySelectorAll('[name="rdoz"]');
let checkboxLicor = document.querySelectorAll('[name="rdlicor"]');
let containerRadiosLicor = document.getElementById("containerlicor");
let containerBotonAgregar = document.getElementById("containerBotonAgregar");
let btnMenos = document.getElementById("btnMenos");
let btnMas = document.getElementById("btnMas");
let txtCantidad = document.getElementById("txtCantidad");

//funcion para reinicar los checks
function cleanChecks() {
  containerRadiosLicor.classList.remove("show");
  containerBotonAgregar.classList.remove("show");
  checkboxtamano.forEach((checkbox) => {
    checkbox.checked = false;
  });
  checkboxLicor.forEach((checkbox) => {
    checkbox.checked = false;
  });

  txtCantidad.value = 1;
}

function gestionCantidad() {
  btnMenos.addEventListener("click", () => {
    if (parseInt(txtCantidad.value) > 1) {
      txtCantidad.value = parseInt(txtCantidad.value) - 1;
    }
  });

  btnMas.addEventListener("click", () => {
    txtCantidad.value = parseInt(txtCantidad.value) + 1;
  });
}

function setup() {
  gestionCantidad();

  checkboxtamano.forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
      containerRadiosLicor.classList.add("show");
    });
  });

  checkboxLicor.forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
      containerBotonAgregar.classList.add("show");
    });
  });
}
