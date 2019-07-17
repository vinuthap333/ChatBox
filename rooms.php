<?php

$roomname = $_GET['roomname'];
session_start(); //declare you are starting a session
$_SESSION['room'] = $roomname;
include 'db_connect.php';

$sql = "SELECT * FROM `rooms` WHERE room_name = '$roomname'";
$result = mysqli_query($conn, $sql);

if($result){
    
    if (mysqli_num_rows($result) == 0)
    {
        $message = "ChatBox cannot be found. Try with different name ";
	echo '<script type="text/javascript">';
	echo 'alert("'. $message .'");'; 
	echo 'window.location="http://localhost/YoChat/#chat";';
	echo '</script>';
    }
}
else{
     echo "Error:" . mysqli_error($conn);
}
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
<style>
body {
  margin: 120px auto;
  max-width: 800px;
  padding: 0 20px;
}

.container_chat {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container_chat::after {
  content: "";
  clear: both;
  display: table;
}

.container_chat img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container_chat img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

#usermsg{
    border-radius: 15px;
    border: 2px solid #f4623a;
    padding: 20px; 
    height: 15px; 
}
.time-right {
  margin: 10px;  
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}


.btn-s {
  padding: 0.80rem 2.25rem;
  font-size: 0.85rem;
  font-weight: 700;
  text-transform: uppercase;
  border: none;
  border-radius: 10rem;
}

#inps{
    
    border-radius: 15px;
    border: 2px solid #f4623a;
    padding: 20px; 
    width: 300px;
    height: 15px; 
	}
        
#nav{
    
  background-color:#f4623a;
  color: #FFF;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  -webkit-transition: background-color 0.2s ease;
  transition: background-color 0.2s ease;
        }  
        
#nav .navbar-nav .nav-item .nav-link{        
    color:#0b2e13 ; 
    font-size: 17px;   
}     
        
#nav .navbar-nav .nav-item .nav-link:hover {
    color: #fff;
  }
  
   #nav .navbar-brand:hover {
    color: #fff;
  }

  #nav .navbar-brand{
      color:#0b2e13;
      font-size:20px;
  }
  
  .anyClass{
      height: 350px;
      overflow-y: scroll;
  }
  
  
  
</style>
</head>
<body id="page-top">
    
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="nav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/YoChat/#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/YoChat/#chat">Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/YoChat/#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <br>
    <br>    
    
<h3>Chat Messages - <?php echo $roomname;?></h3>
<div class="container_chat">
    <div class="anyClass"> 
    </div>
</div>


<input type='text' name='usermsg' id='usermsg' placeholder="Type message" class="form-control"/><br>
<button name='submitmsg' id='submitmsg' class="btn btn-primary btn-s">Send</button>      

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  
  
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 
  <script type="text/javascript">
 
setInterval(runFunction, 1000);
function runFunction()
{
    $.post("htcont.php",{room:'<?php echo $roomname ?>'}, 
    function(data, status){
      document.getElementsByClassName('anyClass')[0].innerHTML = data;
  });
}
       
      
  //sending message using enter key
  var input = document.getElementById("usermsg");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("submitmsg").click();
  }
});
  
  
 $("#submitmsg").click(function(){
  var clientmsg = $("#usermsg").val();    
  $.post("postmsg.php",{text: clientmsg , room:'<?php echo $roomname ?>' ,ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'}, 
  function(data, status){
      document.getElementsByClassName('anyClass')[0].innerHTML = data;});
  $("#usermsg").val("");
  return false;
  
  
});
  
  </script>
  
</body>
</html>
