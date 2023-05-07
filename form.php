<?php

//変数の中身を確認
//var_dump($_GET);

//クロスサイトスクリプティング
//echo $_GET['input_text'];
//echo "あなたが入力したのは " , $input , " ですね";
error_reporting(-1);
ini_set('display_errors', 'on');

// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// データの取得
$input = $_GET['input_text'] ?? "NULL"; // 今回追記分

// 出力
echo "あなたが入力したのは " , h($input) , " ですね";