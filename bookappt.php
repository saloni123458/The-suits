<?php 

$conn = mysqli_connect("localhost", "root", "", "law");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
}

if(isset($_POST['bookbtn']))
{
	$Name = $_POST['clname'];
	$lawyername = $_POST['Lawyer'];
	$phoneno = $_POST['phone'];
    $Dayy = $_POST['day'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];

	    
    // $sql_query = "INSERT INTO contact(name, email, subject, message) VALUES ('$Name', '$Email', '$Subject','$Message')";
    // $sql_query = "INSERT INTO bookapp(`name`, `email_id`, `subject`) VALUES ('$Name','$Email','$Subject')";
    
    $sql_query = "INSERT INTO `bookapp`(`clname`, `Lawyer`, `phone`, `day`, `date`, `time`) VALUES ('$Name','$lawyername','$phoneno','$Dayy','$Date','$Time')";
    
    
    $result = mysqli_query($conn, $sql_query);
    // $result_login = mysqli_query($conn, $sql_query);

	if($result)
	{
        // if($result_login)
        // {

		echo "<script> alert('your Details entered Successfully!!! ')</script>";
        header("Location: paybutton.html");
        // }
	}

	else{
		echo "<script> alert('Failed to register!!! ')</script>";
        
	}

mysqli_close($conn);

}
?>  