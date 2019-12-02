<?php
class Foo{
	var $x;
	function __construct($i) { $this->x = $i;}
	function __destruct() { echo "destructing<br/>";}	
}

$a = new Foo(3);
$b = $a;
$c = &$a;
echo "$a->x, $b->x, $c->x<br/>";
$a = new Foo(7);
echo "$a->x, $b->x, $c->x<br/>";
$c = NULL;
echo "$b->x<br/>";
?>
