<?php
$con=mysqli_connect("localhost","root","","appdb");
if(!$con){
    echo mysqli_error($con);
}
if(isset($_POST['name'])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $mobile = $_POST["mobile"];
    $policy = $_POST["policy"];
    $location = $_POST["location"];
   $query=mysqli_query($con,"SELECT `id`, `Name`, `Age`, `Location`, `Mobile`, `insurancetype` FROM `users` WHERE `Mobile`= '$mobile'");
   if(mysqli_num_rows($query)<=0){
   $query2=mysqli_query($con,"INSERT INTO `users`(`Name`, `Age`, `Location`, `Mobile`, `insurancetype`) VALUES ('$name','$age','$location','$mobile','$policy')");
if($query2){
    echo "Your Form is Submitted Successfully";
}   
}else{
    echo "User with this Mobile Number already exists";
}

}else{
    echo"Error occurred while processing the form";
}
?>

