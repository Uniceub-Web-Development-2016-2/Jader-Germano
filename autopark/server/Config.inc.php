<?php
function __autoload($Class) {
    $classDir = array("model", "control", "dataBase");
    $isDir = null;
    foreach ($classDir as $dName){
        var_dump((".{$dName}/{$Class}.php"));
        if (!$isDir && file_exists(".{$dName}/{$Class}.php")){

            include_once (".{$dName}/{$Class}.php");
            $isDir = true;
        }
    }
    if (!$isDir){
        trigger_error("Erro ao incluir" . __DIR__. " {$Class}.php", E_USER_ERROR);
        die;
    }
}
