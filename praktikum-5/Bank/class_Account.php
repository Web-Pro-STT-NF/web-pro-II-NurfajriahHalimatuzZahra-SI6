<?php
class Account
{
    public $nomor, $saldo;

    public function __construct($no, $saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    public function deposit($uang)
    {
        $this->saldo = intval($this->saldo) + intval($uang);
    }

    public function withdraw($uang)
    {
        $this->saldo = intval($this->saldo) - intval($uang);
    }

    public function cetak()
    {
        echo "No.Account : " . $this->nomor;
        echo "<br>Saldo : " . number_format($this->saldo, 0, ',', '.');
    }
}