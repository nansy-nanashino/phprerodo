<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$fp = fopen('sample.txt', 'r');

if (flock($fp, LOCK_EX)){
    print('ファイルロックに成功しました<br>');

    flock($fp, LOCK_UN);
}else{
    print('ファイルロックに失敗しました<br>');
}

$flag = fclose($fp);

if ($flag){
    print('無事クローズしました');
}else{
    print('クローズに失敗しました');
}

?>
</body>
</html>