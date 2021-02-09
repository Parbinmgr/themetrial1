<?php 
$fruits = ["orange","mango","banana"];
//echo $fruits;
var_dump($fruits);
echo "<br>";
echo $fruits[1];
isset($fruits[3]);
echo "<br>";
echo count($fruits);
array_push($fruits, 'apple' );
echo "<br>" ;
var_dump($fruits);
echo "<br>" ;
var_dump(array_search( 'banana', $fruits)) ;

echo "<br>" ;
echo implode(" " , $fruits);

echo "<br>" ;

$vegetable = ["cauli","carrot"];
var_dump(array_merge($fruits,$vegetable));

echo "<br>" ;
var_dump($fruits);
echo "<br>" ;
var_dump($vegetable);

array_merge($fruits,$vegetable);

echo "<br>" ;
var_dump($fruits);


$person = [
  'name' => 'ramu' ,
  'age' =>  20,
  'gender' => 'male' 
] ;

echo "<pre>";
var_dump($person);
echo "</pre>";
 ?>