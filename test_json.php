<?php

$myObj = '{i:166;s:99:"http://preview.byaviators.com/theme/megareal/wp-content/uploadz/2015/06/5388053335_55e53eefd1_o.jpg";i:165;s:99:"http://preview.byaviators.com/theme/megareal/wp-content/uploadz/2015/06/5388052993_9814125d09_o.jpg";i:164;s:99:"http://preview.byaviators.com/theme/megareal/wp-content/uploadz/2015/06/5388048833_dc863911af_o.jpg";i:163;s:99:"http://preview.byaviators.com/theme/megareal/wp-content/uploadz/2015/06/5388048563_33d6a7d176_o.jpg";i:162;s:99:"http://preview.byaviators.com/theme/megareal/wp-content/uploadz/2015/06/5388046113_2e6ecb7796_o.jpg"}';

$myJSON = json_decode($myObj);


var_dump($myJSON);
?>