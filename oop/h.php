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
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->volume = $volume;
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title . " Written by " . $this->author;
    }

    public function getPrice()
    {
        $base = "{$this->title} ( {$this->author}, ";
        $base .= "{$this->price} )";
        return $base;
    }
}

class bookSeries extends book
{
    public function getVolume()
    {
        return $this->volume;
    }

    public function getAll()
    {
        $base = parent::getTitle();
        $base .= $this->getVolume();
        return $base;
    }
}

$buku = new bookSeries("Mastering PHP 7", "Gun Gun Febrianza", 3, 125000.999);
print "Series Ke : {$buku->getVolume()}\n";
print "Harga : {$buku->getPrice()}\n";
print "All Info : {$buku->getAll()}\n<br>";
echo disk_total_space("D:")


$file = fopen("test.txt","r");
//output a line of the file until the end is reached
$line = fget($file);

while(! feof($file)){
    echo $line. "<br>";
    $line - fgets ($file);
}
fclose($file;)
?>