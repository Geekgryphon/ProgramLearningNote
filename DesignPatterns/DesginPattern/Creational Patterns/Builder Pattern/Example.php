<?php

// 抽象產品介面
interface Product
{
    public function getName();
}

// 具體產品 A
class ConcreteProductA implements Product
{
    public function getName()
    {
        return 'Product A';
    }
}

// 具體產品 B
class ConcreteProductB implements Product
{
    public function getName()
    {
        return 'Product B';
    }
}

// 抽象工廠介面
interface Factory
{
    public function createProduct();
}

// 具體工廠 A
class ConcreteFactoryA implements Factory
{
    public function createProduct()
    {
        return new ConcreteProductA();
    }
}

// 具體工廠 B
class ConcreteFactoryB implements Factory
{
    public function createProduct()
    {
        return new ConcreteProductB();
    }
}

// 使用具體工廠 A 創建具體產品 A
$factoryA = new ConcreteFactoryA();
$productA = $factoryA->createProduct();
echo $productA->getName(); // 輸出：Product A

// 使用具體工廠 B 創建具體產品 B
$factoryB = new ConcreteFactoryB();
$productB = $factoryB->createProduct();
echo $productB->getName(); // 輸出：Product B

?>
