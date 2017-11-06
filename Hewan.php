<?php
class Hewan{
    var $nama;
    function setNama($nama){
    $this->nama=$nama;
    }
}

class Mamalia extends Hewan{ // Turunan dari Hewan
    function getNama(){
        return $this->nama;
    }
}
class Reptil extends Hewan{ // Turunan dari Hewan
    function getNama(){
        return $this->nama;
    }
}
class Ampibi extends Hewan{ // Turunan dari Hewan
    function getNama(){
        return $this->nama;
    }
}