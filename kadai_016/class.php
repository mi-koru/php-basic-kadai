
<?php
class Food {

 public $name;
 public $price;

 // コンストラクタ（プロパティに値を代入）
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo "価格：{$this->price}円<br>";
    }
}


class Animal {

    public $name;
    public $height;
    public $weight;

     // コンストラクタ（プロパティに値を代入）
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo "身長：{$this->height}cm<br>";
    }
}

// Foodのインスタンスを作成
$banana = new Food("バナナ", 150);

// Animalのインスタンスを作成
$giraffe = new Animal("キリン", 500, 900);

// ------------------------
// print_rでインスタンスを出力
// ------------------------
echo "<pre>";
print_r($banana);
print_r($giraffe);
echo "</pre>";

// ------------------------
// メソッドにアクセスして実行
// ------------------------
$banana->show_price();     // Foodのメソッド
$giraffe->show_height();   // Animalのメソッド

?>