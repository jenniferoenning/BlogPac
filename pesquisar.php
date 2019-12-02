<?php 
$pesquisar = filter_input INPUT_POST, 'pesquisar' , FILTER_SANITIZE_STRING);
if ($pesquisar) {
	$pesquisar = filter_input INPUT_POST, 'name' , FILTER_SANITIZE_STRING);
}
		    


?>