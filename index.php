<?php
//Primitive Type declarations
	function parse( int...$arr ){
		echo '<pre>'.json_encode($arr,JSON_PRETTY_PRINT).'</pre>';
	}

 	parse(10,'20',1.45,'456,88.08',true);

 	function testBool(bool ...$arr){
		echo '<pre>'.json_encode($arr,JSON_PRETTY_PRINT).'</pre>';
 	}

 	testBool('0','1','1.00','0.00','true','false');
