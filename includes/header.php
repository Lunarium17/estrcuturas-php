<?php
// includes/header.php

// Obtenemos el nombre del script actual para el título
$paginaActual = basename($_SERVER['PHP_SELF']);
$pageTitle = "Mini Sitio PHP"; // Título por defecto

switch ($paginaActual) {
    case "index.php":
        $pageTitle = "Inicio";
        break;
    case "condicionales.php":
        $pageTitle = "Condicionales";
        break;
    case "bucles.php":
        $pageTitle = "Bucles";
        break;
    case "arreglos.php":
        $pageTitle = "Arreglos";
        break;
}

// Configurar la zona horaria para la función date()
date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> - Proyecto PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <h1>Mini Proyecto: Estructuras de Control y Arreglos en PHP</h1>
    </header>
    
    <?php 
    // Incluimos el menú de navegación
    include 'menu.php'; 
    ?>