ass Request{
        private $method;
        private $protocol;
        private $server_ip;
        private $remote_ip;
        private $resource;
        private $params;

        public function __construct($protocol, $server_ip, $remote_ip, $resource, $params, $method){
                $this->protocol = $protocol;
                $this->server_ip = $server_ip;
                $this->remote_ip= $remote_ip;
                $this->resource = $resource;
                $this->params = $params;
                $this->method = $method;
        }

        public function toString(){
                $request = "";
                $Inc = 1;
                foreach($this->params as $param) {
                        $request .= "P".$Inc."=".$param."&amp";
                        $Inc++;
        }
        return $this->protocol.'://'.$this->server_ip.'/'.$this->resource.'?'.$request;

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
        public function setServer_IP($server_ip){
                $this->server_ip = $server_ip;
        }
        public function getServer_IP(){
                return $server_ip;
        }
         public function setRemote_IP($Remote_ip){
                $this->remote_ip = $remote_ip;
        }
        public function getRemote_IP(){
                return $remote_ip;
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
$request = new Request("http","127.0.0.1/8","127.0.0.1/9","resource/jpgermano",array("pesquisa1","pesquisa2","pesquisa3"),"GET");
echo $request->toString();
                                  
