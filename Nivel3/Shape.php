<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
abstract  class Shape { 
    protected float $base; 
    protected float $alto;
    protected const PI = 3.14159; 
    protected float $radio;

    public function __construct (float $base,float $alto, float $radio){ 
        $this->base = $base; 
        $this->alto = $alto;
        $this->radio = $radio;
    }
    public function get_base (): float { 
        return $this->base; 
    } 
    public function get_alto (): float {
        return $this->alto; 
    }
    public function get_PI (): float {
        return self::PI;
    }
    public function get_radio (): float {
        return $this->radio;
    }
    abstract public function calcularArea(): float;
}
?>
</body>
</html>