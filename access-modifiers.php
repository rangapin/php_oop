<?php

/*There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
*/

class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>