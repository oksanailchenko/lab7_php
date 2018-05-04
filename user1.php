<html>
<head>
<title>Інформація, що надіслана за допомогою
гіперпосилань</title>
</head>
<body>
<?php
$uni_name=$_GET['uni_name'];
$fac_name=$_GET['fac_name'];
$kurs=$_GET['kurs'];
echo "
<ul>
<li> Назва ВНЗ:<b>$uni_name</b></li>
<li> Факультет:<b>$fac_name</b></li>
<li> Курс: <b>$kurs</b></li>
</ul>
";
?>
</body>
</html>
