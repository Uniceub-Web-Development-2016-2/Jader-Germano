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
		$var = strtok($request->getResource(), '?');
		$query = 'SELECT * FROM '.str_replace("/","",$var).' WHERE '.self::queryParams($request->getParameters());
		return self::select($query);  
	}

	private function select($query){
		$connect = (new DBConnector())->query($query);
		return $connect->fetchAll();

	}
		
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '.$value.' AND ';	
		}
		$query = substr($query,0,-5);
		return $query;
	}
	
}
