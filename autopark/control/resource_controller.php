<?php
include_once('../autopark/model/request.php');
include_once('../autopark/dataBase/db_manager.php');
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

	private function create($request) {
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'INSERT INTO '.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';
		return $query;
		 
	}
	
	private function update($request) {
                $body = $request->getBody();
                $resource = $request->getResource();
                $query = 'UPDATE '.$resource.' SET '. $this->getUpdateCriteria($body);
                var_dump($query);
		die();
		return $query;
        }
	
	private function getUpdateCriteria($json){
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
			
		}
		return substr($criteria, 0, -1).$where." id = ".$array['id'];
	}
	
	private function getColumns($json){
		$array = json_decode($json, true);
		$keys = array_keys($array);
		return implode(",", $keys);
	
	}
	private function getValues($json){
                $array = json_decode($json, true);
                $keys = array_values($array);
                $string =  implode("','", $keys);
		return "'".$string."'";
        
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
