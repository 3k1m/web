<?php
/*  $x = [10,9,8,7,6];
  unset($x[2]);

  $x = array_values($x);

for($i=0; $i<count($x); ++$i){
	echo $x[$i], '<br/>';	
}

function foo($x=NULL){ }

foo(); */


/*
$x = 25;
$y = 600;

function print_x_y(){
  global $x;
  echo $x, ' ', $GLOBALS['y'], ' ';
  $GLOBALS['z'] = $x;
}

print_x_y();

echo $z;

$tell_secret = false;

if( tell_secret ) {
	echo '<br/>', 'PIC 40A IS AWESOME!', '<br/>';
}

$x_less_y = $x < $y;

if($xless_y){
  echo 'x less than y';	
}
else{
  echo 'x not less than y';
} */


$opp = ['cat'=>'dog', 'happy'=>'sad', 'green'=>'red'];

foreach($opp as $k=>&$v){
  echo $k, '=>', $v, ' ';
  $v = $v . '!';
}
echo '<br/>';

foreach($opp as $k=>&$v){
  echo $k, '=>', $v, ' ';
}
echo '<br/>';

$nums = [1,2,3,4,5];

foreach($nums as &$i){
  ++$i;
}

for($i=0; $i < count($nums); ++$i){
  echo $nums[$i], ' ';
}
?>
