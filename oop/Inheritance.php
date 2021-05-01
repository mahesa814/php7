<?php

class book 
{
    public $title;
    public $author;
    public $volume;
    public $price;
    
    function __construct(
        string $title,
        string $author,
        int $volume = 0,
        float $price
    )
    {
        $this->title = $title;
        $this->author = $author;
        $this->volume = $volume;
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title ."Written By ". $this->author;
    }
    
    public function getPrice(){
        $base = "{$this->title} ({$this->author},";
        $base = "{$this->price})";

        return $base;
    }   
}

class bookseries extends book{
    public function getVolume()
    {
        return $this->volume;
    }
    public function getAll()
    {
        $base = parent::getTitle();
        $base.= $this->getVolume();
        return $base;
    }
}
$buku = new bookseries ("Invested","Daniele Town",3, 125000.999);
print "Series Ke  : {$buku -> getVolume()}\n <br>";
print "Harga : {$buku ->getPrice()}\n<br>";
print "All info : {$buku -> getAll()}\n<br>";

class Bike{
    public  $Merk;
    public  $name;
    public $volume;
    public $price;
    
    function __construct(
        string $Merk,
        string $name,
        int $volume = 0,
        float $price
    ){
        $this->Merk = $Merk;
        $this->Name = $name;
        $this->volume =$volume;
        $this->Price = $price;
    } 
    public function getMerk(){
        return $this->Merk . "Honda".$this->name;
    }
    public function getPrice(){
        $base = "{$this->Merk}({$this->name},";
        $base = "{$this->Price})";
        return $base;
    }
}
class bikeseries extends Bike{
    public function getVolume()
    {
        return $this->volume;
    }
    public function getAl()
    {
        $base = parent::getMerk();
        $base .= $this->getVolume();

        return $base;
    }
}
$bike = new bikeseries ("Toyota","Mahesa",10, 1234.99);
echo "Series ke : {$bike -> getVolume()}\n <br>";
echo "Harga : {$bike -> getPrice()}\n <br>";
echo "All info : {$bike -> getAl()}\n <br>";


class users{
    public $name;
    public $ttl;
    public $Namefull;
    public $NO_hp;

    function __construct(
        string $name,
        string $ttl,
        string $Namefull,
        string $NO_hp
    ){
        $this->name = $name;
        $this->tempat_tanggal_lahir = $ttl;
        $this->Nama_Lengkap = $Namefull;
        $this->No_handphone = $NO_hp;
    }
    function getName(){
        return $this->name . "". $this->tempat_tanggal_lahir;
    }
    function getNo_Hp(){
        $dasar = "{$this->name}({$this->tempat_tanggal_lahir}";
        $dasar = "{$this->No_handphone})";
        return $dasar;
    }
}
class userseries extends users{
    public function getNamefull(){
        return $this->Nama_Lengkap;
    }
    public function getdata(){
        $dasar = parent::getName();
        $dasar = $this->getNamefull();
        return $dasar;
    }
}
$users =  new userseries("","Mahesa Fajar","Bandung, 12 Maret 2004","0821119101494");

echo "Nama = {$users->getName()}\n<br>";
echo "Tempat Tanggal Lahir : {$users->getNamefull()}\n<br>";
echo "Nama Lengkap  : {$users->getdata()}\n<br>";
echo "NO hp : {$users->getNo_Hp()}\n<br>";
$composer;




?>