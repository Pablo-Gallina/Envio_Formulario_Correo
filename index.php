<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .color{
            background-color: rgb(240, 107, 18);
            color: azure;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .color:hover{
            color: azure;
            opacity: .8;
        }
    </style>
</head>
<body>

    <!-- Toast -->
    <div role="alert" id="mitoast" aria-live="assertive" aria-atomic="true" class="toast">
        <div class="toast-header">   
            <!-- Nombre de la Aplicación -->
            <strong class="mr-auto">Correo Envaido Exitosamente</strong>   
            <!-- Botón para Cerrar el Toast -->
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar" onclick="cerrarToast()">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    </div>

    <?php
        error_reporting(0);
        $toast = $_GET["var"];
        if($toast==1){
    ?>   
        <script>
            var toast = document.getElementById("mitoast");
            toast.className = "mostrar";
            setTimeout(function(){ toast.className = toast.className.replace("mostrar", ""); }, 3500);  
        </script>
    <?php
        }
    ?>
    <div class="principal">
        <div class="contenedor">
            <form class="form-group" action="envio.php" method="POST">
                <h1 class="mb-5">Contactanos</h1>
                
                <label for="nombre">Nombre</label>
                <input required type="text" class="form-control mb-3" id="nombre" name="nombre" placeholder="Ingrese su nombre">

                <label for="email">Correo Electronico</label>
                <input required type="email" class="form-control mb-3" id="email" name="email" placeholder="Ingrese su Correo">

                <label for="mensaje">Mensaje</label>
                <textarea required name="mensaje" id="mensaje" placeholder="Escribe tu mensaje" class="form-control mb-4" rows="4"></textarea>

                <input class="btn w-100 color" type="submit" value="ENVIAR">
            </form>
            <div class="barra"></div>  
        </div>
    </div>
    

    <script src="js/app.js"></script>
</body>
</html>