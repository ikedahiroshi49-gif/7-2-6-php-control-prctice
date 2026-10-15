<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2-6演習問題</title>
</head>

<body>
    <h1>成績判定システム</h1>

    <h2>[個別成績]</h2>
    <?php
    //変数設定
    $students = [
        ["name" => "田中太郎", "score" => 85],
        ["name" => "佐藤桃子", "score" => 92],
        ["name" => "鈴木一郎", "score" => 78],
        ["name" => "高橋美咲", "score" => 65],
        ["name" => "伊藤健太", "score" => 58],
    ];
    //合格者数
    $goukaku = 0;
    //不合格者数
    $fugoukaku = 0;
    //平均点
    $ave = 0;
    //個別の成績表示(ループ制御)
    foreach ($students as $students) {
        echo $students["name"] . ':';
        echo $students["score"] . '点';

        //個別評価判定（If文判定）
        if ($students["score"] >= 90) {
            echo ' - 評価A';
            echo '（優秀）<br>';
        } elseif ($students["score"] >= 80) {
            echo ' - 評価B';
            echo '（良好）<br>';
        } elseif ($students["score"] >= 70) {
            echo ' - 評価C';
            echo '（普通）<br>';
        } elseif ($students["score"] >= 60) {
            echo ' - 評価D';
            echo '（要努力）<br>';
        } elseif ($students["score"] < 60) {
            echo ' - 評価F';
            echo '（不合格）<br>';
        }

        //統計情報計算式(if文）
        if ($students["score"] >= 60) {
            $goukaku++;
        } elseif ($students["score"] < 60) {
            $fugoukaku++;
        }
        $ave = $ave + $students["score"];
    }
    //統計情報表示
    
    echo "<h2>統計情報</h2>";

    echo '合格者数:' . $goukaku . '人<br>';
    echo '不合格者数:' . $fugoukaku . '人<br>';
    echo '平均点' . $ave = $ave / ($goukaku + $fugoukaku) . '点<br>';
    ?>
</body>

</html>