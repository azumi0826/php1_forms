<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ表示</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>感想</th>
            </tr>
        </thead>
        <tbody>

        <?php
         // ファイルを開く
         $file = fopen('data/data.txt', 'r');
         // ファイルの各行をループで読み込む r=読み込みモード
         while ($line = fgets($file)) {
            $data = explode(',', trim($line));//explode() 関数でカンマ(,)を区切り文字として行を分割し、配列
         // テーブルの行を開始
         echo "<tr>";
         // 分割したデータの各要素をループで処理
         foreach ($data as $cell) {
         //各データ要素をテーブルのセル(<td>)として出力
         echo "<td>" .$cell. "</td>";
         }
         // テーブルの行を閉じる
         echo "</tr>";
}

// ファイルを閉じる
fclose($file);
?>
        </tbody>
    </table>
</body>
</html>