<?php
  $x = [1,2,3,4,5];
  var_dump($x);
  unset($x[2]);
echo '<br/>';
  var_dump($x);


function inc1($a) { ++$a; }

function inc2(&$b) { ++$b; }

function &inc3(&$c) { ++$c; return $c; }

  $y = 300;
  inc1($y);
  $z = 400;
  inc2($z);
  $w = 500;
  inc3(inc3($w));

echo '<br/>', $y, ' ', $z, ' ', $w, '<br/>';


// will not work
/*function printw(){
  echo $w;	
} */

function printw(){
  global $w;
	echo $w, '<br/>';	
}
printw();

function changey(){
  $GLOBALS['y'] = 9;
  $GLOBALS['abc'] = 'hello';
}

changey();

echo $y, ' ', $GLOBALS['y'], ' ', $abc, '<br/>';
echo '<br/>', '<br/>', '<br/>';

$arr = [1,2,3];

// === compares memory they reference
function foo($a){
	global $arr;
	echo (int) ($a === $arr), ' ';
	$a[] = 'now we copy';
	echo (int) ($a === $arr);
}

foo($arr);

var_dump($arr);


$reveal_deep_dark_secret = false; // don’t share it!!!
if( reveal_deep_dark_secret ) {
echo 'revealing secret now...';
}
