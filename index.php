<?php
    require 'vendor/autoload.php'; 

    use App\entity\Contact;
    
    $contact = new Contact("bonnier","vincent");
    echo $contact->sayMyName(); 
    