<?php
$conexion= mysqli_connect("localhost", "diego", "diego", "migente");


if(mysqli_connect_errno()){
    echo "Servidor no disponible, inténtalo más tarde";
}

$consulta = "SELECT * FROM datos";
$resultado= mysqli_query($conexion, $consulta);
$registros_consulta = mysqli_num_rows($resultado);
echo $registros_consulta . "<br>";

$codigo = "DELETE FROM datos WHERE dni='12345612p'";
     //   . " (Direccion, dni, email, Localidad, Nombre, Provincia, Telefono) "
     // . " VALUES "
     //  . " ('C/ Reina Victoria','12345612p','probando@elmundo.es', 'Javea','Francisco Perez Alonso', 'Salamanca', '987654321') ";
mysqli_query($conexion, $codigo);

while($filas = mysqli_fetch_array($resultado)){
    echo $filas["Nombre"] . "<br>" ;
}

?>