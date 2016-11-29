<?php
class Request{
    
    private $method;
    private $protocol;
    private $server_ip;
    private $remote_ip;
    private $resource;
    private $params;
    private $body;
    private $operation;
    
    public function __construct($method, $protocol, $server_ip, $remote_ip, $resource, $params, $body){
        $this->method = $method;
        $this->protocol = $protocol;
        $this->server_ip = $server_ip;
        $this->remote_ip = $remote_ip;
        $this->setResource($resource);
        $this->setParams($params);
        $this->body = $body;
        $this->setOperation($resource);
    }
    //GETS & SETS
    public function setMethod($method){
        $this->method = $method;
    }
    public function getMethod(){
        return $this->method;
    }
    public function setProtocol($protocol){
        $this->protocol = $protocol;
    }
    public function getProtocol(){
        return $this->protocol;
    }
    public function setServerIp($server_ip){
        $this->server_ip = $server_ip;
    }
    public function getServerIp(){
        return $this->server_ip;
    }
    public function setRemoteIp($remote_ip){
        $this->remote_ip = $remote_ip;
    }
    public function getRemoteIp(){
        return $this->remote_ip;
    }
    public function setResource($resource){
        $s = explode("?", $resource);
        $r = explode("/", $s[0]);
        $this->resource = $r[3];
    }
    public function getResource(){
        return $this->resource;
    }
    public function setParams($params){
        parse_str($params, $paramsArray);
        $this->params = $paramsArray;
    }
    public function getParams(){
        return $this->params;
    }
    public function setBody($body){
        $this->body = $body;
    }
    public function getBody(){
        return $this->body;
    }
    public function setOperation($resource){
        $s = explode("?", $resource);
        $r = explode("/", $s[0]);
        $this->operation = $r[4];   
    }
    public function getOperation(){
        return $this->operation;
    }
}