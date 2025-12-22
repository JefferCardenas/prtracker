
let btnAgregarModal = document.getElementById("btnAgregarModal");

btnAgregarModal.addEventListener('click', function() {
        
    console.log('Producto agregado al carrito');

    cleanChecks();

    agregarVenta();
    // Cerrar el modal después de agregar
    let modal = bootstrap.Modal.getInstance(document.getElementById('modalConfirmacion'));
    modal.hide();
});

function agregarVenta(){

    console.log("ENTRO PERRA!");

}