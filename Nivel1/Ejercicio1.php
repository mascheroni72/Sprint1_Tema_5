<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Animal {
        private string $pet;
        
        public function __construct(string $pet) {
            $this->pet = $pet;
        }
        public function makeSound() {
            if ($this->pet == "cat") {
                echo "miau, miau";
            } else if ($this->pet == "dog") {
                echo "guau, guau";
            }
        }
    }
    $cat = new Animal("cat", "miau"); 
    $dog = new Animal("dog", "guau"); 

    echo "I'm Tomas the cat and I say: ";
    $cat->makeSound ();
    echo "<br>";
    echo "I'm a dog, Mendieta, and I also speak: ";
    $dog->makeSound ();
    ?>
</body>
</html>