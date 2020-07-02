<?php

$name = "Oka";

if ( $name == "Oka" ) {
  
  echo "私は あなたの名前です";
  
}

else{
  
  echo "あなたの名前ではありません";
}

?>

<?php
$total = 0;
for ($i = 1; $i <= 10000; $i++)
$total += $i;
echo $total
?>

<?php
$fruits = array("りんご","ぶどう","いちご","オレンジ","もも");
// $fruits から一つずつ要素を取り出して、$fruits に代入される
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}
?>

<?php
$strat=1;
$end=100;
for ($i = $strat; $i <= 100; $i++){
if($i %5==0){
echo $i;
}
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
if($i % 5 == 0){
echo $i;
}
}
?>

<?php

//PSR

if ($foo) {
  
} elseif ($bar) {
  
} else {
//括弧、スペース、および中括弧の配置に注意する。
//elseとelseifは前のボディの閉じた終了波括弧と同じ行にある。
//全ての制御キーワードが単一のように見えるように、else if ではなく elseif を使う。

}




switch ($hoge) {
    case 0:
        echo '通常パターン。breakします。';
        break;
    case 1:
        echo 'no breakパターン。処理は継続されます。';
    // no break
    case 2:
    case 3:
    case 4:
        echo 'returnパターン, breakの代わりにreturnします。';
        return;
    default:
        echo 'Default case';
        break;
        //括弧、スペース、中括弧の配置に注意する。
        //case文はswitchから一度インデントする。
        //breakキーワード（または他の終了キーワード）はcase本体と同じレベルでインデントする。
        //空ではないケース本体でフォールスルーを行う場合は // no break などのコメントを記述する。
}


for ($i = 0; $i < 10; $i++) {
    // for body
    //括弧、スペース、中括弧の配置に注意する。
}




foreach ($iterable as $key => $value) {
    // foreach body
    //括弧、スペース、中括弧の配置に注意する
}