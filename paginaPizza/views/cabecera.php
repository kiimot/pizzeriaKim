
<!-- Navbar (sit on top) -->
<div>
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="./index.php" class="w3-bar-item w3-button"><b>HOT </b> pizza</a>
        <!-- Float links to the right. Hide them on small screens -->
            <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <a href="panelPedido.php" class="w3-bar-item w3-button"> <?= count($_SESSION['pizzas']);?> Selecciones </a>
        </div>
    </div>
</div>
