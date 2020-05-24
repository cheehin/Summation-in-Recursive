<?php
//return the sum of all elements in the array of numbers
	function findsum($a, $n){		
		return ($n==0)?$a[0]:$a[$n-1]+findsum($a,$n-1);
	}	

?>