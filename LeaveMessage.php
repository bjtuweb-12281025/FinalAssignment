<html>
<head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus?">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">

<title>无标题文档</title>
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
<p>请输入留言：</p>
<form action="message.php" method="post">
<p>
  <textarea name="textarea" cols="60" rows="12">请在此编辑</textarea>
  <label>
  <input type="submit" name="Submit" value="提交">
  </label>
</p>
</form>
</body>
</html>
