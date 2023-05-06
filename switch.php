<?php
//
$i = 1;
switch($i) {
    case 0:
        echo "i は 0です \n";
        break;

    case 1:
        echo "i は 1です \n";
        break;

    default:
        echo "i は 0と1 以外です \n";
        break;
}
// PHP 8未満だと特に注意が必要なコード
// 比較が ==（緩やかな比較）であるため、以下のようなコードを PHP8未満の環境で書くときは、注意が必要です。
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;

}