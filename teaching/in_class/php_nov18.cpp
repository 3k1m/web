<?php
  $elements = [1=>2, 'cat'=>'dog'];

foreach($elements as $k=>$v){
	echo $k, '--', $v, '<br/>';	
}


  $arr = [1,2,3,4,5,6,7,8,9,10];
 
foreach($arr as &$i){
	$i *= 2;	
}

echo $i, '<br/>';

unset($i); // do this or get weird array not printing 2nd last el

//echo $i;

foreach($arr as $i){
	echo $i, '<br/>';	
}

unset($i);

foreach($arr as $i):
  echo $i;
  echo '<br/>';
  
  if($i === 14):
    echo 'is fourteen!';
    echo '<br/>';
  elseif($i===8):
    echo 'is eight!';
    echo '<br/>';
  else:
    echo '<br/>';
  endif;

endforeach;
