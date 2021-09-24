<?php
$server="localhost";
$username="root"
$password="";
$dbname="contact";

$conn =mysql_connect($server ,$username,$dbbase);
if(isset($_POST['submit'])){
	if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Message'])){
    
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $message=$_POST['Message'];

    $query = "insert into form(Name,Email,Message) values('$Name' , '$Email' , '$message')";\
    $run = mysqli_query($conn,$query) or die(mysqli_error());
    if($run){
    	echo "Form submitted successfully";

    }
    else{
    	echo "form not submitted";
    }
	}
	else{
		echo "all fields required";
	}
}
?>