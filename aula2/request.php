<?php		

class Request{
	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;

	public function __construct($protocol, $ip, $resource, $parameters, $method){
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->parameters = $parameters;
		$this->method = $method;
	}
	
	public function toString(){

	$request = $this->$protocol."://".$this->ip."/".$this->resourse."/";
                foreach($this->params_arr as $key => $param){
			$request .= $key."=".$param;
                }
                return utf8_encode($request);
	} 	

	public function setMethod($method){
		$this->method = $method;
	}	
	public function getMethod(){
		return $method;
	}

	public function setProtocol($protocol){
               $this->protocol = $protocol;
        }
        public function getProtocol(){
                return $protocol;
       	}
	public function setIP($ip){
                $this->ip = $ip;
        }
        public function getIP(){
                return $ip;
        }

        public function setResource($resource){
                $this->resource = $resource;
        }
        public function getResource(){
                return $resource;
        }
	

        public function setParameters($parameters){
                $this->parameters = $parameters;
        }
        public function getParameters(){
                return $method;
        }

}
$request = new Request("http","127.0.0.1/8","resource",array("pesquisa1","pesquisa2","pesquisa3"),"GET");
echo $request->toString();
