<?php
$string="<font color=#FF0000><b>������������
�������</b></font>";
$a=$_GET['a'];
$b=$_GET['b'];
$sum= $a+$b;
$riz= $a-$b;
$dob= $a*$b;
$dil= $a/$b;
echo "
$string <br><br>
a=$a, b=$b <br><br>
<b>����</b> $sum<br>
<b>г�����</b> $riz<br>
<b>�������</b> $dob<br>
<b>������</b> $dil<br>
";
?>