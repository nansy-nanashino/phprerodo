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
function check($kamoku, $tensuu){
  print $kamoku.'の結果:';
  if ($tensuu > 75){
    print '合格です';
  }else{
    print '不合格です';
  }
  print '(点数:'.$tensuu.')';
  print '<br />';
}

$sugaku = 84;
$eigo = 62;
$kokugo = 78;

check('数学', $sugaku);
check('英語', $eigo);
check('国語', $kokugo);
?>
</p>

</body>
</html>
