<?php
// Everything is ok for now testing git
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
 
  function get_name() {
    return $this->name;
  }
}

class MyFruit extends Fruit {
    public $weight;
    
    // Methods
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    function showAll () {
        echo $this->weight.$this->color.$this->name;
    }

    const MYMESSAGE = "Here is ok Subroto";

    public satic function testStatic() {
        echo " Fine Static.";
    }
}

$apple = new MyFruit("Apple ok", "Orange", "34");
$apple->showAll();
echo MyFruit::MYMESSAGE;
?>