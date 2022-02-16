<?php require_once 'cabecera.php'; ?>

    <!--Contenido-->
    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>

<?= var_dump($nombre); ?>


<?php
//$pelis = array('La Sirenita','El Señor de los anillos','Spiderman');
// Ejemplo FOR
//for ($p=0; $p < count($pelis); $p++){
//    echo "<li>".$pelis[$p]."</li>";
//}

//echo "<br>";

// Ejemplo FOR EACH
//foreach ($pelis as $peli){
//    echo "<li>$peli</li>";
//}

//echo "<br>";

//$user = array('482152132T' => 'Ruben Serrano',
//                '23845752A' => 'Iker Ruiz');

//foreach ($user as $dni=>$nombre) {
//    echo "<li>".$dni." su nombre es ". $nombre ."</li>";
//}

//echo "<br>";

//if (isset($_GET['nombre']) && isset($_GET['apellido'])){
//    echo 'Me has enviado el parametro que esperaba ';
//    echo $_GET['nombre'];
//    echo " ";
//    echo $_GET['apellido'];
//}


?>

<html>
    <body>
        <table border="2px">
            <?php      
                $juegos = array('ACCION','AVENTURA','DEPORTES','GTA','ASSASINS','FIFA 19','COD','CRASH','PES 19','PUGB','Prince of','MOTO GP 19');
                $contador = 0;
                echo "<tr>";
                    foreach ($juegos as $nombre){
                        $contador++;
                        echo "<th>$nombre</th>";
                        if ($contador%3==0){
                            echo "</tr>";
                        } 
                    }                
            ?>
        </table>

        <form method="POST">
            <br/><br/><br/>
            Indica el primer número:<br/>
            <input type="text" name="numero1" /><br/>
            Indica el segundo número:<br/>
            <input type="text" name="numero2" /><br/><br/>
            <input type="submit" value="Enviar" /><br/><br/>
            <?php      
                if ((isset($_POST['numero1']) && !preg_match("/^[a-zA-Z\s]+$/", $_POST['numero1'] )) && (isset($_POST['numero2']) && !preg_match("/^[a-zA-Z\s]+$/", $_POST['numero2'] ))){
                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];
                    
                    if ($numero2 > $numero1){
                        for ($i=$numero1; $i <= $numero2; $i++){
                            if ($i%2 != 0){
                                echo "<p>$i</p>";
                            }
                        }
                    }else{
                        echo "El numero 2 ($numero2) tiene que ser mas grande que el numero 1 ($numero1)";
                    }

                }             
            ?>
        </form> 

    </body>
</html>


<?php 
             
?>



