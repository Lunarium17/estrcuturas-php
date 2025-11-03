<?php
// index.php-
include 'includes/header.php'; // Incluimos el encabezado
?>
        
<h2>¡Bienvenidos a nuestro Mini Sitio WEb en PHP!</h2>

<div class="ejemplo">
    <h3>Fecha de Hoy</h3>
    <p>A continuacion mostramos un pequeño ejemplo de uso de la función date() en PHP.</p>
    
    <div class="resultado">
        <p>
            <?php
            // Saludo de bienvenida
            echo "¡Hola, equipo de desarrollo! ";
            
            // Mostrar la fecha y hora actual (zona horaria definida en header.php)
            echo "Hoy es: <strong>" . date("l, d \d\e F \d\e Y") . "</strong>. ";
            echo "La hora actual es: <strong>" . date("h:i:s A") . "</strong>.";
            ?>
        </p>
    </div>
</div>

<div class="ejemplo">
    <h3>Descripción del Sitio</h3>
    <p>En este sitio encontrarás ejemplos prácticos de las principales estructuras de control y manejo de arreglos en PHP.</p>
    <p>Utiliza el menú de navegación para explorar las siguientes secciones:</p>
    <ul>
        <li><strong>Condicionales:</strong> Ejemplos de <code>if</code>, <code>else</code>, <code>elseif</code> y <code>switch</code>.</li>
        <li><strong>Bucles:</strong> Ejemplos de <code>for</code>, <code>while</code> y <code>foreach</code>.</li>
        <li><strong>Arreglos:</strong> Ejemplos de arreglos indexados, asociativos y multidimensionales.</li>
    </ul>
</div>

<?php
include 'includes/footer.php'; // Incluimos el pie de página
?>