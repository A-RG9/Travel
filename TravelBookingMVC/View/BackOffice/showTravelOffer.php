<?php
include("../../Model/TravelOffer(private_ver).php");

 $offre = new offredeVoayage(6700,
 "vacation in Germany",
 "Munich",
 new DateTime("2024-10-19"),
 new DateTime("2024-10-29"),
 3560,
 true,
 "Adventure");

 var_dump($offre);
 $offre->show();







?>