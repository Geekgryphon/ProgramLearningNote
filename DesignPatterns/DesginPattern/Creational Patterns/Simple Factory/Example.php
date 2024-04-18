<?php 

// 定義一個接口或者抽象類別
interface Vehicle {
    public function drive();
}

// 實現接口的具體類別
class Car implements Vehicle {
    public function drive() {
        echo "Driving a car...";
    }
}

class Truck implements Vehicle {
    public function drive() {
        echo "Driving a truck...";
    }
}

// 簡單工廠類別負責創建物件
class VehicleFactory {
    public static function create($type) {
        switch ($type) {
            case 'car':
                return new Car();
            case 'truck':
                return new Truck();
            default:
                throw new InvalidArgumentException("Invalid vehicle type.");
        }
    }
}

// 使用簡單工廠創建物件
$car = VehicleFactory::create('car');
$car->drive(); // 輸出: Driving a car...

$truck = VehicleFactory::create('truck');
$truck->drive(); // 輸出: Driving a truck...


?>