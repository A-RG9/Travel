<?php
session_start();


include_once '../../Controller/TravelOfferController.php';
include_once '../../Model/TravelOffer(public_ver).php';



function validateString($input) {
    return preg_match("/^[a-zA-Z\s]{3,}$/", $input);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Tl=$_POST['title'];
        $Ds=$_POST['destination'];
        $DD = new DateTime($_POST['departureDate']);
        $RD = new DateTime($_POST['returnDate']);
        $PX = (float)$_POST['price'];
        $D =  isset($_POST['availability']) ? true : false;
        $CAT=$_POST['category'];
};

    $errors = [];
   
    
     if (!validateString($Tl)) {
         $errors[] = "Title must be at least 3 characters and contain only letters and spaces.";
    }

    
    if (!validateString($Ds)) {
        $errors[] = "Destination must be at least 3 characters and contain only letters and spaces.";
    }

    
    if ($DD>= $RD) {
         $errors[] = "Departure Date must be before the Return Date.";
    }

   
    if ($PX <= 0) {
        $errors[] = "Price must be a positive number.";
    }


   
    if (!empty($errors)) {
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
     else {
       
        $offre1=new TravelOfferController();
        echo"<h2> offre 1<h1>";
        $offre1->showTravelOffer($offer);
        echo "var dump <br>";
        var_dump($offer);
    }


?>