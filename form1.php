<?php
require 'function.php';
    $form = $_POST;
    $required = ['subject', 'email', 'name', 'question'];    
    $errors = [];
    //$valueSelect = ['Building Credit History', 'Bad Credit', 'Credit Cards for Business', 'General', 'Balance Transfer', 'Credit Card Rewards', 'Good Credit'];    
    //$submitErr = $emailErr = $nameErr = $questionErr = "";
    //$subinv = $emailinv = $nameinv = $questinv = ""; 
    //$submit = $email = $name = $question = "";    
        
    foreach ($required as $key) {
		if (empty($_POST[$key])) {
            $errors[$key] = 'This field must be filled';
		}
        else{
            $clean = 1;
            //$_POST[] = 'clean';
        }        
	}   
    //var_dump($form); exit;
    if (count($errors)) {       
        $index = render('form_mail', array('form'=>$form, 'errors' => $errors));
    }
    else {
        $index = render('form_mail', array('form'=>$form, 'clean' => $clean)); 
    }
//}

//else {$index = render('view_add', array());}      

echo render('layout', array('index'=>$index));

?>

            