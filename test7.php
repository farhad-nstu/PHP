

<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    /*return "{$prefix} {$name}";*/
    echo $prefix.$name;
  }
}

$class = new ChildClass;
$class->prefixName("John Doe");
echo "<br>"; 
$class->prefixName("Jane Doe");
?>
 
</body>
</html>