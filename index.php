<?php

class ShopProduct{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    public function __construct($title, $firstName, $mainName, $price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer(){
        return "{$this->producerFirstName} {$this->producerMainName}";
    }
}

$product1 = new ShopProduct("My Antonia", "Cather", "Willa", 5.99);
//$product2 = new ShopProduct();




//$product2->title = "Catch 22";


//var_dump($product1);
/*var_dump($product2);*/
print "author:" . $product1->getProducer();

