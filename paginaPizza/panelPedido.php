<html>
    <head>
        <title>HotPizza</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css"/>
    </head>
    <body>
        <!-- include cabecera -->
        <?php require_once './views/includes/loadObjects.php';
        session_start();?>
        <?php require_once './views/cabecera.php'; ?>
        <div class="w3-container w3-padding-32">
        <?php
        if (!empty($_SESSION['pizzas'])){?>
            <table id="customers">
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
                    <?php if ($pizza->getEspecial()){
                        echo '<td>Sí</td>';
                    }else{
                        echo '<td>No</td>';
                    } ?>
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