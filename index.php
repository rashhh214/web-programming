<?php
echo "Hello, World!";

?>

<br>

<?php
$x = 15;
$y = 3;
$sum = $x + $y;
echo "The sum is $sum.";
?>

<?php
      for($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
         echo "$i<br>";
          
      }
        }

        ?>

        <br>
        <h3> My first PHP Program <h3>

   

<?php
    
    $products = array("Product A", "Product B", "Product C", "Product D", "Product E", "Product F");
    var_dump($products);
?>

<?php
    
    $products = array("Product A", "Product B", "Product C", "Product D", "Product E", "Product F");
    echo $products[0];
?>

<?php
    
    $products = array("Product A", "Product B", "Product C", "Product D", "Product E", "Product F");
    $products[1] = "Product D";
    var_dump($products);
?>

<?php
    
    $products = array("Product A", "Product B", "Product C", "Product D", "Product E", "Product F");
    foreach ($products as $p) {
        echo "$p <br>";
    }
?>

<?php
    $products = array(
        array("name" => "Product A", "price" => 10.50, "stock" => 12),
        array("name" => "Product B", "price" => 5.60, "stock" => 7),
        array("name" => "Product C", "price" => 7.00, "stock" => 5),
        array("name" => "Product D", "price" => 12.30, "stock" => 9),
        array("name" => "Product E", "price" => 8.45, "stock" => 15),
        array("name" => "Product F", "price" => 6.20, "stock" => 3)
    );
?>





 


