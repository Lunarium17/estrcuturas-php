<?php
// arreglos.php
include 'includes/header.php';
?>
        
<h2>Manejo de Arreglos (Arrays)</h2>
<p>Los arreglos son variables especiales que pueden almacenar múltiples valores en una sola variable.</p>

<div class="ejemplo">
    <h3>Ejemplo 1: Arreglo Indexado</h3>
    <p>Un arreglo simple donde cada valor tiene un índice numérico (empezando en 0). Usamos <code>count()</code> para saber su longitud y <code>for</code> para recorrerlo.</p>
    <pre><code>
$integrantes = [
    "Victor Armando Gámez Vázquez",
    "Alejandro Salazar Morales",
    "Alejandra Lizeth Ruíz Juárez",
    "Miguel Alvarado Gamboa"
];

echo "El equipo tiene " . count($integrantes) . " integrantes:";
echo "<ul>";
for ($i = 0; $i < count($integrantes); $i++) {
    echo "<li>Integrante " . ($i + 1) . ": " . $integrantes[$i] . "</li>";
}
echo "</ul>";
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <?php
        $integrantes = [
            "Victor Armando Gámez Vázquez",
            "Alejandro Salazar Morales",
            "Alejandra Lizeth Ruíz Juárez",
            "Miguel Alvarado Gamboa"
        ];
        
        echo "El equipo tiene " . count($integrantes) . " integrantes:";
        echo "<ul>";
        for ($i = 0; $i < count($integrantes); $i++) {
            echo "<li>Integrante " . ($i + 1) . ": " . $integrantes[$i] . "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 2: Arreglo Asociativo</h3>
    <p>Usamos "llaves" (claves) personalizadas en lugar de índices numéricos. Usamos <code>foreach</code> para recorrerlo obteniendo la llave y el valor.</p>
    <pre><code>
$materia = [
    "clave" => "WEB-101",
    "nombre" => "Programación Web",
    "semestre" => 5
];

echo "<h4>Detalles de la materia:</h4>";
echo "<ul>";
foreach ($materia as $llave => $valor) {
    echo "<li><strong>" . ucfirst($llave) . ":</strong> " . $valor . "</li>";
}
echo "</ul>";
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <?php
        $materia = [
            "clave" => "WEB-101",
            "nombre" => "Programación Web",
            "semestre" => 5
        ];
        
        echo "<h4>Detalles de la materia:</h4>";
        echo "<ul>";
        foreach ($materia as $llave => $valor) {
            echo "<li><strong>" . ucfirst($llave) . ":</strong> " . $valor . "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>

<div class="ejemplo">
    <h3>Ejemplo 3: Arreglo Multidimensional (Opcional)</h3>
    <p>Un arreglo que contiene otros arreglos (en este caso, asociativos). Lo recorremos con un <code>foreach</code> y usamos condicionales <code>if</code> para mostrar el stock.</p>
    <pre><code>
$productos = [
    ["nombre" => "Laptop Gamer", "precio" => 25000, "stock" => 10],
    ["nombre" => "Mouse Óptico", "precio" => 450, "stock" => 0],
    ["nombre" => "Teclado Mecánico", "precio" => 1200, "stock" => 5]
];

echo "<h4>Lista de Productos:</h4>";
echo "<ul>";
foreach ($productos as $producto) {
    echo "<li>";
    echo $producto['nombre'] . " - Precio: $" . $producto['precio'];
    
    // Usamos un condicional DENTRO del bucle
    if ($producto['stock'] > 0) {
        echo " <span class='stock'>(En stock: " . $producto['stock'] . ")</span>";
    } else {
        echo " <span class='agotado'>(Agotado)</span>";
    }
    echo "</li>";
}
echo "</ul>";
    </code></pre>
    <div class="resultado">
        <strong>Resultado:</strong>
        <?php
        $productos = [
            ["nombre" => "Laptop Gamer", "precio" => 25000, "stock" => 10],
            ["nombre" => "Mouse Óptico", "precio" => 450, "stock" => 0],
            ["nombre" => "Teclado Mecánico", "precio" => 1200, "stock" => 5]
        ];
        
        echo "<h4>Lista de Productos:</h4>";
        echo "<ul>";
        foreach ($productos as $producto) {
            echo "<li>";
            echo $producto['nombre'] . " - Precio: $" . $producto['precio'];
            
            // Usamos un condicional DENTRO del bucle
            if ($producto['stock'] > 0) {
                echo " <span class='stock'>(En stock: " . $producto['stock'] . ")</span>";
            } else {
                echo " <span class='agotado'>(Agotado)</span>";
            }
            echo "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>

<?php
include 'includes/footer.php';
?>