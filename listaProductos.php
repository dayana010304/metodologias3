<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php 

        include("BaseDatos.php");
        $transaccion= new BaseDatos();
        $consultaSQL="SELECT * FROM administracion WHERE 1";
        $administracion=$transaccion->consultarDatos($consultaSQL);
    ?>
    <header>
      <p>
        <font face="Brush Script MT" color="#E7E700">
        <h1>PRODUCTOS EN BODEGA</h1>
        </font>
      </p>
        <hr>
    </header>
    <div class="container">
    <br>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <th>Id Factura</th>
            <th>Nombre propietario</th>
            <th>N° Apartamento</th>
            <th>Estado</th>
            <th>Total</th>
            <th>Generacion de factura</th>
            <th>Fecha sin recargo</th>
            <th>Fecha con recargo</th>
            <th>N° Personas</th>
            
        </thead>
        <tbody>
            <?php
            foreach ($administracion as $administracion) { ?>
                <tr>
                    <td><?php echo($administracion["Factura"]) ?></td>
                    <td><?php echo($administracion["Propietario"]) ?></td>
                    <td><?php echo($administracion["Apartamento"]) ?></td>
                    <td><?php echo($administracion["Estado"]) ?></td>
                    <td><?php echo($administracion["Total"]) ?></td>
                    <td><?php echo($administracion["Generacionf"] = date('Y-m-d')) ?></td>
                    <td><?php echo($administracion["Sinrecargo"] = date('Y-m-d')) ?></td>
                    <td><?php echo($administracion["Conrecargo"]= date('Y-m-d')) ?></td>
                    <td><?php echo($administracion["Personas"])?></td>
                    <td><a href="#">Descargar factura</a></td>

                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>