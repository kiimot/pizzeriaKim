<html>
    <head>
        <title>HotPizza</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css"/>
    </head>
    <body>
        <!-- include cabecera -->
        <?php require_once './views/cabecera.php'; ?>
        <!-- codigo web principal -->
        <!-- recepcion de datos -->
        <?php
        session_start();
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

        ?>
        <table>
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
                    <td><?= $pizza->getEspecial(); ?></td>
                    <td><?= $pizza->getPrecio(); ?></td>
                    <td>
                        <form action='./index.php' method='post'>
                            <input type="hidden" name="pizza" value=<?= $pizza->getNombre();?> >
                            <input type="submit" value="Seleccionar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <br>
        <p>Pizza seleccionadas</p>
        <?php
        if (!empty($_SESSION['pizzas'])){?>
            <table>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Ingredientes</th>
                <th>Masa</th>
                <th>Especial</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php
            foreach ($_SESSION['pizzas'] as $pizza ){ ?>
                <tr>
                    <td><?= $pizza->getImg(); ?></td>
                    <td><?= $pizza->getNombre(); ?></td>
                    <td><?= implode(", ", $pizza->getIngredientes()); ?></td>
                    <td><?= $pizza->getMasa(); ?></td>
                    <td><?= $pizza->getEspecial(); ?></td>
                    <td><?= $pizza->getPrecio(); ?></td>
                    <td><input type="number" name="cantidad"></td>
                    <td>
                        <form action='./index.php' method='post'>
                            <input type="hidden" name="pizza" value=<?= $pizza->getNombre();?> >
                            <input type="submit" value="Añadir">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php }?>
        <!-- include footer -->
    </body>
</html>

