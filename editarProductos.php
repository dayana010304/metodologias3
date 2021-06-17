<?php 

    include("BaseDatos.php");

    $id=$_GET["id"];
    
    if (isset($_POST["botonEditar"])){

        $nombre=$_POST["NombreEditar"];
        $descripcion=$_POST["DescripciónEditar"];

        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE productos SET NombreLibro='$nombre', Descripción='$descripcion' WHERE IdProducto='$id'";

        $transaccion->editarDatos($consultaSQL);

        header("location:listaProductos.php");
    }
?>