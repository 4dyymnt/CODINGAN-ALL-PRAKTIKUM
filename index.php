<?php

    require_once "mahasiswa.php";

    $mahasiswa = new Mahasiswa();

    $mahasiswa->setMahasiswa(67, "Aldi", "IF C");
    $mahasiswa->masukKelas();

    echo "<br> Nama : ".$mahasiswa->getNama();
    

    
    