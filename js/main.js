function setup(){


    let checkboxtamano = document.querySelectorAll('[name="rdoz"]');
    let checkboxLicor = document.querySelectorAll('[name="rdlicor"]');
    let containerRadiosLicor = document.getElementById('containerlicor');
    let containerBotonAgregar = document.getElementById('containerBotonAgregar');
    let btnAgregarModal = document.getElementById('btnAgregarModal');

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
        
        alert('¡Elemento agregado!');


        // Cerrar el modal después de agregar
        let modal = bootstrap.Modal.getInstance(document.getElementById('modalConfirmacion'));
        modal.hide();
    });


}