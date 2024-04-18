<?php

class Singleton
{
    // 靜態成員變量，用於存儲單例實例
    private static $instance;

    // 私有化構造方法，防止外部實例化
    private function __construct()
    {
        // 可在此處初始化單例的屬性
    }

    // 靜態方法獲取單例實例
    public static function getInstance()
    {
        // 檢查靜態成員變量是否為空
        if (!isset(self::$instance)) {
            // 如果為空，則創建一個新的實例並賦值給靜態成員變量
            self::$instance = new self();
        }
        // 返回單例實例
        return self::$instance;
    }
}

// 使用靜態方法獲取單例實例
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// 檢查是否為同一個實例
if ($singleton1 === $singleton2) {
    echo "兩個實例是相同的單例。";
} else {
    echo "兩個實例不是相同的單例。";
}

?>
