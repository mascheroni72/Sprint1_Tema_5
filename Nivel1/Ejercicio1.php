<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
abstract class Animal {
    protected string $pet;
    
    public function __construct(string $pet) {
        $this->pet = $pet;
    }
    abstract public function makeSound(): string;
}
class Cat extends Animal {
    public function makeSound(): string {
        return "miau, miau";
    }
}
class Dog extends Animal {
    public function makeSound(): string {
        return "guau, guau";
    }
}
$cat = new Cat("cat");
$dog = new Dog("dog");

echo "I'm Tomas the cat and I say: " . $cat->makeSound() . "<br>";
echo "I'm a dog, Mendieta, and I also speak: " . $dog->makeSound();
?>
</body>
</html>