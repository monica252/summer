<?php
// 1〜10 までを足した値を返す関数
function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

　　　　　　　　// $result を結果として返す
    return $result;
}

// 関数を実行する
echo sum();
?>
