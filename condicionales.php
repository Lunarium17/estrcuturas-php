<?php
// condicionales.php
include 'includes/header.php';
?>
        
<h2>Estructuras Condicionales (if, else, elseif, switch)</h2>
<p>Las estructuras condicionales nos permiten ejecutar bloques de código solo si se cumplen ciertas condiciones.</p>

<div class="ejemplo">
    <h3>Ejemplo 1: <code>if / else</code></h3>
    <p>Verificamos si un usuario (definido en una variable) es mayor de edad.</p>
    <pre><code>
$edad = 17;

if ($edad >= 18) {
    echo "Eres mayor de edad. Puedes pasar.";
} else {
    echo "Eres menor de edad. No puedes pasar.";
}
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <p>
            <?php
            $edad = 17; // Puedes cambiar este valor (ej. 20) para ver el otro resultado
            if ($edad >= 18) {
                echo "Eres mayor de edad. Puedes pasar.";
            } else {
                echo "Eres menor de edad. No puedes pasar.";
            }
            ?>
        </p>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 2: <code>elseif</code></h3>
    <p>Evaluamos la hora del día para dar un saludo apropiado.</p>
    <pre><code>
$hora = date("H"); // Obtiene la hora actual en formato 24h

if ($hora < 12) {
    $saludo = "¡Buenos días!";
} elseif ($hora < 18) {
    $saludo = "¡Buenas tardes!";
} else {
    $saludo = "¡Buenas noches!";
}
echo "La hora es " . $hora . ". " . $saludo;
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <p>
            <?php
            $hora = date("H"); // Obtiene la hora actual en formato 24h
            if ($hora < 12) {
                $saludo = "¡Buenos días!";
            } elseif ($hora < 18) {
                $saludo = "¡Buenas tardes!";
            } else {
                $saludo = "¡Buenas noches!";
            }
            echo "La hora es " . $hora . ". " . $saludo;
            ?>
        </p>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 3: <code>switch</code></h3>
    <p>Revisamos el rol de un usuario para mostrar un mensaje.</p>
    <pre><code>
$rol = "admin";

switch ($rol) {
    case "admin":
        echo "Acceso total al panel de administración.";
        break;
    case "editor":
        echo "Acceso para crear y editar contenido.";
        break;
    case "suscriptor":
        echo "Acceso solo para ver contenido.";
        break;
    default:
        echo "Rol no reconocido. Acceso denegado.";
}
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <p>
            <?php
            $rol = "admin"; // Cambia a "editor", "suscriptor" o "invitado"
            switch ($rol) {
                case "admin":
                    echo "Acceso total al panel de administración.";
                    break;
                case "editor":
                    echo "Acceso para crear y editar contenido.";
                    break;
                case "suscriptor":
                    echo "Acceso solo para ver contenido.";
                    break;
                default:
                    echo "Rol no reconocido. Acceso denegado.";
            }
            ?>
        </p>
    </div>
</div>

<?php
include 'includes/footer.php';
?>