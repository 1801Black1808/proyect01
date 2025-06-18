<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller de Ciclos y Arreglos en PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #e6f2ff;
            color: #333;
        }

        header {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

        main {
            padding: 30px;
            max-width: 900px;
            margin: auto;
        }

        h3 {
            color: #004080;
            margin-top: 40px;
            border-bottom: 2px solid #0073e6;
            padding-bottom: 5px;
        }

        .bloque {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0, 64, 128, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bloque:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 64, 128, 0.2);
        }

        br {
            line-height: 2;
        }
    </style>
</head>
<body>

<header>
    <h1>Taller de Ciclos y Arreglos en PHP</h1>
</header>

<main>

<?php

echo "<h3>Ejercicio 1 – Array Indexado</h3>";
echo "<div class='bloque'>";
$colores = ["Rojo", "Verde", "Azul", "Amarillo", "Morado"];
for ($i = 0; $i < count($colores); $i++) {
    echo "Color $i: " . $colores[$i] . "<br>";
}
echo "</div>";

echo "<h3>Ejercicio 2 – Array Asociativo</h3>";
echo "<div class='bloque'>";
$persona = [
    "nombre" => "Jonny",
    "Apellido" => "Abel",
    "Edad" => 20,
    "ciudad" => "Guaquil",
    "profesion" => "Estudiante del ISTG"
];
echo "Nombre: " . $persona["nombre"] . "<br>";
echo "Apellido: " . $persona["Apellido"] . "<br>";
echo "Edad: " . $persona["Edad"] . "<br>";
echo "Ciudad: " . $persona["ciudad"] . "<br>";
echo "Profesión: " . $persona["profesion"] . "<br>";
echo "</div>";

echo "<h3>Ejercicio 3 – Lista de productos</h3>";
echo "<div class='bloque'>";
$productos = [
    ["codigo" => "ABC1", "nombre" => "Arroz", "precio" => 1.55, "stock" => 15],
    ["codigo" => "ABC2", "nombre" => "Azucar", "precio" => 1.35, "stock" => 25],
    ["codigo" => "ABC3", "nombre" => "Aceite", "precio" => 1.25, "stock" => 10]
];
foreach ($productos as $producto) {
    echo "Código: " . $producto["codigo"] . "<br>";
    echo "Nombre: " . $producto["nombre"] . "<br>";
    echo "Precio: $" . $producto["precio"] . "<br>";
    echo "Stock: " . $producto["stock"] . "<br><br>";
}
echo "</div>";

echo "<h3>Ejercicio 4 – Ciclo while</h3>";
echo "<div class='bloque'>";
$numero = 1;
while ($numero <= 10) {
    echo $numero . "<br>";
    $numero++;
}
echo "</div>";

echo "<h3>Ejercicio 5 – Ciclo do...while</h3>";
echo "<div class='bloque'>";
$valor = 5;
do {
    echo "Intento: $valor <br>";
    $valor++;
} while ($valor <= 15);
echo "</div>";

echo "<h3>Ejercicio 6 – Ciclo for</h3>";
echo "<div class='bloque'>";
for ($i = 3; $i <= 30; $i += 3) {
    echo $i . "<br>";
}
echo "</div>";

echo "<h3>Ejercicio 7 – Ciclo foreach</h3>";
echo "<div class='bloque'>";
$desayunos = [
    "Lunes" => "cereal con yogurt",
    "Martes" => "sánduche con jugo de naranja",
    "Miércoles" => "huevo con tocino",
    "Viernes" => "cereal con leche",
    "Sábado" => "cereal con fruta y yogurt",
    "Domingo" => "cereal con fruta y yogurt"
];
foreach ($desayunos as $dia => $comida) {
    echo "Los $dia desayuno $comida.<br>";
}
echo "</div>";

?>

</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Taller PHP - Desarrollado por Jonny Acosta</p>
</footer>

</body>
</html>
