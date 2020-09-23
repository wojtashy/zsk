<?php
//wersja php
echo PHP_VERSION,'<br>';
//echo phpinfo(),'<br>';
//interpolacja
echo 'a','b','c';//wyswietla a b i c
echo 'a'.'b'.'c';// doda a b i c
//potęgowanie
$pot = 2**10;
echo "$pot, <br>";//1024
$bin=0b1010;
echo "$bin<br>";
$bin = $bin <<2;
echo "$bin<br>"; //40
$bin = $bin>>3;
echo "$bin";
//porównywanie
$x =1;
$y =1.0;
if ($x==$y){
  echo  "Zmienna $x jest równa $y <br>";
}
else {
  echo  "Zmienna $x nie jest równa $y <br>";
}
 echo gettype($x);
 echo gettype($y);
 if ($x==$y){
   echo  "<br>Zmienna $x jest identyczna $y <br>";
 }
 else {
   echo  "Zmienna $x nie jest identcyzna $y <br>";
 }
 $y =100;
 $x= 1;
echo $x <=> $y;
$x=$x++;
echo '<br>';
echo $x;// 10
echo '<br>';
$x=++$x;
echo $x;// 11
echo '<br>';
$y=$x++;
echo $x;// 12
echo '<br>';
echo $y;// 11
echo '<br>';
$y=++$x*2-1;
echo $x;// 13
echo '<br>';
echo $y;// 25
$test1 = '123abc4';
$test2 = 0;
$test3 = 20;
echo "<br> Typ danych test1 to: " ,gettype($test1);
echo '<br>';
$test1 =(int)$test1;
echo '<br> $test1 <br>';
echo `Typ danych test1: `, gettype($test1);
echo '<br> Typ danych test1 to: ' ,gettype($test1);
echo '<br>';
$test1 =(bool)$test1;
echo '<br> $test1 <br>';
echo `Typ danych test1: ` ,gettype($test1);
getType($test2);
echo '<br>';
getType($test3);
//rozmiar typu integer
echo PHP_INT_SIZE, '<hr>'; //8

//kontrola typu zmiennych
//is_int(), is_float(), is_numeric(), is_bool(), is_null()
$x=1;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
$y;
echo is_null($y);
$w;
echo $w;
// @-operator ignorowNIA błędóww
echo @gettype($w);
 ?>
