<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href=" <?php echo asset('resources/css/bootstrap.min.css') ?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->




        <h1 class="text-center mb-4">Calculadora</h1>

        <!-- Tabla de Clientes -->
        <form action="" method="post">
            <div class="card mb-5">
                <div class="card-header bg-primary text-white">
                    <h5>Datos</h5>
                </div>
                <div class="card-body p-3">

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="n1">Número 1</label>
                            <!-- Rellenar valor de n1 si está disponible -->
                            <input type="number" name="n1" id="n1" class="form-control" required
                                value="<?php echo isset($_POST['n1']) ? $_POST['n1'] : ''; ?>">

                            <label for="n2">Número 2</label>
                            <!-- Rellenar valor de n2 si está disponible -->
                            <input type="number" name="n2" id="n2" class="form-control" required
                                value="<?php echo isset($_POST['n2']) ? $_POST['n2'] : ''; ?>">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <?php if (isset($_POST['n1'])) {
                                $n1 = $_POST['n1'];
                                $n2 = $_POST['n2'];
                            ?>
                                <p><strong>Resultado:</strong></p>
                                <p>Suma: <?php echo $n1 + $n2; ?></p>
                                <p>Resta: <?php echo $n1 - $n2; ?></p>
                                <p>Multiplicación: <?php echo $n1 * $n2; ?></p>
                                <p>División: <?php echo  $n1 / $n2 ; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            </div>
           
        </form>
    </div>



















    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>