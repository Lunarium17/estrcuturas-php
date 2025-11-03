<?php
// bucles.php
include 'includes/header.php';
?>
        
<h2>Estructuras Repetitivas (Bucles)</h2>
<p>Los bucles nos permiten repetir un bloque de código varias veces, comúnmente para recorrer arreglos o realizar conteos.</p>

<div class="ejemplo">
    <h3>Ejemplo 1: Bucle <code>for</code></h3>
    <p>Mostramos la tabla de multiplicar del 7.</p>
    <pre><code>
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>7 x " . $i . " = " . (7 * $i) . "</li>";
}
echo "</ul>";
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <?php
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>7 x " . $i . " = " . (7 * $i) . "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 2: Bucle <code>while</code></h3>
    <p>Lanzamos una moneda (número aleatorio) hasta que salga "Cara" (valor 1).</p>
    <pre><code>
$moneda = 0; // 0 = Cruz, 1 = Cara
$intentos = 0;

while ($moneda != 1) {
    $moneda = rand(0, 1); // Número aleatorio 0 o 1
    $intentos++;
    if ($moneda == 1) {
        echo "¡Salió Cara después de $intentos intentos!<br>";
    } else {
        echo "Salió Cruz... lanzando de nuevo.<br>";
    }
}
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <p>
            <?php
            $moneda = 0; // 0 = Cruz, 1 = Cara
            $intentos = 0;
            
            while ($moneda != 1) {
                $moneda = rand(0, 1); // Número aleatorio 0 o 1
                $intentos++;
                if ($moneda == 1) {
                    echo "<strong>¡Salió Cara después de $intentos intentos!</strong><br>";
                } else {
                    echo "Salió Cruz... lanzando de nuevo.<br>";
                }
            }
            ?>
        </p>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 3: Bucle <code>foreach</code></h3>
    <p>Recorremos un arreglo (lo veremos en detalle en la siguiente sección). Este es el bucle ideal para arreglos.</p>
    <pre><code>
$frutas = ["Manzana", "Banana", "Uva", "Naranja"];

echo "<ul>";
foreach ($frutas as $fruta) {
    echo "<li>" . $fruta . "</li>";
}
echo "</ul>";
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <?php
        $frutas = ["Manzana", "Banana", "Uva", "Naranja"];
        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li>" . $fruta . "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>

<?php
include 'includes/footer.php';
?>