<?php

    require_once  "Mobil.php";

    $mobil = new Mobil();
    
    $mobil -> maju_kedepan();
    $mobil ->merk_mobil();

    echo "Merk mobil yang maju adalah ". $mobil->merk;
