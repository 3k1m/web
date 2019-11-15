<?php

$glob = 100;
$glob2 = 200;

function bar(){
  global $glob;
  echo $glob, "<br/>";	
	echo $GLOBALS['glob2'], "<br/>";
	# $glob_copy = $glob; //	NOT WORK
  $GLOBALS['glob_copy'] = $glob;
}

bar();

echo $glob_copy, "<br/>";


function baz(){ // functions define a proper scope
	
	if(true){ // $x breaks out of its scope
		// for if, else, while, do, ...
	  $x = 90;	
	}
	echo $x, "<br/>";
	
}

baz();

echo $x, "<br/>";

for($i = 1; $i <= 100; ++$i){
  echo $i, ' ';	
}

echo "<br/>";


function foo($arr){
  array_push($arr, 999);
  $arr[0]++;
  $arr[1]++;	
}

$x = 4;
$y = 9;

$a = [&$x, $y];

foo($a);

echo $x, ' ', $y;


// Your code here!
/*$x = false;
if(x){ // should have $x
  echo 'should not be printing this' ,"\n";
    
}

if($should_do_this){
    echo 'doing what should be done', "\n";
}
else{
    echo 'should not do this', "\n";
} */
