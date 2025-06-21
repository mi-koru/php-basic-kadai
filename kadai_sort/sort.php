<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
       <?php
function sort_2way(array $array, bool $order)
{
    if ($order) {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順
    } else {
        echo "降順にソートします。<br>";
        rsort($array); // 降順
    }

    // ソート後の配列を1行ずつ表示
    foreach ($array as $item) {
        echo $item . "<br>";
    }
}

// Step4. ソート対象の配列を用意する
$nums = [15, 4, 18, 23, 10];

// 昇順ソートを呼び出す（trueが昇順）
sort_2way($nums, true);
//降順ソート呼び出し
sort_2way($nums, false);
?>
    </p>
</body>

</html>