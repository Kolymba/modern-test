<?php 

function render($layout_name, $vars = array()) 
{
        if(file_exists('templates/'.$layout_name.'.php')){
            ob_start();
            extract($vars);
        require 'templates/'.$layout_name.'.php';
        return ob_get_clean();
        }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    function closemodal(){
        header ('Location: index.php');  
        exit();
    }
?>