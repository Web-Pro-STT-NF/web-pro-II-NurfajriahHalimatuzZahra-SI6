<?php
class PersegiPanjang{
    private $panjang;
    private $lebar;
    const sisi = 2;
    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getLuas()
    {
        return $this->panjang + $this->lebar;
    }
    function getKeliling()
    {
        return self::sisi*($this->panjang + $this->lebar);
    }
}
?>