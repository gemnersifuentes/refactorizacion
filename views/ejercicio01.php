<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio01</title>
    <link rel="stylesheet" href="<?php echo asset('resources/css/bootstrap.min.css') ?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <form action="" method="post" ">

             
  

                    <label for=" nombre" class="block text-sm font-medium text-gray-700">Nombre: </label>
                    <input type="text" name="nombre" class="form-control mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>



                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" class="form-control mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>



                    <label for="edad" class="block text-sm font-medium text-gray-700">Edad:</label>
                    <input type="number" name="edad" class="form-control mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>


                    <button type="submit" class="btn mb-5 btn-primary w-full mt-4 bg-blue-500 text-white py-2 px-4 rounded-md text-sm">Enviar</button>
          

                <!-- Mostrar los datos ingresados después de enviar el formulario -->


                </form>
            </div>
            <div class="col-sm-12 col-lg-6">
                <?php if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['edad'])) { ?>
                    <p class="p text-center text-sm font-semibold text-green-500 mt-4"><strong>Datos enviados correctamente</strong></p>
                    <p class="text-sm">Nombre: <?php echo $_POST['nombre']; ?></p>
                    <p class="text-sm">Email: <?php echo $_POST['email']; ?></p>
                    <p class="text-sm">Edad: <?php echo $_POST['edad']; ?></p>
                <?php } ?>
            </div>
        </div>




    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>