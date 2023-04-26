<?php
include('config.php');
if(isset($_GET['id']))
{
    $sno=$_GET['id'];
    $sq = "SELECT * FROM `form` WHERE sno = '$sno'";
        $resul = mysqli_query($con, $sq);
        while($row = mysqli_fetch_assoc($resul)) 
    {
        $name1 = $row['name'];
        $email1 = $row['email'];
        $mobile1 = $row['mobile'];
        $pass1 = $row['pass'];
        $textarea1 = $row['textarea'];
        $gender1 = $row['gender'];
        $city1 = $row['city'];
        $image1 = $row['image'];
    }
}
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
	$textarea = $_POST['textarea'];
    $gender = $_POST['gender'];
	$city = $_POST['city'];

	$main_image = $_FILES['image']['name'];
    if($main_image!='')
    {
        $sql = "UPDATE `form` SET 
        name='$name',email='$email',mobile='$mobile',pass='$pass',textarea='$textarea',gender='$gender',city='$city',image='$main_image'WHERE sno ='$id'";
        move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$date.$main_image);
    }
    else
    {
        $sql = "UPDATE `form` SET 
        name='$name',email='$email',mobile='$mobile',pass='$pass',textarea='$textarea',gender='$gender',city='$city'WHERE sno ='$id'";
    }
    $run = mysqli_query($con,$sql);

	if($run)
	{
		// die();
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Form Updated');
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
  
<div class="container">
  <div class="col-sm-12">
    <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-6">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Text Field:</label>
                        <input type="text" value='<?php echo $name1; ?>' name='name' class="form-control" id="usr">
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Email Field:</label>
                        <input type="email"  value='<?php echo $email1; ?>' name='email' class="form-control" id="usr">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Number Field:</label>
                        <input type="number"  value='<?php echo $mobile1; ?>' name='mobile' class="form-control" id="usr">
                        <input type="hidden"  value='<?php echo $sno; ?>' name='id' class="form-control" id="usr">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Image Field:</label>
                        <input type="file" name='image' class="form-control" id="usr">
                    </div>
                    <img src="img/<?php echo $image1; ?>" style="height: 50px;width: 50px;">
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Password Field:</label>
                        <input type="password" value='<?php echo $pass1; ?>' name='pass' class="form-control" id="usr">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="comment">Textarea Fileds:</label>
                        <textarea class="form-control" name='textarea' rows="3" id="comment"><?php echo $textarea1; ?> </textarea>
                      </div>
                </div>  
                
                <div class="col-sm-12">
                    <h5>Select Gender</h5>
                    <?php if($gender1=='Male'){ ?>
                        <label class="radio-inline"><input type="radio" checked value='Male' name="gender">Male</label>
                        <label class="radio-inline"><input type="radio" value='Female' name="gender">Female</label>
                        <label class="radio-inline"><input type="radio" value='Transgender' name="gender">Transgender</label>
                    <?php } elseif($gender1=='Female'){ ?>
                        <label class="radio-inline"><input type="radio" value='Male' name="gender">Male</label>
                        <label class="radio-inline"><input type="radio" checked value='Female' name="gender">Female</label>
                        <label class="radio-inline"><input type="radio" value='Transgender' name="gender">Transgender</label>
                    <?php } elseif($gender1=='Transgender'){ ?>
                        <label class="radio-inline"><input type="radio" value='Male' name="gender">Male</label>
                        <label class="radio-inline"><input type="radio" value='Female' name="gender">Female</label>
                        <label class="radio-inline"><input type="radio" checked value='Transgender' name="gender">Transgender</label>
                    <?php } ?>
                </div>  
                
                
                <div class="col-sm-12" style="margin-top:10px;">
                    <div class="form-group">
                        <label for="sel1">Select City:</label>
                        <select class="form-control" id="sel1"  name='city'>
                          <option><?php echo $city1; ?></option>
                          <option>Dehradhun</option>
                          <option>Masuri</option>
                          <option>Jaipur</option>
                          <option>Jodhpur</option>
                        </select>
                      </div>
                </div>   
                
                <div class="col-sm-12">
                    <button type="submit" name='submit' class="btn btn-primary btn-block">Submit Details</button> 
                </div>  
            </div>    
            </form>
         </div>
         <div class="col-sm-3"></div>   
    </div>    
  </div>  
</div>

</body>
</html>
