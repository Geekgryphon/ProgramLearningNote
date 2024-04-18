原型模式是一種創建型設計模式，它允許通過複製現有對象來創建新對象，而無需顯式地使用構造函數。在 PHP 中，原型模式通常通過實現 __clone() 方法來實現。

原型模式的一些關鍵點：

1. 複製對象： 原型模式允許通過複製（複製）現有對象來創建新對象。這種複製過程可以是淺複製（複製對象本身）或深複製（遞歸複製對象及其關聯對象）。
2. 減少構造成本： 原型模式通過避免顯式地調用構造函數來創建新對象，從而減少了創建對象的成本，特別是當對象的創建過程比較複雜時。
3. 保持對象的狀態： 複製對象是在現有對象的基礎上創建新對象，因此新對象將擁有與原始對象相同的狀態。這有助於保持對象的一致性。
4. 動態生成對象： 原型模式允許在運行時動態生成新對象，而無需在代碼中顯式地指定對象的類或類型。