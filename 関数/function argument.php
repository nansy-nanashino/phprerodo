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
function heikin($num1, $num2){
  $result = ($num1 + $num2) / 2;
  print $num1.'と'.$num2.'の平均は'.$result.'です<br />';
}

heikin(10, 8);
heikin(3, 23);
?>
</p>

</body>
</html>