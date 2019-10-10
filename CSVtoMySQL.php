<?php
    
    require("conexion.php");
    
    $archivo = fopen("usuarios.csv", "r");
    
    $con = 0;
    
    
    while(($datos = fgetcsv($archivo, ",")) == true) {
    
        // Lee y muestra los datos del archivo.
        echo "DATOS DEL USUARIO: ".$con."<br>";
        echo "Nombre: ".$datos[0]."<br>";
        echo "Telefono: ".$datos[1]."<br>";
        echo "Email: ".$datos[2]."<br>";
        echo "Usuario: ".$datos[3]."<br>";
        echo "Contrasena: ".$datos[4]."<br>";
        
        $con++;
        
        // Creamos el SQL para insertar
        $sql = "INSERT INTO usuarios VALUES('', '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
        
        // Ejecutamos la sentencia SQL
        if($mysqli->query($sql) === TRUE) {
            echo "SE INSERTO CORRECTAMENTE<br>";
        }
        
        echo "<br>";
    }
    
?>
