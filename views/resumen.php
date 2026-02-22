<?php
require_once __DIR__ . "/../config/Database.php";
error_reporting(0);
$con = Database::singleton();
$result = new stdClass();

$query = "select * from productos;";

try {

    $retorno = $con->prepare($query);
    $retorno->execute();

    $result = $retorno->fetchAll();
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/main.css">
    <title>PR TRACKER</title>
</head>

<body>

    <?php require_once './header.php'; ?>
    <nav>
        <ul class="navBar">
            <lo>
                <a href="../index.php" class="btnPR">Inicio</a>
            </lo>
        </ul>
    </nav>
    <section class="containerResumen" id="containerResumen">
        <h6 style="text-align: center;">INVENTARIO</h6>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">precio</th>
                    <th scope="col">Stock Actual</th>
                    <th scope="col">Stock Minimo</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                for ($i = 0; $i < $result[$i]; $i++) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo $result[$i]["nombre"] ?></td>
                    <td><?php echo $result[$i]["precio"] ?></td>
                    <td><?php echo $result[$i]["stock_actual"] ?></td>
                    <td><?php echo $result[$i]["stock_minimo"] ?></td>
                </tr>
                <?php
                }

                ?>
            </tbody>
        </table>

    </section>
</body>