<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<?php
$username = $_POST["name"];
$password = $_POST["password"];
?>

<body>
<label></label>
<p>&nbsp;</p>
<p>&nbsp;</p>
Welcome <? echo $_POST["name"] ?>!<br/>
<p>���������ԣ�</p>
<form action="message.php" method="post">
<p>
  <textarea name="textarea" cols="60" rows="12">���ڴ˱༭</textarea>
  <label>
  <input type="submit" name="Submit" value="�ύ">
  </label>
</p>
</form>
</body>
</html>
