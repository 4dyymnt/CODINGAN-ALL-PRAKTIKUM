<?php

class mahasiswa
{
    private $npm, $nama, $kelas;

    
    public function masukKelas()
    {
        echo "$this->nama masuk kelas $this->kelas";
    }

    public function setMahasiswa($npm, $nama, $kelas)
    {
        $this->npm = $npm;
        $this->nama = $nama;
        $this->kelas = $kelas;


  }

}