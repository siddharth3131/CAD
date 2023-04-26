
<?php
include('config.php');
$total='';
if(isset($_POST['submit']))
{
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
	$name3 = $_POST['name3'];
	$total = $name1+$name2+$name3;
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
         <form action='' method='POST'>
            <div class="row">
                <?php if($total=='') { ?>
                    <div class="col-sm-12" style="margin-bottom: 20px;">
                    <h5 style="text-align: center;box-shadow: 5px 5px 5px 5px;padding: 10px;border-radius: 10px;">Output:- 0</h5>
                </div>  
                <?php } else { ?>
                    <div class="col-sm-12" style="margin-bottom: 20px;">
                    <h5 style="text-align: center;box-shadow: 5px 5px 5px 5px;padding: 10px;border-radius: 10px;">Output:- <?php echo $total; ?></h5>
                </div>  
                <?php } ?>
                  
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Enter Value 1:</label>
                        <input type="number" name='name1' class="form-control" id="usr">
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Enter Value 2:</label>
                        <input type="number" name='name2' class="form-control" id="usr">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="usr">Enter Value 3:</label>
                        <input type="number" name='name3' class="form-control" id="usr">
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
