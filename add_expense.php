<?php  include('server.php'); ?>
<?php include ('topnav.php'); ?>
<?php include ('sidenav.php');?>
<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;
    $record = mysqli_query($db, "SELECT * FROM expense WHERE id=$id");

    if ($record)  {
      $n = mysqli_fetch_array($record);
      $name = $n['name'];
      $amount = $n['amount'];
      $date = $n['date'];
    }else{
echo "nothing";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  

<form method="post" name="myForm" action="server.php" class="form" onsubmit="return validateFields();">
    
    <div class="input-group">
      <input type="hidden" name="id"  value="<?php echo $id; ?>" >
      <label>Name</label>
      <input type="text" name="name"  value="<?php echo $name; ?>" id="name">
    </div>
    <div class="input-group">
      <label>amount spent</label>
      <input type="text" name="amount"  value="<?php echo $amount ?> " id="amount">
    </div>
    <div class="input-group">
      <label>date YY-MM-DD</label>
      <input type="text" name="date_"  value="<?php echo $date ?>" id="date_">
    </div>
    <div class="input-group">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    </div>
  </form>

</body>
</html>


<script type="text/javascript">
  
  function validateFields(){


    const name = document.forms["myForm"]["name"].value;
    const amount = document.forms["myForm"]["amount"].value;
    const date = document.forms["myForm"]["date_"].value;
    if (name == "") {

      alert('name is required');

      return false;

    }

    if(amount == ""){

      alert('amount is required');
       return false;
    }

    if(date == ""){

      alert('date is required');

       return false;
    }


  }
</script>