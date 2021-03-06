<html>
    <head>
        <title>HotPizza</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css"/>
    </head>
    <body>
    <?php
        session_start();

        require_once './views/includes/loadObjects.php'; ?>
        <!-- codigo web principal -->
        <!-- recepcion de datos -->
        <?php
        //Creamos la variable de sesion si no existe
        
        if (!isset($_SESSION['pizzas'])){
            $_SESSION['pizzas'] = [] ;
        }
        else{
            // Miramos si nos ha llegado una pizza seleccionada por parametro
            if (isset($_POST['pizza'])){
                $pizzaSel = $listaPizzas[$_POST['pizza']];
                //Añadimos la pizza a la variable sesion
                $_SESSION['pizzas'][]= $pizzaSel;
            }
        }

        //include cabecera 
        require_once './views/cabecera.php'; 

        ?>
        <!-- Page content -->
        <div class="w3-container w3-padding-32">
        <table id="customers">
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Ingredientes</th>
                <th>Masa</th>
                <th>Especial</th>
                <th>Precio</th>
                <th></th>
            </tr>
            <?php
            foreach ($listaPizzas as $pizza ){ ?>
                <tr>
                    <td><?= $pizza->getImg(); ?></td>
                    <td><?= $pizza->getNombre(); ?></td>
                    <td><?= implode(", ", $pizza->getIngredientes()); ?></td>
                    <td><?= $pizza->getMasa(); ?></td>
                    <?php if ($pizza->getEspecial()){
                        echo '<td>Sí</td>';
                    }else{
                        echo '<td>No</td>';
                    } ?>
                    <td><?= $pizza->getPrecio(); ?></td>
                    <td>
                        <form action='./index.php' method='post'>
                            <input type="hidden" name="pizza" value=<?= $pizza->getNombre();?> >
                            <button class="bet-button w3-black w3-section" type="submit">Seleccionar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
        <!-- include footer -->
    </body>
</html>

