<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
<?php
function plus($num1, $num2){
  $sum = $num1 + $num2;
  return $sum;
}

$sum = plus(10, 8);
print '10 + 8の結果は'.$sum.'です<br />';

print '7 + 14の結果は'.plus(7, 14).'です';
?>
</p>

</body>
</html>