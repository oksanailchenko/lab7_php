<html>
<head>
<title>����������, �� �������� �� ���������
������������</title>
</head>
<body>
<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$home_phone=$_GET['home_phone'];
echo "
<ul>
<li> �������: <b>$first_name</b></li>
<li> ��'�: <b>$last_name</b></li>
<li> ������� �������: <b>$home_phone</b></li>
</ul>
";
?>
</body>
</html>