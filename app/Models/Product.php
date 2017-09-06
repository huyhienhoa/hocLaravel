<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 05/09/2017
 * Time: 2:35 PM
 */
class Product{
    private $id;
    private $code;
    private $name;
    private $price;

    public function __construct($id,$name,$code,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
    }

    public function getProductID(){
        return $this->id;
    }

    public function setProductID($id){
        $this->id = $id;
    }
    public function getProductName(){
        return $this->name;
    }

    public function setProductName($name){
        $this->name = $name;
    }
    
    public function getProductCode(){
        return $this->code;
    }

    public function setProductCode($code){
        $this->code = $code;
    }

    public function getProductPrice(){
        return $this->price;
    }

    public function setProductPrice($price){
        $this->price = $price;
    }
}