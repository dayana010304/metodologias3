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
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($administracion as $administracion):?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            
                            <h6 class="card-title">Propietario: <?php echo($administracion["Propietario"]) ?></h6>
                            <h6 class="card-text">N° Apartamento: <?php echo($administracion["Apartamento"]) ?></h6>
                            <a href="eliminarProductos.php?id=<?php echo($administracion["Factura"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($administracion["Factura"])?>">    
                                Editar
                            </button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#verdatos<?php echo($administracion["Factura"])?>">    
                                Ver datos
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo($administracion["Factura"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICIÓN GENERAL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($administracion["Factura"])?>" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <label>Nombre del propietario:</label>
                                            <input type="text" class="form-control" name="PropietarioEditar" value="<?php echo($administracion["Propietario"])?>">
                                        </div>
                                        <div class="col">
                                            <label>Correo:</label>
                                            <input type="text" class="form-control" name="CorreoEditar"value="<?php echo($administracion["Correo"])?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <label >Telefono:</label>
                                            <input type="text" class="form-control" name="TelefonoEditar"value="<?php echo($administracion["Telefono"])?>">
                                        </div>
                                        <div class="col">
                                        <label>Direccion:</label>
                                            <input type="text" class="form-control" name="DireccionEditar" value="<?php echo($administracion["Direccion"])?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <label>Estado</label>
                                            <input type="text" class="form-control" name="EstadoEditar" value="<?php echo($administracion["Estado"])?>">
                                        </div>
                                        <div class="col">
                                            <label>N° de personas:</label>
                                            <input class="form-control" name="PersonasEditar"value="<?php echo($administracion["Personas"])?>">
                                    </div>
                                    </div>
                                    <br>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Actualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="verdatos<?php echo($administracion["Factura"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DATOS DE FACTURA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($administracion["Factura"])?>" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <label>Nombre del propietario:</label>
                                            <input type="text" class="form-control" name="Propietario" value="<?php echo($administracion["Propietario"])?>" readonly>
                                        </div>
                                        <div class="col">
                                            <label>Correo:</label>
                                            <input type="text" class="form-control" name="Correo"value="<?php echo($administracion["Correo"])?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <label >Telefono:</label>
                                            <input type="text" class="form-control" name="Telefono"value="<?php echo($administracion["Telefono"])?>" readonly>
                                        </div>
                                        <div class="col">
                                        <label>Direccion:</label>
                                            <input type="text" class="form-control" name="Direccion" value="<?php echo($administracion["Direccion"])?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>N° Apartamento</label>
                                            <input type="text" class="form-control" name="Apartamento" value="<?php echo($administracion["Apartamento"])?>" readonly>
                                        </div>
                                        <div class="col"><label>Estado</label>
                                            <input type="text" class="form-control" name="Estado" value="<?php echo($administracion["Estado"])?>" readonly>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>Generacion Factura</label>
                                            <input type="text" class="form-control" name="GeneracionF" value="<?php echo($administracion["GeneracionF"])?>" readonly>
                                        </div>
                                        <div class="col">
                                        <label>Total Factura</label>
                                            <input type="text" class="form-control" name="Total" value="<?php echo($administracion["Total"])?>" readonly>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>Sin recargo</label>
                                            <input type="text" class="form-control" name="SinRecargo" value="<?php echo($administracion["SinRecargo"])?>" readonly>
                                        </div>
                                        <div class="col">
                                        <label>Con recargo</label>
                                            <input type="text" class="form-control" name="ConRecargo" value="<?php echo($administracion["ConRecargo"])?>" readonly>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>N° Personas</label>
                                            <input type="text" class="form-control" name="Personas" value="<?php echo($administracion["Personas"])?>" readonly>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>