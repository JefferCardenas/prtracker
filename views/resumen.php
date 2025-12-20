<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <title>PR TRACKER</title>
</head>

<body onload="setup()">

<?php require_once './header.php'; ?>
    <nav>
        <ul class="navBar">
            <lo>
                <a href="../index.php" class="btnPR">Inicio</a>
            </lo>
        </ul>
    </nav>
    <section class="containerResumen" id="containerResumen">
        <h6 style="text-align: center;">Pedidos hoy</h6>
        <div id="resumenPedido">
            <!-- Resumen del pedido se mostrará aquí -->
        </div>

    </section>
</body>