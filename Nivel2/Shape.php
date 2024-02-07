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

    public function __construct (float $base,float $alto){ 
        $this->base = $base; 
        $this->alto = $alto;
    }
    public function get_base (){ 
        return $this->base; 
    } 
    public function get_alto (){
        return $this->alto; 
    }
    abstract public function calcularArea() : float;
}
?>
</body>
</html>