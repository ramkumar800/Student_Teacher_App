<?php 
include("connection.php");
$id = $_GET['id'];

$query = "SELECT * FROM teacherre WHERE id= '$id'";
$data = mysqli_query($db, $query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:rgb(169, 196, 129);
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: rgb(90, 192, 205); 
  border-collapse: collapse; 
  border: 2px solid navysssssssss
}
table.inner{
  border: 0px
}
</style>
</head>
<body>
    <h3>TEACHER REGISTRATION FORM</h3>
    <form action="#" method="POST">
        <table align="center" cellpadding="10">
            <tr>
                <td>FIRST NAME</td>
                <td><input type="text" value="<?php echo $result['fname']; ?>" name="First_Name" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>LAST NAME</td>
                <td><input type="text" value="<?php echo $result['lname']; ?>" name="Last_Name" maxlength="30" /></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" value="<?php echo $result['password']; ?>" name="password" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>DATE OF BIRTH</td>
                <td>
                    <select name="Birthday_day" required>
                        <option value="-1">Day:</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i; ?>" <?php if ($result['day'] == $i) echo "selected"; ?>><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select name="Birthday_Month" required>
                        <?php
                        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                        foreach ($months as $month) {
                        ?>
                            <option value="<?php echo $month; ?>" <?php if ($result['month'] == $month) echo "selected"; ?>><?php echo substr($month, 0, 3); ?></option>
                        <?php } ?>
                    </select>
                    <select name="Birthday_Year" required>
                        <?php for ($i = 1980; $i <= 2012; $i++) { ?>
                            <option value="<?php echo $i; ?>" <?php if ($result['year'] == $i) echo "selected"; ?>><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EMAIL ID</td>
                <td><input type="text" value="<?php echo $result['email']; ?>" name="Email_Id" maxlength="100" required /></td>
            </tr>
            <tr>
                <td>MOBILE NUMBER</td>
                <td><input type="text" value="<?php echo $result['mobile']; ?>" name="Mobile_Number" maxlength="10" required /></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>
                    <select name="Gender" required>
                        <option value="Male" <?php if ($result['gender'] == 'Male') echo "selected"; ?>>Male</option>
                        <option value="Female" <?php if ($result['gender'] == 'Female') echo "selected"; ?>>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>DEPARTMENT</td>
                <td>
                    <select name="Depart" required>
                        <option value="Computer Science" <?php if ($result['depart'] == 'Computer Science') echo "selected"; ?>>Computer Science</option>
                        <option value="Arts" <?php if ($result['depart'] == 'Arts') echo "selected"; ?>>Arts</option>
                        <option value="Science" <?php if ($result['depart'] == 'Science') echo "selected"; ?>>Science</option>
                        <option value="Biology" <?php if ($result['depart'] == 'Biology') echo "selected"; ?>>Biology</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>SUBJECT</td>
                <td><input type="text" value="<?php echo $result['subject']; ?>" name="Subject" required /></td>
            </tr>
            <tr>
                <td>ADDRESS</td>
                <td><input type="text" value="<?php echo $result['address']; ?>" name="Address" required /></td>
            </tr>
            <tr>
                <td>CITY</td>
                <td><input type="text" value="<?php echo $result['city']; ?>" name="City" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>PIN CODE</td>
                <td><input type="text" value="<?php echo $result['pin']; ?>" name="Pin_Code" maxlength="6" required /></td>
            </tr>
            <tr>
                <td>STATE</td>
                <td><input type="text" value="<?php echo $result['state']; ?>" name="State" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>COUNTRY</td>
                <td><input type="text" name="Country" value="India" readonly /></td>
            </tr>
            <tr>
                <td>HIGHEST QUALIFICATION</td>
                <td>
                    <select name="qualification" required>
                        <option value="High School" <?php if ($result['qualification'] == 'High School') echo "selected"; ?>>High School</option>
                        <option value="Intermediate" <?php if ($result['qualification'] == 'Intermediate') echo "selected"; ?>>Intermediate</option>
                        <option value="Graduation" <?php if ($result['qualification'] == 'Graduation') echo "selected"; ?>>Graduation</option>
                        <option value="Post Graduation" <?php if ($result['qualification'] == 'Post Graduation') echo "selected"; ?>>Post Graduation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>

<?php 
if(isset($_POST['update'])) {
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

    $query = "UPDATE teacherre SET fname='$fname', lname='$lname', password='$password', day='$day', month='$month', year='$year', email='$email', mobile='$mobile', gender='$gender', depart='$department', subject='$subject', address='$address', city='$city', pin='$pin', state='$state', country='$country', qualification='$qualification' WHERE id='$id'";

    $data = mysqli_query($db, $query);
    if($data) {
        echo "Data Updated Successfully";
		?>
	<meta http-equiv = "refresh" content = "0; url = http://localhost/test/index.php"/>
	<?php
    } else {
        echo "Failed to Update Data";
    }
}
?>
