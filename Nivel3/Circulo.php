<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once 'Shape.php';
class Circulo extends Shape {
    public function calcularArea(): float {
    $areaCir = self::PI * $this->radio * $this->radio;
        return $areaCir;
    }
}
?>
</body>
</html>