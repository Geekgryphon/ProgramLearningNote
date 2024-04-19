<?php
// 產品
class Product {
    private $parts = [];

    public function addPart($part) {
        $this->parts[] = $part;
    }

    public function listParts() {
        echo "產品部件：" . implode(', ', $this->parts) . "\n";
    }
}

// 抽象建造者
interface Builder {
    public function buildPartA();
    public function buildPartB();
    public function buildPartC();
    public function getResult(): Product;
}

// 具體建造者
class ConcreteBuilder implements Builder {
    private $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function buildPartA() {
        $this->product->addPart("部件 A");
    }

    public function buildPartB() {
        $this->product->addPart("部件 B");
    }

    public function buildPartC() {
        $this->product->addPart("部件 C");
    }

    public function getResult(): Product {
        return $this->product;
    }
}

// 指揮者
class Director {
    private $builder;

    public function __construct(Builder $builder) {
        $this->builder = $builder;
    }

    public function buildMinimalProduct() {
        $this->builder->buildPartA();
    }

    public function buildFullFeaturedProduct() {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
    }
}

// 客戶端代碼
$builder = new ConcreteBuilder();
$director = new Director($builder);

// 建立最小配置的產品
$director->buildMinimalProduct();
$product = $builder->getResult();
$product->listParts();

// 建立全功能的產品
$director->buildFullFeaturedProduct();
$product = $builder->getResult();
$product->listParts();
?>
