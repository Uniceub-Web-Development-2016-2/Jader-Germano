<?php
session_start();
include('httpful.phar');

	$url = "localhost/autopark/server/TB_USER/search?first_name="'.$_GET['search'].'"'";

	$response = \Httpful\Request::get($get_request)->send();   

	
	$array = json_decode($response->body, true);

?>