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
// Pemanggilan hewan mamalia
echo "======Mamalia=====<br>";
$mamalia1=new Mamalia();
$mamalia1->setNama("Monyet");
echo $mamalia1->getNama()."<br>";
$mamalia2=new Mamalia();
$mamalia2->setNama("Anjing");
echo $mamalia2->getNama()."<br>";
$mamalia3=new Mamalia();
$mamalia3->setNama("Kucing");
echo $mamalia3->getNama()."<br>";
$mamalia4=new Mamalia();
$mamalia4->setNama("Gajah");
echo $mamalia4->getNama()."<br>";
$mamalia5=new Mamalia();
$mamalia5->setNama("Kangguru");
echo $mamalia5->getNama()."<br>";
// Pemanggilan hewan raptil
echo "=====Reptil=====<br>";
$reptil1=new Reptil();
$reptil1->setNama("Ular");
echo $reptil1->getNama()."<br>";
$reptil2=new Reptil();
$reptil2->setNama("Komodo");
echo $reptil2->getNama()."<br>";
$reptil3=new Reptil();
$reptil3->setNama("Kadal");
echo $reptil3->getNama()."<br>";
$reptil4=new Reptil();
$reptil4->setNama("Cicak");
echo $reptil4->getNama()."<br>";
$reptil5=new Reptil();
$reptil5->setNama("Iguana");
echo $reptil5->getNama()."<br>";
// pemanggilan hewan Amfibi
echo "=====Amfibi=====<br>";
$ampibi1=new Ampibi();
$ampibi1->setNama("Katak");
echo $ampibi1->getNama()."<br>";
$ampibi2=new Ampibi();
$ampibi2->setNama("Kura-kura");
echo $ampibi2->getNama()."<br>";
$ampibi3=new Ampibi();
$ampibi3->setNama("Buaya");
echo $ampibi3->getNama()."<br>";
$ampibi4=new Ampibi();
$ampibi4->setNama("Penyu");
echo $ampibi4->getNama()."<br>";
$ampibi5=new Ampibi();
$ampibi5->setNama("Kodok");
echo $ampibi5->getNama()."<br>";