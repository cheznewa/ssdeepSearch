<?php
require("config.php");
$fs = fopen($send,"w");
fwrite($fs,"ssdeep,1.1--blocksize:hash:hash,filename\n".$_GET["q"]);
fclose($fs);
echo str_replace("\n","<br/>",exec("ssdeep -k ".$list." ".$send));
unlink($send);
echo "<br/><a href='index.html'>Back</a>";
?>