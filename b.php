<?php
echo "this is b.php";
foreach ($products as $key=>$val) {
	for ($i=0; $i<count($val); $i++) {
		echo "name is " $val[$i];
		echo "$key:$val";
	}
}
echo "the end"
