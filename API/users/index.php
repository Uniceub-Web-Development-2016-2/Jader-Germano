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
//function resultQuery($arr){
	if (count($arr) > 0) {
//		$result="";
		foreach($arr as $item) { 
// $result.= 
	    	echo 'ID: '.$item['ID_USER'].'<br>Nome: '.$item['FN_FULL_NAME_USER'].'<br>'.'E-mail: '.$item['EA_EMAIL_ADRESS_USER'].'<br>'.' Data de Nasc.: '.$item['BI_BIRTHDATE'].'<br>'.'Celular: '.$item['PH_PHONE_USER'].'<br><br>';
		}
//		return $result;
	} else {
//		return 
		echo '<br> Pesquisa nao retornou nenhum resultado. <br>';
	}
//}
// echo json_encode(resultQuery(utf8_converter($controller->execute())));
	