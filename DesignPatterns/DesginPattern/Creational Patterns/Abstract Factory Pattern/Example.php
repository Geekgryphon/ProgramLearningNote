<?php

// 定義抽象工廠介面
interface AbstractFactory {
    public function createProductA();
    public function createProductB();
}

// 具體工廠實現抽象工廠介面
class ConcreteFactory1 implements AbstractFactory {
    public function createProductA() {
        return new ProductA1();
    }

    public function createProductB() {
        return new ProductB1();
    }
}

class ConcreteFactory2 implements AbstractFactory {
    public function createProductA() {
        return new ProductA2();
    }

    public function createProductB() {
        return new ProductB2();
    }
}

// 定義抽象產品介面
interface AbstractProductA {
    public function usefulFunctionA();
}

interface AbstractProductB {
    public function usefulFunctionB();
}

// 具體產品實現抽象產品介面
class ProductA1 implements AbstractProductA {
    public function usefulFunctionA() {
        return "The result of the product A1.";
    }
}

class ProductA2 implements AbstractProductA {
    public function usefulFunctionA() {
        return "The result of the product A2.";
    }
}

class ProductB1 implements AbstractProductB {
    public function usefulFunctionB() {
        return "The result of the product B1.";
    }
}

class ProductB2 implements AbstractProductB {
    public function usefulFunctionB() {
        return "The result of the product B2.";
    }
}

// 客戶端代碼使用抽象工廠
function clientCode(AbstractFactory $factory) {
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productA->usefulFunctionA() . "\n";
    echo $productB->usefulFunctionB() . "\n";
}

// 客戶端代碼可以通過不同的工廠創建不同的產品家族
echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2());


?>
