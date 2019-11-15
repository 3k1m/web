<?php

$x = [1,2,3];
$x['cat'] = 'dog';
$x[] = 123;
var_dump($x);

$y = ['a', 'b', 'c'];
array_push($x,$y,'d');

var_dump($x);

$x = true;
echo $x, "\n";
$x = false;
echo $x, "\n";

if("4.3 hello" == 4.3){
    echo "are they equal";
}

if("hello world" == 0){
    echo 'this ain\'t good';
}

if(0 == 0.0){
  echo 'they SHOULD be';

}

$arr = [2,'yellow',9.9999];
$str = implode('---', $arr);
echo $str;

$str = 'a b c d e';
$arr = explode(' ', $str);
var_dump($arr);


$x = 'abcdefghij';

$x[0] = 'A';

echo $x;


//echo strlen($x) . "\n";
//echo substr($x,3) . "\n";
//echo substr($x,3,2) . "\n";
//echo $x[5] . "\n";

$i = strpos($x,'defg');
echo $i;

$j = strpos($x,'a');

if($j !== false){
    echo 'found!';
}


/*$x = 'hello';
$y = ' how are you?';

echo $x . $y . "\n";

echo 1 . 2 * 3; */





// Your code here!
/*$x = 10;
$x = 9.8;
$x = TruE;
echo gettype($x) . "\n";

$x = 1;
++$x;
echo $x++ . "n";

$day = 'Wed';

$s1 = "hello world. Today is $day";
$s2 = 'hello world. Today is $day';

echo $s1 . 'n' . $s2 . "n";

echo 'hi' . ' how goes?';

/*const y = 111;

if(y){
 echo 'test';   
} */



?>
