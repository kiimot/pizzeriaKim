<?php
if (isset($_POST['titulo']) && preg_match("/^[a-zA-Z\s]+$/", $_POST['titulo'] )){
    echo $_POST['titulo'];

}else{
    header("Location:formulario.html");
}

/* 
 Crear un array con el contenido de la tabla:
 ACCION   AVENTURA   DEPORTES
 GTA      ASSASINS    FIFA 19
 COD      CRASH       PES 19
 PUGB     Prince of   MOTO GP 19
          persia
 
Mostrar html formato tabla
 */

/*Hacer un programa que muestre todos los numeros IMPARES entre dos numeros
* que nos lleguen por la URL($_GET)
*/

?>