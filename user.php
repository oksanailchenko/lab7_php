<html>
<head>
<title>Інформація, що надіслана за допомогою
гіперпосилань</title>
</head>
<body>
<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$home_phone=$_GET['home_phone'];
echo "
<ul>
<li> Прізвище: <b>$first_name</b></li>
<li> Ім'я: <b>$last_name</b></li>
<li> Домашній телефон: <b>$home_phone</b></li>
</ul>
";
?>
</body>
</html>