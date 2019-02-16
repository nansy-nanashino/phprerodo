<html>
<head><title>PHP TEST</title></head>
<body>

<?php
$data = 'abcdefg';

$fp = fopen('sample.txt', 'ab');

if ($fp){
    if (flock($fp, LOCK_EX)){
        if (fwrite($fp,  $data) === FALSE){
            print('ファイル書き込みに失敗しました<br>');
        }else{
            print($data.'をファイルに書き込みました<br>');
        }

        flock($fp, LOCK_UN);
    }else{
        print('ファイルロックに失敗しました<br>');
    }
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