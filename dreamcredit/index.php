<?php
require 'function.php'; 
$index = render('form_mail', array());
echo render('layout', array('index'=>$index));
?>