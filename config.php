<?php 

spl_autoload_register(function($class_name){
    $filename = "classe".DIRECTORY_SEPARATOR.$class_name. ".php";
    
    if (file_exists(($filename))){
        require_once($filename);
    }
})

?>