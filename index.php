<?php

  $obj = new main();
  $text = "my text";
  $texta = "My  Name is HEBA";
  $cars=array("Volvo","BMW","Toyota");
  $array = array(1,2,3,4,5,6,7);
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

  
  

  $obj->printArray($array);
$obj->sumArray($array);
$obj->LengthArray($cars);
$obj->SortArray($cars);
$obj->ArrayProduct($array);
$obj->ArrayFlip($a1);
$obj->ArrayPop($array);
$obj->ArrayReverse($array);
$obj->ArrayShift($array);
$obj->ArrayValues($array);
$obj->printthis($text);
$obj->wordcount($text);
$obj->charscount($text);
$obj->lengthstring($text);
$obj->stringexplode($text);
$obj->upperstring($text);
$obj->firstupperstring($text);
$obj->lowerstring($texta);
$obj->firstlowerstring($texta);
$obj->firstwordupper($text);
  class main {

   public function __construct() {

      echo 'String and Array Function</br>';

    }

   
    public function printArray($array) {
      echo '<h1>array print function</h1>';
      print_r($array);
      echo '<hr>';
    }

    public function sumArray($array)
    {
      echo '<h1>Addition of array</h1>';
      echo array_sum($array);
      echo '<hr>';
    }

    public function LengthArray($cars)
    {
      echo '<h1>Length of Array</h1>';
      echo count($cars);
      echo '<hr>';
    }
    public function SortArray($cars)
    {
      echo '<h1>Sort Array</h1>';
      sort($cars);
      print_r($cars);
      echo '<hr>';
    }
    public function ArrayProduct($array){
      echo '<h1>Product of Array</h1>';
      echo array_product($array);
      echo '<hr>';
    }

    public function ArrayFlip($a1){
      echo '<h1>Flip an Array</h1>';
      $resultflip = array_flip($a1);
      print_r($resultflip);
      echo '<hr>';
    }

    public function ArrayPop($array){
    echo '<h1>Remove the last element</h1>';
    array_pop($array);
    print_r($array);
    echo '<hr>';
  }

  public function ArrayReverse($array)
  {
    echo '<h1> Reverse an Array</h1>';
    array_reverse($array);
    print_r($array);
    echo '<hr>';
  }
  public function ArrayShift($array)
  {
    echo '<h1> Delete the first element</h1>';
    array_shift($array);
    print_r($array);
    echo '<hr>';
  }

  public function ArrayValues($array){
    echo '<h1> Returns all the value of the array</h1>';
    array_values($array);
    print_r($array);
    echo '<hr>';
  }
  
 public function printthis($text) {
      echo '<hr>';
      echo '<h1>print function</h1>';
      print($text);
      echo '<hr>';
    }

public function wordcount($text){
  echo '<h1>Word count of a string</h1>';
  echo str_word_count($text);
  echo '<hr>';
}

public function charscount($text){
  echo '<h1> Character count of a string</h1>';
  print_r(count_chars($text,1));
  echo '<hr>';
}
public function lengthstring($text){
  echo '<h1> Length of String</h1>';
  echo strlen($text);
  echo '<hr>';
}
public function stringexplode($text){
  echo '<h1> Break a string into Array</h1>';
  print_r (explode(" ",$text));
  echo '<hr>';
}

public function upperstring($text){
  echo '<h1> Convert string to upper case</h1>';
  echo strtoupper($text);
  echo '<hr>';
}
public function firstupperstring($text){
  echo '<h1> Convers the first character to upper case</h1>';
  echo ucfirst($text);
  echo '<hr>';
}
public function lowerstring($texta){
  echo '<h1> Conver all the characters to lower case</h1>';
  echo strtolower($texta);
  echo '<hr>';
}
public function firstlowerstring($texta){
  echo '<h1> Convert first character to lower case</h1>';
  echo lcfirst($texta);
  echo '<hr>';
}
public function firstwordupper($text){
echo '<h1> Convert first word to upper case</h1>';
echo ucfirst($text);
echo '<hr>';
}
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>