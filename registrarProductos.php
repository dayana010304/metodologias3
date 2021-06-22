
<?php
    include("BaseDatos.php");

    if (isset($_POST["botonEnvio"]))
    {
        $propietario = $_POST["propietario"];
        $apartamento=$_POST["apartamento"];
        $direccion=$_POST["direccion"];
        $estado=$_POST["estado"];
        $generacionf = $_POST ["generacionf"];
        $total = $_POST["total"];
        $sinrecargo= $_POST["sinrecargo"];
        $conrecargo= $_POST["conrecargo"];
        $personas= $_POST["personas"];

        $transaccion = new BaseDatos();

        $consultaSQL= "INSERT INTO administracion (Propietario, Direccion, Apartamento,  Estado, Total, GeneracionF, SinRecargo, ConRecargo, Personas) VALUES ('$propietario', '$direccion', '$apartamento', '$estado', '$total', '$generacionf', '$sinrecargo', '$conrecargo', '$personas')";

        $transaccion->agregarDatos($consultaSQL);  
        
        header("location:punto1.php");
    }
?>