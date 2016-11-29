<?php
session_start();
include('httpful.phar');
if($_POST["email"] != null && $_POST["password"] != null){
	$login_array = array('EA_EMAIL_ADRESS_USER' => $_POST["email"], 'PW_PASSWORD_USER' =>$_POST["password"]);
	$url = "localhost/autopark/server/TB_USER/login";

	$body = json_encode($login_array);
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   
	$array = json_decode($response->body, true)[0];
	//var_dump(json_decode($response->body, true));
	
	
	
	if(!empty($array) && $array["EA_EMAIL_ADRESS_USER"] == $_POST["email"] && $array["PW_PASSWORD_USER"] == $_POST["password"]){
 		$_SESSION["id"] = $array["ID_USER"];
 		$_SESSION["name"] = $array["FN_FULL_NAME_USER"];
 		$_SESSION["email"] = $array["EA_EMAIL_ADRESS_USER"];
 		$_SESSION["birthdate"] = $array["BI_BIRTHDATE"];
 		$_SESSION["phone"] = $array["PH_PHONE_USER"];
 		$_SESSION["password"] = $array["PW_PASSWORD_USER"];
 		$_SESSION["status"] = $array["ST_STATUS_USER"];
 		


		header("Location: views/profile.php");
	}
	else{
		echo('<script type="text/javascript">
            alert("Login or password incorrect! Try again");
           	 window.location.href ="index.html";
            </script>');
		
	}
}
?>