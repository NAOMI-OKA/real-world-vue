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
