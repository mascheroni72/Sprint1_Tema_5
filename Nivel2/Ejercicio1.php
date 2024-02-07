<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once 'Triangulo.php';
include_once 'Rectangulo.php'; 

$triangulo = new Triangulo(4.8, 7.3); 
$rectangulo = new Rectangulo (8.4, 4.2);

echo " El triángulo tiene un área de " . $triangulo-> calcularArea();  
echo "<br>";
echo "Mientras que el área del rectángulo es " . $rectangulo-> calcularArea();
?>
</body>
</html>
