<?php

class Usuario{

private $servidor;

private $usuario;

private $clave;

private $basedato;

function __construct() {

    $this->servidor = "127.0.0.1";

    $this->usuario = "root";

    $this->clave = "";

    $this->basedato = "proyecto";

}

function registrarUsuario($nombre,$apellido,$usuariop, $password) {
    
$link=mysqli_connect($this->servidor,$this->usuario ,"",$this->basedato);

mysqli_select_db($link,$this->basedato);

$grabar_cliente="INSERT INTO usuarios(nomUsu,apeUsu,usuario,pasUsu) VALUES('$nombre','$apellido','$usuariop',md5($password))";//guardo los datos

$guardar_usuario=mysqli_query($link,$grabar_cliente) or die('El registro de datos fall&oacute;: ' . mysqli_connect_error());//valido si guardo

mysqli_close($link);






}

// function listarCliente() {

// $link=mysqli_connect($this->servidor,$this->usuario ,"",$this->basedato);

// mysqli_select_db($link,$this->basedato);

// $consulta = "SELECT codcli,nomcli,emailcli,telcli FROM Clientes" ;

// $result = mysqli_query($link,$consulta);

// if ($row = mysqli_fetch_array($result)) {

// echo "<table border='1'>";

// echo "<tr>";

// // recorre el vector e imprime los campos definidos en la clase

// do {

// echo "<tr><td>".$row["codcli"]."</td><td>".$row["nomcli"]."</td><td>".$row["emailcli"]."</td><td>".$row["telcli"]."</td><td>".$row["emailcli"]."</td></tr> \n";

// } while ($row = mysqli_fetch_array($result));

// echo "</tr>";

// } else {

// echo "¡ No se ha encontrado ningún registro !";

// }

// mysqli_close($link);

// //$this->free_result($resultado); // libera de memoria la tabla de resultados

// } // fin de la consulta

}
