
let checkboxtamano = document.querySelectorAll('[name="rdoz"]');
let checkboxLicor = document.querySelectorAll('[name="rdlicor"]');
let containerRadiosLicor = document.getElementById('containerlicor');
let containerBotonAgregar = document.getElementById('containerBotonAgregar');
let btnAgregarModal = document.getElementById('btnAgregarModal');

function cleanChecks(){

    containerRadiosLicor.classList.remove('show');
    containerBotonAgregar.classList.remove('show');
    checkboxtamano.forEach((checkbox) => {
        checkbox.checked = false;
    });
    checkboxLicor.forEach((checkbox) => {
        checkbox.checked = false;
    });
}

function setup(){


    var storage = window.localStorage;

    checkboxtamano.forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            containerRadiosLicor.classList.add('show');
            console.log('Tamaño seleccionado:', this.value);
        });
    });

    checkboxLicor.forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            containerBotonAgregar.classList.add('show');
        });
    });

    btnAgregarModal.addEventListener('click', function() {
        
        console.log('Producto agregado al carrito');

        cleanChecks();
        // Cerrar el modal después de agregar
        let modal = bootstrap.Modal.getInstance(document.getElementById('modalConfirmacion'));
        modal.hide();
    });


}