<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

echo "課題1 = ";
// 定義する。
function outputDouble($num){
 // 計算結果を保存する。
 $result = $num * 2;
 // 表示する。
 echo $result;
 
}
// 実行する。
outputDouble(10);
echo "\n";


// 2.$a と $b を仮引数に持ち、$a と $b　を足した結果を返す関数を作成してください。

echo"課題2 = ";
// 定義する。
function f($a, $b){
 //計算結果を保存する。
 $result = $a + $b;
 // 表示する。
 echo $result;
 
}
// 実行する。
 f(6,6);
 echo"\n";
 

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
echo "課題3 = ";

function output($arr){
    
    //結果を格納する変数を用意します。
    //初期値として1を代入します。
     $result = 1;
     
     // $arrから取り出した値を$aに入れます。
     foreach($arr as $a){ 
         
         //取り出した値と$resultを掛け算して結果を保存する変数に入れます。
         //1*1  1*3  3*5  15*7  105*9
         $result *= $a;
  }
         // 戻り値があります。
         return $result;
}
//arrayを$arrに入れます。
$arr = array(1,3,5,7,9);

// 関数に仮引数を渡します。
echo output($arr);
echo "\n";


// 4.【応用】次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
// 途中の部分を完成させてください。

echo "課題4 = ";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする。
 $max_number = $arr[0];
 // 配列の要素を一つずつ取り出し、$aに代入します。
 foreach($arr as $a){
  // ここで1番大きい値であるか判断しています。
  if ($a > $max_number){
   //最大値を更新します。
   $max_number = $a;
  }
 }
 //戻り値があります。
  return $max_number;
}
$arr[0];
echo max_array($arr);
// 実行の結果9と表示されます。
echo "\n";



// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。


// 1 「strip_tags」文字列から HTML および PHP タグを取り除く。

echo "strip_tags = ";
//PHPの$html_codeの変数にHTMLタグと文字が含まれる文字列を設定します。
$html_code = "<html><body><title>テスト</title><p>テキスト</p></body></html>";
//strip_tagsを使用して、HTMLタグを全て取り除きます。
$html_code_result = strip_tags($html_code);
//出力します。
echo $html_code_result;
echo "\n";



// 2 「array_push」 一つ以上の要素を配列の最後に追加する。

echo "array_push = ";
//変数に配列の要素が入っています。
$fruit = array("orange", "banana");
//array_pushを使用して、要素を配列の最後に追加します。
array_push($fruit, "apple");
//出力します。
print_r($fruit);
echo "\n";



// 3 「array_merge」 配列の要素の最後にひとつまたは複数の配列を結合するときに使用する。

echo "array_merge = ";
//配列1
$a1 = [ "a", "b" ] ;
//配列2
$a2 = [ "c", "d" ] ;
//配列1と2を結合したものを変数に入れます。
$result = array_merge( $a1, $a2 ) ;
//出力します。
print_r( $result ) ;
echo "\n";



// 4 mktime 日付を Unix のタイムスタンプとして取得する。

//指定した日時のタイムスタンプを取得。
$timestamp = mktime(0, 0, 0, 8, 1, 2020);
//表示します。
echo $timestamp;
echo "\n";



// 5 「date」 ローカルの日付/時刻を書式化する。

echo "date = ";
// 関数を使用して日付を取得します。
$d = date("Y年n月d日");
//表示します。
echo $d;
echo "\n";

