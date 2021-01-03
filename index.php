<?php

class ShopProduct{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer(){
        return "{$this->producerFirstName} {$this->producerMainName}";
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

