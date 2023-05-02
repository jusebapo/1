<?php

include("Usuario.php");

class Control
{

    private $obj;

    function __construct()
    {

        $obj = new Usuario();
    }

    function seleccionarOpcion()
    {

        if (isset($_POST['registrar'])) {

            $this->registrarDatos(1);
        }


        // if (isset($_POST['listar'])) {

        //     $this->registrarDatos(3);
        // }
    }

    public function registrarDatos($oper)
    {

        $nombre = $_POST['nombre'];

        $apellido = $_POST['apellido'];

        $usuariop = $_POST['usuario'];

        $password = $_POST['password'];
        echo "$nombre $apellido $usuariop $password";
        $obj = new Usuario();

        switch ($oper) {

            case 1:

                $obj->registrarUsuario($nombre, $apellido, $usuariop, $password);

                break;
        }

        echo "<a href=\"index.html\"> Retornar </a>";
    }
}

$obj1 = new Control();

$obj1->seleccionarOpcion();

//echo "<a href="index.html"> Formulario </a>";
