<?php
include('config.php');
$total='';
if(isset($_POST['submit']))
{
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
	$total = array_merge($name1,$name2);
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
        
         <div class="col-sm-6">
            <form action='' method='POST'>
                <div class="row">
                <?php if($total=='') { ?>
                    <div class="col-sm-12" style="margin-bottom: 20px;">
                    <h5 style="text-align: center;box-shadow: 5px 5px 5px 5px;padding: 10px;border-radius: 10px;">Output:- 0</h5>
                </div>  
                <?php } else { ?>
                    <div class="col-sm-12" style="margin-bottom: 20px;">
                    <h5 style="text-align: center;box-shadow: 5px 5px 5px 5px;padding: 10px;border-radius: 10px;">Output:- 
                    <?php $arrlength = count($total);
                    for($x = 0; $x < $arrlength; $x++) {
                    echo $total[$x];
                    echo ","; 
                    } ?>
                    </h5>
                </div>  
                <?php } ?> 
                </div>
                <h2 for="usr" style='margin-bottom:30px;'>Row : 1</h2>
                <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">12:</label>
                        <input type="checkbox" value='12' name='name1[]' class="form-control" id="ref">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">14:</label>
                        <input type="checkbox" value='14' name='name1[]' class="form-control" id="rev">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">16:</label>
                        <input type="checkbox" value='16' name='name1[]' class="form-control" id="ref1">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">17:</label>
                        <input type="checkbox" value='17' name='name1[]' class="form-control" id="rev1">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">19:</label>
                        <input type="checkbox" value='19' name='name1[]' class="form-control" id="ref2">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">21:</label>
                        <input type="checkbox" value='21' name='name1[]' class="form-control" id="rev2">
                    </div>
                </div>
                </div>
                <h2 for="usr" style='margin-top:50px;margin-bottom:30px;'>Row : 2</h2>
                <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">22:</label>
                        <input type="checkbox" value='22' name='name2[]' class="form-control" id="ref3">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">24:</label>
                        <input type="checkbox" value='24' name='name2[]' class="form-control" id="rev3">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">26:</label>
                        <input type="checkbox" value='26' name='name2[]' class="form-control" id="ref4">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">27:</label>
                        <input type="checkbox" value='27' name='name2[]' class="form-control" id="rev4">
                    </div>
                </div>
                 <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">29:</label>
                        <input type="checkbox" value='29' name='name2[]' class="form-control" id="ref5">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="usr">31:</label>
                        <input type="checkbox" value='31' name='name2[]' class="form-control" id="rev5">
                    </div>
                </div>
                </div>   
                
                
                <div class="col-sm-12">
                    <button type="submit" name='submit' class="btn btn-primary btn-block">Submit Details</button> 
                </div> 
            </form> 
         </div>
         <div class="col-sm-6">
             
             <div class="col-sm-6">
             <div id='but'>
  <button id='sort'>Sort</button>
  <button id='rev6'>Sort in Revarse</button>
  </div>
  <div>
  <canvas id="myCanvas" width='550'  style='border: 2px solid silver; background: linear-gradient(0.25turn,#f69d3c, #ebf8e1, #f69d3c);'></canvas>
  </div> 
  <script src="js/index.js"></script>
             
         </div> 
             
         </div>   
    </div>    
  </div>  
</div>

</body>

<script>
    					var arr = [];  //create empty array
			var n =25;
			var ngth = "<?php echo"$arrlength"?>";
			for(var i = 0; i< ngth; i++){ //initialize the array
				arr.push(n);
				n+=1;
			}

			function draw(n, color) {
			  	if (canvas.getContext) {
			    	var ctx = canvas.getContext('2d');
					var width = 40;
					var currX = 20;
					ctx.clearRect(0, 0, canvas.width, canvas.height);	
			    	for(var i = 0; i < n.length; i++){
			    		if(i == color){
			    			ctx.fillStyle = 'red';
			    		}else{
			    			ctx.fillStyle = 'blue';
			    		}
						var h = n[i];
						ctx.fillRect(currX, canvas.height - h, width, h);
						currX += width + 1;
					}
			  	}
			}

function* bubbleSort(array, b) { // * is magic
                var swapped;
                var step = 0;
                var pass = 1;
                if(b==1){
                    do{
                        swapped = false;
                        for (var i = array.length; i >=0; i--) {//bobble sort in revarse
                            if (array[i] < array[i + 1]) {
                                var temp = array[i];
                                array[i] = array[i + 1];
                                array[i + 1] = temp;
                                swapped = true;
                                step++;
                                draw(array, i);
                                yield swapped; // pause here
                            }
                        }
                        pass++
                    } while (swapped);
                }else{
                    do{
                        swapped = false;
                        for (var i = 0; i < array.length - 1; i++) {
                            if (array[i] > array[i + 1]) {
                                var temp = array[i];
                                array[i] = array[i + 1];
                                array[i + 1] = temp;
                                swapped = true;
                                step++;
                                draw(array, i);
                                yield swapped; // pause here
                            }
                        }
                        pass++
                    } while (swapped);
                }
            }

			function start(option){
				canvas = document.getElementById('myCanvas');
				var sort = bubbleSort(arr, option);
  				// an anim function triggered every 60th of a second
  				function anim(ar){
    				requestAnimationFrame(anim);
    				//draw(ar);
    				sort.next(); // call next iteration of the bubbleSort function
  				}
  				setTimeout(anim(arr), 10);
			}

			//function ref(){ //Refreshes the page
			//	location.reload();
			//}

			function ref(){ //Refreshes the page
				shuffle(arr);
        		draw(arr, 0);
			}

			function shuffle(array) {//shuffles the array
				  var currentIndex = array.length, temporaryValue, randomIndex;

				  // While there remain elements to shuffle...
				  while (0 !== currentIndex) {

				    // Pick a remaining element...
				    randomIndex = Math.floor(Math.random() * currentIndex);
				    currentIndex -= 1;

				    // And swap it with the current element.
				    temporaryValue = array[currentIndex];
				    array[currentIndex] = array[randomIndex];
				    array[randomIndex] = temporaryValue;
				  }

				  return array;
				}

			window.onload = function(){
				canvas = document.getElementById('myCanvas');
				draw(arr, 0);
			}
document.getElementById("sort").onclick = function() {start(2);};
document.getElementById("ref").onclick = function() {ref();};
document.getElementById("ref1").onclick = function() {ref();};
document.getElementById("ref2").onclick = function() {ref();};
document.getElementById("ref3").onclick = function() {ref();};
document.getElementById("ref4").onclick = function() {ref();};
document.getElementById("ref5").onclick = function() {ref();};
document.getElementById("rev").onclick = function() {start(1);};
document.getElementById("rev1").onclick = function() {start(1);};
document.getElementById("rev2").onclick = function() {start(1);};
document.getElementById("rev3").onclick = function() {start(1);};
document.getElementById("rev4").onclick = function() {start(1);};
document.getElementById("rev5").onclick = function() {start(1);};
document.getElementById("rev6").onclick = function() {start(1);};
    </script>

</html>
