<html>
<head><title>PHP TEST</title></head>
<body>

<?php

function dispKekka($str){
    $kekka1 = ctype_upper($str);
    $kekka2 = ctype_lower($str);

    print('調べる文字列は'.$str.'です<br>');

    if ($kekka1 == TRUE){
        print('文字列は大文字だけです<br><br>');
    }else{
        if ($kekka2 == TRUE){
            print('文字列は小文字だけです<br><br>');
        }else{
            print('文字列は大文字小文字が混合しています<br><br>');
        }
    }
}

$str = 'abc';
dispKekka($str);

$str = 'ABC';
dispKekka($str);

$str = 'abc89';
dispKekka($str);

$str = 'ABC89';
dispKekka($str);

$str = 'aBcDe';
dispKekka($str);

?>
</body>
</html>