<?php

class Menu{
    private $name;
    private $price;
    private $img;
    private $orderCount = 0; //初期値は0

    public function __construct($name, $price, $img){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }

    public function getName(){
        return $this->name;
    }

    public function getImg(){
        return $this->img;
    }

    public function getOrderCount(){
        return $this->orderCount;
    }

    public function setOrderCount($orderCount){
        $this->orderCount = $orderCount;
    }

    // 消費税の計算、小数点以下切り捨て
    public function getTaxIncludedPrice(){
        return floor($this->price * 1.08);
    }

    // 合計金額
    public function getTotalPrice(){
        return $this->getTaxIncludedPrice() * $this->orderCount;
    }

}


?>