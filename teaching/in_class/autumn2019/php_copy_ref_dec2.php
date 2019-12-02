<?php
class Foo{
  var $i;
	function __construct($j) { $this->i = $j; }	
}

function manip($a){
  global $arr;

	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}

++$a[0];
	
	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
++$a[1]->i;
	
	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
$a[1] = new Foo(5);
	
	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
++$a[2];

	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
++$a[3];

	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
++$a[4]->i;
	
	if($a===$arr){ echo 'REFERENCE<br/>'; }
	else{ echo 'COPY<br/>';}
	
}

$f = new Foo(1);
$a = 12;
$b = 14;
$c = 20;
$g = new Foo(3);

// try replacing $f below with &$f !
$arr = [&$a, $f, $b, &$c, $g];

manip($arr);

echo "END VALUES:<br/>a: $a<br/>";
echo "b: $b<br/>arr: $arr[0], {$arr[1]->i}, $arr[2]<br/>";
echo "c: $c<br/>f: $f->i, g: $g->i";
?>
