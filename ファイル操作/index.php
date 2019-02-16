<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$fp = fopen('sample.txt', 'r');

$flag = fclose($fp);

if ($flag){
    print('無事クローズしました');
}else{
    print('クローズに失敗しました');
}

?>
</body>
</html>