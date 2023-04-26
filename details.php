<?php
include('config.php');
if(isset($_GET['id']))
{
    $sno = $_GET['id'];
    $sql = "DELETE FROM `form` WHERE sno='$sno'";
    $run = mysqli_query($con,$sql);

	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Deleted');
				window.location.href='details.php';
				</script>");
	}
	else 
	{
			echo '<script>alert("Welcome Error")</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My College Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>    


</head>
<body style="font-family: 'Source Sans 3', sans-serif;">

<nav class="navbar navbar-inverse" style="border-radius: 0px;background: orange;color: white;border: none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:white;">My College Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php" style="color:white;">Form Submission</a></li>
            <li><a href="details.php" style="color:white;">Detail Fetching</a></li>
            <li><a href="merge.php" style="color:white;">Array_merge</a></li>
            <li><a href="bubble.php" style="color:white;">Bubble Sort</a></li>
            <li><a href="ads.php" style="color:white;">Addisstion</a></li>
          </ul>
      <ul class="nav navbar-nav navbar-right" style="display: none;">
        <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" style="margin-top: 55px;"> 

    <table  class="table table-bordered" id="myTable" class="display">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Text Field</th>
                <th>Email Field</th>
                <th>Number Field</th>
                <th>Image Field</th>
                <th>Password Field</th>
                <th>Textarea Field</th>
                <th>Gender Field</th>
                <th>City Field</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM form ORDER BY sno DESC";
            $result = mysqli_query($con, $sql);
            $i=1;
            while($sub_row = mysqli_fetch_assoc($result)) 
            {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $sub_row['name']; ?></td>
                <td><?php echo $sub_row['email']; ?></td>
                <td><?php echo $sub_row['mobile']; ?></td>
                <td><img src="img/<?php echo $sub_row['image']; ?>" style="height: 50px;width: 50px;"></td>
                <td><?php echo $sub_row['pass']; ?></td>
                <td><?php echo $sub_row['textarea']; ?></td>
                <td><?php echo $sub_row['gender']; ?></td>
                <td><?php echo $sub_row['city']; ?></td>
                <td>
                    <a class='edit btn btn-sm btn-primary' href='./edit.php?id=<?php echo $sub_row['sno']; ?>'>Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" href='./details.php?id=<?php echo $sub_row['sno']; ?>'>Remove</a>
                </td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>

   
</div>

</body>
</html>
