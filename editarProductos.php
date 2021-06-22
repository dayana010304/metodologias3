<?php 

    include("BaseDatos.php");

    $id=$_GET["id"];
    
    if (isset($_POST["botonEditar"])){

        $propietario=$_POST["PropietarioEditar"];
        $direccion=$_POST["DireccionEditar"];

        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE administracion SET Propietario='$propietario', Direccion='$direccion' WHERE Factura='$id'";

        $transaccion->editarDatos($consultaSQL);

        header("location:listaProductos.php");
    }
?>