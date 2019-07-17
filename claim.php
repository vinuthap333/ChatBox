<?php

  $room = $_POST['room'];	

if( strlen($room) > 20 or strlen($room) < 2 ) {	

	$message = "Please choose a name between 2 to 20 characters";
	echo '<script type="text/javascript">';
	echo 'alert("'. $message .'");'; 
	echo 'window.location="http://localhost/YoChat/#chat";';
	echo '</script>';

  }

elseif (!ctype_alnum($room)) {

	$message = "Please choose an aplhanumeric name";
	echo '<script type="text/javascript">';
	echo 'alert("'. $message .'");'; 
	echo 'window.location="http://localhost/YoChat/#chat";';
	echo '</script>';	
	}	

else 
{
	include 'db_connect.php';
}

$sql = "SELECT * FROM `rooms` WHERE room_name = '$room'";
$result = mysqli_query($conn, $sql);

if($result){
     
    #checking if room already exists
    if (mysqli_num_rows($result) > 0)
    {
        $message = "Oops! ChatBox already taken! Try it with other name";
	echo '<script type="text/javascript">';
	echo 'alert("'. $message .'");'; 
	echo 'window.location="http://localhost/YoChat/#chat";';
	echo '</script>';
    }
    else{
        #Getting ready to chat
        $sql = "INSERT INTO `rooms` (`room_name`, `stime`) VALUES ( '$room', current_timestamp());";
        if(mysqli_query($conn, $sql)){
            
        $message = "Your chatbox $room is ready.You can chat now!";
	echo '<script type="text/javascript">';
	echo 'alert("'. $message .'");'; 
	echo 'window.location="http://localhost/YoChat/rooms.php?roomname=' .$room. '";';
	echo '</script>';
        }
    } 
}   

else
    {
    echo "Error:" . mysqli_error($conn);
}



?>