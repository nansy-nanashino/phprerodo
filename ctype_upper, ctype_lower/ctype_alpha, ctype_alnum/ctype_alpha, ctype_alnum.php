<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$input_data = $_GET['text1'];

function dispKekka($str){
    $kekka1 = ctype_alpha($str);
    $kekka2 = ctype_alnum($str);

    print('調べる文字列は'.$str.'です<br>');

    if ($kekka1 == TRUE){
        print('文字列は英字だけが含まれています<br><br>');
    }else{
        if ($kekka2 == TRUE){
            print('文字列は英字及び数字だけが含まれています<br><br>');
        }else{
            print('文字列は英数字以外の文字が含まれています<br><br>');
        }
    }
}

$str = 'abcdef';
dispKekka($str);

$str = 'abc@def';
dispKekka($str);

$str = 'abc654def';
dispKekka($str);

?>
</body>
</html>