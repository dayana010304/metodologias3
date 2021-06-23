<?php 

    include("BaseDatos.php");

    $id=$_GET["id"];
    
    if (isset($_POST["botonEditar"])){

        $propietario=$_POST["PropietarioEditar"];
        $correo=$_POST["CorreoEditar"];
        $telefono=$_POST["TelefonoEditar"];
        $direccion=$_POST["DireccionEditar"];
        $estado=$_POST["EstadoEditar"];
        $personas=$_POST["PersonasEditar"];

        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE administracion SET Propietario='$propietario', Correo='$correo', Telefono='$telefono',
        Direccion='$direccion', Estado='$estado', Personas='$personas' WHERE Factura='$id'";

        $transaccion->editarDatos($consultaSQL);

        header("location:listaProductos.php");
    }
?>