<?php
include_once('request.php');
include_once('db_manager.php');
class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}
	private function search($request) {
		$query = 'SELECT * FROM '.$request->getResource();
		if($request->getParameters() != null){
			$query.=' WHERE '.self::queryParams($request->getParameters());
		}
		//	var_dump($query);
		return self::select($query);  
	}

	private function select($query){
		$connect = (new DBConnector())->query($query);
		return $connect->fetchAll();

	}
		
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key;
			if(is_numeric($value)){
				$query .=" = '".$value."'"." AND ";
			}else{
				$query .=" LIKE '%".$value."%'"." AND ";
			}
		}
		$query = substr($query,0,-5);
		return $query;
	}

	private function queryParamsByString($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key." = '%".$value."%'"." AND ";	
		}
		var_dump(substr($query,0,-5));
		$query = substr($query,0,-5);
		return $query;
	}
	
}
