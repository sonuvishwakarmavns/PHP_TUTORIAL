<?php
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function display() {
        echo "Name: {$this->name}, Email: {$this->email}<br>";
    }
}

$user = new User("John Doe", "john@example.com");

// Serialize the object
$serializedUser = serialize($user);
echo "Serialized User: " . $serializedUser . "<br>";

// Unserialize the object
$unserializedUser = unserialize($serializedUser);
$unserializedUser->display();
?>
