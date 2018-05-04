<?php
$string="<font color=#FF0000><b>Математичний
приклад</b></font>";
$a=$_GET['a'];
$b=$_GET['b'];
$sum= $a+$b;
$riz= $a-$b;
$dob= $a*$b;
$dil= $a/$b;
echo "
$string <br><br>
a=$a, b=$b <br><br>
<b>Сума</b> $sum<br>
<b>Різниця</b> $riz<br>
<b>Добуток</b> $dob<br>
<b>Частка</b> $dil<br>
";
?>