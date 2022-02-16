
<?php include ('topnav.php'); ?>
<?php include ('sidenav.php');?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="post" action="server.php" class="form">
    
    <div class="input-group">
      <input type="hidden" name="id"  value="<?php echo $id; ?>" >
      <label>firstame</label>
      <input type="text" name="firstname" required="" value="<?php echo $firstname; ?>">
    </div>
    <div class="input-group">
      <label>lastname</label>
      <input type="text" name="lastname" required="" value="<?php echo $lastname ?> ">
    </div>
    <div class="input-group">
      <label>address</label>
      <input type="text" name="address" required="" value="<?php echo $address ?>">
    </div>
    <div class="input-group">
      <label>email</label>
      <input type="text" name="email" required="" value="<?php echo $email ?>">
    </div>
    <div class="input-group">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>

    </div>
   
  </form>
<?php endif ?>
</body>
</html>

