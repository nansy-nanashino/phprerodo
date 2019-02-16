<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$tv = new Television();
$tv->channelNo = 8;
$tv->dispChannel();

class Television{
  public $channelNo;

  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }
}

?>
</body>
</html>