<?php

$conn = mysqli_connect("localhost", "root", "", "law");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
}

if(isset($_POST['send']))
{
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
    // $Message = $_POST['message'];
	    
    // $sql_query = "INSERT INTO contact(name, email, subject, message) VALUES ('$Name', '$Email', '$Subject','$Message')";
    $sql_query = "INSERT INTO contact1(`name`, `email_id`, `subject`) VALUES ('$Name','$Email','$Subject')";
    
    $result = mysqli_query($conn, $sql_query);
    // $result_login = mysqli_query($conn, $sql_query);

	if($result)
	{
        // if($result_login)
        // {

		echo "<script> alert('your Details entered Successfully!!! ')</script>";
        header("Location: contact-us.html");
        // }
	}

	else{
		echo "<script> alert('Failed to register!!! ')</script>";
        
	}

mysqli_close($conn);

}
?>