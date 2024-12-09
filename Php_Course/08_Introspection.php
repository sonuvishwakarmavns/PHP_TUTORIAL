<?php
class MyClass {
    public $property1;
    private $property2;

    public function __construct($prop1, $prop2) {
        $this->property1 = $prop1;
        $this->property2 = $prop2;
    }

    public function myMethod() {
        return "Hello, World!";
    }
}

$obj = new MyClass("value1", "value2");

// Using introspection to get class information
echo "Class name: " . get_class($obj) . "<br>";
echo "Methods: " . implode(', ', get_class_methods($obj)) . "<br>";

$reflect = new ReflectionClass($obj);
echo "Properties: ";
foreach ($reflect->getProperties() as $property) {
    echo $property->getName() . " ";
}
echo "<br>";
?>
