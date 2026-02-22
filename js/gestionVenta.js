let btnAgregarModal = document.getElementById("btnAgregarModal");
const tamano8Sinlicor = 8000;
const tamano8ConLicor = 10000;
const tamano12SinLicor = 12000;
const tamano12ConLicor = 14000;

btnAgregarModal.addEventListener("click", function () {
  let tamano = document.querySelector("input[name='rdoz']:checked");
  let licor = document.querySelector("input[name='rdlicor']:checked");
  let cantidad = document.getElementById("txtCantidad");

  let parametros = {
    tamano: parseInt(tamano.value),
    licor: licor.value,
    cantidad: parseInt(cantidad.value),
    total: calcularTotal(
      parseInt(tamano.value),
      parseInt(cantidad.value),
      licor.value
    ),
  };

  agregarVenta(parametros);

  cleanChecks();

  // Cerrar el modal después de agregar
  let modal = bootstrap.Modal.getInstance(
    document.getElementById("modalConfirmacion")
  );
  modal.hide();
});

async function agregarVenta(parametros) {
  console.log(parametros);

  const url = "controller/VentaController.php";

  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(parametros),
    });
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`);
    }

    const result = await response.json();
    console.log(result);
  } catch (error) {
    console.error(error);
  }
}

function calcularTotal(tamano, cantidad, licor) {
  let total = 0;
  if (tamano == 8 && licor == "false") {
    total = tamano8Sinlicor * cantidad;
  } else if (tamano == 8 && licor == "true") {
    total = tamano8ConLicor * cantidad;
  } else if (tamano == 12 && licor == "false") {
    total = tamano12SinLicor * cantidad;
  } else if (tamano == 12 && licor == "true") {
    total = tamano12ConLicor * cantidad;
  }
  return total;
}
