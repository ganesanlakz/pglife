<?php
   require "database_connect.php";
    


   $name=$_POST['full_name'];
   $phone_number=$_POST['phone'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $college_name=$_POST['college_name'];
   $gender=$_POST['gender'];


   $sql_1="SELECT * FROM users WHERE email='$email'";
$result_1=mysqli_query($conn,$sql_1);
if(!$result_1){
    echo "something went wrong";
    exit;
}
$row_count=mysqli_num_rows($result_1);
if($row_count!=0){
    echo "This email id is already registered with us!";
    exit;
}

    $sql = "INSERT INTO users (full_name ,email,password,phone,gender,college_name) values ('$name', '$email', '$password',  '$phone_number', '$gender','$college_name')" ; 

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "registration successfull";

    mysqli_close($conn);
?>
