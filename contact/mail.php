<?php
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All velden moeten worden ingevuld, probeer het alstublieft opnieuw <a href=\"/contact\">klik hier.</a>"; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Bericht via de ongedierteservice site"; 
        mail("andryvankomen@gmail.com", $subject, $message, $from); 
        echo "Wij hebben uw bericht ontvangen. <a href=\"/contact\">klik hier.</a>"; 
        } 
    }   
?>