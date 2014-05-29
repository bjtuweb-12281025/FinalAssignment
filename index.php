<html>
<head>
</head>
<body>
<center>
  <p>
    <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  </p>
  <h1>ÇëµÇÂ¼£º</h1>
  <form action="../LeaveMessage.php" method="post">
    <p>Name : 
      <input type="text" name="name"/>
    </p>
    <p>Password : 
      <input type="password" name="password"/>
      <input type="submit"/>
    </p>
    <p>&nbsp;</p>
  </form>
  <p><a href="../register.php">ÎÞÕËºÅ£¬×¢²á</a></p>
  <p>
    <?php } else { ?>
  </p>
  <p> You already logged in. <a href="../logout.php">logout</a>
  <?php } ?>
    </p>
	</center>
</body>
</html>
