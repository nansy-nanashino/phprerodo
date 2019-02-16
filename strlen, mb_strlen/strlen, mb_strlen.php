<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$str1 = 'abcde';
$str_len1 = strlen($str1);
$str_mblen1 = mb_strlen($str1);

$str2 = '10時20分';
$str_len2 = strlen($str2);
$str_mblen2 = mb_strlen($str2);

print($str1.' の文字列の長さは'.$str_len1.'です<br>');
print($str1.' の文字数は'.$str_mblen1.'です<br><br>');

print($str2.' の文字列の長さは'.$str_len2.'です<br>');
print($str2.' の文字数は'.$str_mblen2.'です<br><br>');

?>
</body>
</html>