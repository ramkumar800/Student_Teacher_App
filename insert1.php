<?php
 include("connection.php");

{
$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$password = $_POST['password'];
$day = $_POST['Birthday_day'];
$month = $_POST['Birthday_Month'];
$year = $_POST['Birthday_Year'];
$email = $_POST['Email_Id'];
$mobile = $_POST['Mobile_Number'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$pin = $_POST['Pin_Code'];
$state = $_POST['State'];
$country = $_POST['Country'];
$ClassX_Board = $_POST['ClassX_Board'];
$ClassX_Percentage = $_POST['ClassX_Percentage'];
$ClassX_YrOfPassing = $_POST['ClassX_YrOfPassing'];
$ClassXII_Board = $_POST['ClassXII_Board'];
$ClassXII_Percentage = $_POST['ClassXII_Percentage'];
$ClassXII_YrOfPassing = $_POST['ClassXII_YrOfPassing'];
$Other_name = $_POST['Other_name'];
$courses = $_POST['courses'];



$query = "INSERT INTO studentreg (firstname,lastname,password,day,month,year,email,mobile,gender,address,city,pincode,state,country,ClassX_Board,ClassX_Percentage,ClassX_YrOfPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrOfPassing,Other_name,courses) values('$fname','$lname','$password','$day','$month','$year','$email','$mobile','$gender','$address','$city','$pin','$state','$country','$ClassX_Board','$ClassX_Percentage','$ClassX_YrOfPassing','$ClassXII_Board','$ClassXII_Percentage','$ClassXII_YrOfPassing','$Other_name','$courses')";
$data=mysqli_query($db,$query);
if($data){
echo"Data Succesfully Inserted";
}
else{
echo "fail";
}
}
?>