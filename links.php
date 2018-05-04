<!DOCTYPE html><html>
<head>
<title>Гіперпосилання для надсилання інформації</title>
</head>
<body>
<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$home_phone=$_GET['home_phone'];
$email=$_GET['email'];
$uni_name=$_GET['uni_name'];
$fac_name=$_GET['fac_name'];
$kurs=$_GET['kurs'];
$hobby=$_GET['hobby'];
echo "<p><a href='user.php?
first_name=$first_name&last_name=$last_name&
home_phone=$home_phone&email=$email'>
Контактна інформація</a></p>";
echo "<p><a href='user1.php?
uni_name=$uni_name&fac_name=$fac_name&kurs=$kurs'>
Інформація про ваш учбовий заклад</a></p>";
echo "<p><a href='user2.php?hobby=$hobby'>
Ваші захоплення</a></p>";
?>
</body>
</html>