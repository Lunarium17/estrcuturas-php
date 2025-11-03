<?php
// includes/menu.php

// Esta variable $paginaActual se crea en header.php
// y la usamos aquí para saber qué enlace resaltar.
?>
<nav class="main-nav">
    <ul>
        <li><a href="index.php" class="<?php echo ($paginaActual == 'index.php') ? 'active' : ''; ?>">Inicio</a></li>
        <li><a href="condicionales.php" class="<?php echo ($paginaActual == 'condicionales.php') ? 'active' : ''; ?>">Condicionales</a></li>
        <li><a href="bucles.php" class="<?php echo ($paginaActual == 'bucles.php') ? 'active' : ''; ?>">Bucles</a></li>
        <li><a href="arreglos.php" class="<?php echo ($paginaActual == 'arreglos.php') ? 'active' : ''; ?>">Arreglos</a></li>
    </ul>
</nav>