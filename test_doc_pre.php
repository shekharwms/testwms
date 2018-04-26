<?php
header('Content-disposition: inline');
header('Content-type: application/msword'); 

readfile('Template 1.doc');
exit;
?>