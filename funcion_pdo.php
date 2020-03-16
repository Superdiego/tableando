<?php
class Clientes{
    private $Nombre;
    private $dni;
    public function listar(){
        return $this->Nombre . " " . $this->dni;
    }
}



//$filtro = "Francisco Perez Alonso";

try{
    $conexion = new PDO("mysql:host=localhost;dbname=migente","diego", "diego");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $miscript = "SELECT Nombre, dni FROM datos";
    /*"INSERT INTO datos (Direccion, dni, email, Localidad, Nombre, Provincia, Telefono)
            VALUES ('C/ Almorida, 8', '999999321', 'lorenzo@lis.com', 'Sanabria', 'Jaime de Mora y Aragon', 'Albacete','112233445')";*/
    
    $consulta = $conexion->prepare($miscript);
    //$consulta->bindParam(':vengaya', $filtro, PDO::PARAM_STR);
    $consulta->execute();
    //while($fila = $consulta->fetch()){
       // echo $fila[0] . "<br>";
   //}
    //$consulta->setFetchMode(PDO::FETCH_CLASS, 'Clientes');
    
    while($fila=$consulta->fetch()){
        //echo $fila->listar() . "<br>";
        echo $fila['Nombre'] . "<br>";
    }
} catch(PDOException $e){
    echo "Ha ocurrido un error en la conexion a la base de datos" . $e->getMessage();
}