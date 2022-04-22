<?php
require_once "class_Pasien.php";
class BMI extends Pasien{
    public $berat, $tinggi;

    public function nilaiBMI(){
       $hasil = number_format($this->berat / (($this->tinggi / 100)**2), 1);
       return $hasil;
    }
    public function statusBMI(){
        if ($this->nilaiBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9){
            return "Normal (Ideal)";
        }elseif ($this->nilaiBMI() >= 25.0 && $this->nilaiBMI() <= 29.9){
            return "Kelebihan Berat Badan";
        }elseif ($this->nilaiBMI() >= 30.0){
            return "Kegemukan (Obesitas)";
        }
        
    }

}
