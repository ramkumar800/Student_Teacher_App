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
$department = $_POST['Depart'];
$subject = $_POST['Subject'];
$address = $_POST['Address'];
$city = $_POST['City'];
$pin = $_POST['Pin_Code'];
$state = $_POST['State'];
$country = $_POST['Country'];
$qualification = $_POST['qualification'];


$query = "INSERT INTO teacherre (fname,lname,password,day,month,year,email,mobile,gender,depart,subject,address,city,pin,state,country,qualification) values('$fname','$lname','$password','$day','$month','$year','$email','$mobile','$gender','$department','$subject','$address','$city','$pin','$state','$country','$qualification')";
$data=mysqli_query($db,$query);
if($data){
echo"Data Succesfully Inserted";
}
else{
echo "fail";
}
}
?>