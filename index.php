<?php

class ShopProduct{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName, $mainName, $price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer(){
        return "{$this->producerFirstName} {$this->producerMainName}";
    }

    public function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName} {$this->producerFirstName})";
        return $base; 
    }
}

class BookProduct extends ShopProduct{
    public $numPages;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages){
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages(){
        return $this->numPages;
    }

    public function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName} {$this->producerFirstName})";
        $base .= ": page count - {$this->numPages}";
        return $base;
    }
}

class CdProduct extends ShopProduct{
    public $playLength;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $playLength){
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength(){
        return $this->playLength;
    }

    public function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName} {$this->producerFirstName})";
        $base .= ": playing time - {$this->playLength}";
    }

}


class ShopProductWriter{
    public function write(ShopProduct $shopProduct){
        $str = $shopProduct->title . ": "
                . $shopProduct->getProducer()
                . " ( " . $shopProduct->price . " )";
        print $str;        
    }
}




$product1 = new ShopProduct("My Antonia", "Cather", "Willa", 5.99);
$writer = new ShopProductWriter();

$writer->write($product1);




//$product2->title = "Catch 22";


//var_dump($product1);
/*var_dump($product2);*/
//print "author:" . $product1->getProducer();

