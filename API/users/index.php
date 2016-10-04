<?php
include('/opt/lampp/htdocs/API/request_controller.php');
$controller = new RequestController();

	function utf8_converter($array){
    	array_walk_recursive($array, function(&$item, $key){
        	if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
        	}
    	});
 
    return $array;
	}
	$arr = utf8_converter($controller->execute());

	if (count($arr) > 0) {
		foreach($arr as $item) { 
	    	echo 'ID: '.$item['ID_USER'].'<br>Nome: '.$item['FN_FULL_NAME_USER'].'<br>'; 
		}
	} else {
		echo '<br> Usuario nao encontrado!. <br>';
	}

	//echo json_encode(utf8_converter($controller->execute()));