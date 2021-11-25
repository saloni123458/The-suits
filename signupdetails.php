<?php
//$servername="localhost";
//$username="root";
//$password="";
//$database_name="ecofarm";

$conn = mysqli_connect("localhost", "root", "", "law");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
}

if(isset($_POST['signup']))
{
	$username = $_POST['username'];
	$email = $_POST['email_id'];
	$pasword = $_POST['password'];
	

//    echo "New Details entered!!!";
//        
	$sql_query = "INSERT INTO sign_up(username, email_id, password) VALUES ('$username', '$email', '$pasword')";
    $login_query = "INSERT INTO login(username, password) VALUES ('$username', '$pasword')";
    
    $result = mysqli_query($conn, $sql_query);
    $result_login = mysqli_query($conn, $login_query);

	if($result)
	{
        if($result_login)
        {
            
        
		echo "<script> alert('your Details entered Successfully!!! ')</script>";
        header("Location: school.html");
        }
	}

	else{
		echo "<script> alert('Failed to register!!! ')</script>";
        
	}

mysqli_close($conn);


}
?>