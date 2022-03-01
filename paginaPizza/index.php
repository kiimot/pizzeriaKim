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
            if (isset($_POST['pizza'])){
                echo 'Has seleccionado '. $_POST['pizza'];
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
        <!-- include footer -->
    </body>
</html>

