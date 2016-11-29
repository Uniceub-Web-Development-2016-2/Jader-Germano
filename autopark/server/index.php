
<?php
include('../server/control/request_controller.php');
$controller = new RequestController();
echo json_encode($controller->execute());