<?php
    class Hewan{
        var $nama;
        public $caraproduksi;
        public $habitat;
        public function setNama($nama){
            $this->nama=$nama;
        }
        public function getCaraproduksi()
        {
            return $this->caraproduksi;
        }

        public function setCaraproduksi($caraproduksi)
        {
            $this->caraproduksi = $caraproduksi;
        }
        public function getHabitat()
        {
            return $this->habitat;
        }

        public function setHabitat($habitat)
        {
            $this->habitat= $habitat;
        }
    }

class Mamalia extends Hewan{ // Turunan dari Hewan
    public function getNama()
    {
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}

class Reptil extends Hewan{ // Turunan dari Hewan
    public function getNama(){
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}

class Ampibi extends Hewan{ // Turunan dari Hewan
    public function getNama(){
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}<?php
    class Hewan{
        var $nama;
        public $caraproduksi;
        public $habitat;
        public function setNama($nama){
            $this->nama=$nama;
        }
        public function getCaraproduksi()
        {
            return $this->caraproduksi;
        }

        public function setCaraproduksi($caraproduksi)
        {
            $this->caraproduksi = $caraproduksi;
        }
        public function getHabitat()
        {
            return $this->habitat;
        }

        public function setHabitat($habitat)
        {
            $this->habitat= $habitat;
        }
    }

class Mamalia extends Hewan{ // Turunan dari Hewan
    public function getNama()
    {
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}

class Reptil extends Hewan{ // Turunan dari Hewan
    public function getNama(){
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}

class Ampibi extends Hewan{ // Turunan dari Hewan
    public function getNama(){
        return $this->nama;
    }
    public function setCaraproduksi($caraproduksi)
    {
        parent::setCaraproduksi($caraproduksi);
    }
    public function setHabitat($habitat)
    {
        parent::setHabitat($habitat);
    }
}