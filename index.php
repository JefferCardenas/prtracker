<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Bogle&display=swap" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd2f43fc66.js" crossorigin="anonymous"></script>
    <title>PR TRACKER</title>
</head>

<body onload="setup()">

    <?php require_once './views/header.php'; ?>

    <?php require_once './views/nav.php'; ?>

    <main>
        <!--CONTENEDOR DE RADIOs TAMANOS-->
        <section class="containerSeleccion" id="containerSeleccion">
            <div id="containertamano" class="containertamano">
                <h4 style="text-align: center;">Seleccione el tamaño:</h4>
                <div class="containerChecks">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rdoz"
                            id="8radio" value="8" hidden>
                        <label class="form-check-label boxCheck" for="8radio">
                            8 oz
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rdoz"
                            id="12radio" value="12" hidden>
                        <label class="form-check-label boxCheck" for="12radio">
                            12 oz
                        </label>
                    </div>
                </div>
            </div>

            <!--CONTENEDOR DE RADIO LICOR-->
            <div id="containerlicor" class="containerlicor">
                <h4 style="text-align: center;">Con alcohol?:</h4>
                <div class="containerChecks">
                    <div class="form-check">
                        <input class="form-check-input" type="radio"
                            name="rdlicor" id="chksi" value="true" hidden>
                        <label class="form-check-label boxCheck" for="chksi">
                            SI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"
                            name="rdlicor" id="chkno" value="false" hidden>
                        <label class="form-check-label boxCheck" for="chkno">
                            NO
                        </label>
                    </div>
                </div>
            </div>

            <!-- CONTENEDOR CANTIDAD -->
            <div class="containerCantidad">
                <h4 for="cantidad">Cantidad: </h4>
                <div class="containerBtnCantidad">
                    <button type="button" id="btnMenos" class="btnPR btnCantidad">-</button>
                    <input type="number" name="cantidad" id="txtCantidad" value="1" min="1" readonly> 
                    <button type="button" id="btnMas" class="btnPR btnCantidad">+</button>
                </div>
            </div>

            <div class="containerbotonAgregar" id="containerBotonAgregar">
                <button type="button" class="btnPR"
                    data-bs-toggle="modal"
                    data-bs-target="#modalConfirmacion">Agregar</button>
            </div>
        </section>


    </main>

    <!--CONTENEDOR DE MODAL CONFIRMACION DE PEDIDO-->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalConfirmacion" tabindex="-1"
        aria-labelledby="modalConfirmacion" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"
                        id="exampleModalLabel">Confirmar seleccion</h1>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro de que desea agregar este producto?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary"
                        id="btnAgregarModal">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    
    <script src="js/main.js"></script>
    <script src="js/gestionVenta.js"></script>
</body>

</html>