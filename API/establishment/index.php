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
	    	echo 'ID: '.$item['ID_ESTABLISHMENT'].'<br>Nome: '.$item['NA_NAME_ESTABLISHMENT'].'<br>'.'Endereço: '.$item['EA_ESTABLISHMENT_ADRESS'].' - '.' CEP: '.$item['CP_CEP_ESTABLISHMENT'].'<br>'.'Total de Vagas: '.$item['TV_VACANCIES'].'<br><br>'; 
		}
//		return $result;
	} else {
//		return 
		echo '<br> Pesquisa retornou sem resultados. <br>';
	}
//}
// echo json_encode(resultQuery(utf8_converter($controller->execute())));
	
