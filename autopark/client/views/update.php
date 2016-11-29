<?php
include('httpful.phar');
 var_dump($_POST);
if(!empty($_POST["id"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["name"]) && !empty($_POST["phone"])){
  var_dump($_POST);
        die();
        $url = "localhost/autopark/server/TB_USER/upadate";
        $body = json_encode($_POST);
        $response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();
        $array = json_decode($response->body, true);
        $_SESSION['firstname'] = $_POST['firstname'];
        echo('<script type="text/javascript">
            alert("information successfully updated!");
            window.location.href ="home.php";
            </script>');
}
else
    {
        header('Location: ./error/500.html');
    }
?>
