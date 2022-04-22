<?php
require_once "class_BMI.php";
require_once "class_BMI.php";

class BMIPasien extends BMI{
    public $tanggal;
    function __construct($kode, $tanggal, $nama, $gender, $berat, $tinggi){
        $this->kode = $kode;
        $this->tanggal = $tanggal;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
}
?>