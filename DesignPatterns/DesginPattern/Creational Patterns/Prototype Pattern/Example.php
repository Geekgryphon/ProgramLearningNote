<?php

// 定義一個可複製的原型類
class Prototype
{
    public $property;

    public function __clone()
    {
        // 實現複製方法
        // 這裡可能需要實現深複製邏輯，具體取決於需求
    }
}

// 創建原型對象
$prototype = new Prototype();
$prototype->property = 'value';

// 複製原型對象來創建新對象
$newObject = clone $prototype;

// 輸出新對象的屬性值
echo $newObject->property; // 輸出：value

?>