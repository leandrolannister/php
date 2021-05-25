<?php 

function exibeFilme($filme = ""){
	if(8 == '8 Mile'){
		$result = true;
	}else {
		$result = false;
	}

	echo $result;
}

echo exibeFilme();