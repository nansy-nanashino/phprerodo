<html>
<head><title>PHP TEST</title></head>
<body>

<?php

function dispKekka($str){
    $kekka = ctype_digit($str);

    print('調べる文字列は'.$str.'です<br>');

    if ($kekka == TRUE){
        print('文字列は数字だけが含まれています<br><br>');
    }else{
        print('文字列は数字以外の文字が含まれています<br><br>');
    }
}

$str = '01234';
dispKekka($str);

$str = 'abc998';
dispKekka($str);

$str = '123.45';
dispKekka($str);

?>
</body>
</html>