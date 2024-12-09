<?php
// Superclass
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sound() {
        return "Some generic animal sound";
    }
}

// Subclass
class Dog extends Animal {
    public $breed;

    public function __construct($name, $breed) {
        parent::__construct($name);  // Call the parent constructor
        $this->breed = $breed;
    }

    public function sound() {
        return "Bark";
    }

    public function display() {
        echo "This is a {$this->breed} named {$this->name} and it makes the sound: " . $this->sound();
    }
}

// Create an instance of Dog
$myDog = new Dog("Buddy", "Golden Retriever");
$myDog->display();
?>
