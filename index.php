<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>expense_tracker</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
      <button type="submit" class="btn" style="margin-left: 30px;"><a href="register.php" style="color: white;">register</a></button>
  	</div>
  	<p>
  		Not yet registered? register here.. <a href="register.php">register</a>
  	</p>
  </form>
</body>
</html>