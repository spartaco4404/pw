<?php

$color = '#' . substr( md5( time() ) , 0, 6 ) ;
ob_start();

?>
<html>
<body style='background-color:<?php echo $color ?>'>
<p >Testo di prova</p>
</body>
</html>
<?php

$html = ob_get_clean();



echo $html;