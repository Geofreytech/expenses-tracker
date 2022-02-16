<?php  include('server.php'); ?>

<?php include ('topnav.php'); ?>
<?php include ('sidenav.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Expense tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>

	




<?php $results = mysqli_query($db, "SELECT * FROM expense"); ?>
<div class="main">
	<div class="tables">

		<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" id="alertmessage">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    		<table id="expense">

		<div class="buttons">

	<button class="add-btn" ><a href="add_expense.php" class="btn-add">add expense</a></button>


</div>

  <tr>
    <th>name</th>
    <th>amount</th>
    <th>date</th>
    <th>Action</th>
  </tr>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
  <tr>

    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td>
    	<button class="edit-btn"><a href="add_expense.php?edit=<?php echo $row['id']; ?>" class="btn-edit" >Edit</a></button>
    	<button class="delete-btn">
    	<a href="server.php?del=<?php echo $row['id']; ?>" class="del-btn">Delete</a></button>

    </td>
    
  </tr>
  <?php }?>
</table>

    	
    		
    	</div>
    	
</div>
    <script type="text/javascript"> 
    	setTimeout(function() {
    $('#alertmessage').fadeOut('fast');
}, 2000);
	
</script>


</body>
<script type="text/javascript" src="main.js"></script>
</html>