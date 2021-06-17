<?php

class BaseDatos
{
    public $administracionBD="root";
    public $passwordBD="";

    public function __construct(){}

    public function conectarBD()
    {
        try
        {
            $infoDB="mysql:host=localhost;dbname=factura";
            $conexionBD=new PDO($infoDB, $this->administracionBD,$this->passwordBD);
            return($conexionBD);
        }catch(PDOException $error){
            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){
        $conexionBD=$this->conectarBD();
 
        $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaInsertarDatos->execute();

        if ($resultado){
            echo("Registro agregado con exito");
        }else{
            echo("Error agregando el registro");
        }
    }

    public function consultarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();

        $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $consultaBuscarDatos->execute();
 
        return($consultaBuscarDatos->fetchAll());

    }


    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();

        $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaEliminarDatos->execute();

        if($resultado){
            echo("Registro eliminado con exito");
        }else{
            echo("Error eliminando el registro");
        }
    }

    public function editarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();

        $consultaEditarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaEditarDatos->execute();

        if($resultado){
            echo("Registro editado con exito");
        }else{
            echo("Error editando el registro");
        }
    }
}

?>