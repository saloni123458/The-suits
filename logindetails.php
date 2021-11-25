<?php

$conn = mysqli_connect("localhost", "root", "", "law");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
    
}

    $username = $_POST['username'];
    $pasword = $_POST['password'];
    
    
    $sql_query="SELECT * FROM login WHERE username ='$username' AND password='$pasword'";
    
    $result=mysqli_query($conn,$sql_query);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        $login=true;
        echo "<script> alert('Logged In Successfully!!! ')</script>";
        $_SESSION['name']=$username;
        
        header("Location: school.html");
    }
    else{

       header("Location: error.html");
    }

?>