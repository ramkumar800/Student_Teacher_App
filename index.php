<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>List Of Teacher</h1>
<a class="btn btn-primary" href="Teacherre.html" role="button">New Teacher</a>
<a class="btn btn-primary" href="AdminPanel.html" role="button">Admin Panel</a>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>GENDER</th>
		<th>SUBJECT</th>
		<th>ADDRESS</th>
        <th>CITY</th>
        <th>PIN</th>
        <th>STATE</th>
        <th>COUNTRY</th>
        <th>QUALIFICATION</th>
		<th>DEPRTMENT</th>
		
		
</tr>
</thead>
<tbody>


    <?php
   
   include("connection.php");
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //check connection
  if  ($db->connect_error){
    die("Connection Failed: " . $db->connect_error);
  }
  //read all row from database table
  $sql="SELECT *FROM teacherre";
  $result=$db->query($sql);
  if(!$result){ 
    die("Invalid query: " . $db->error);
  }
  while($row =$result->fetch_assoc()){

  

  echo  "<tr>
    <th> ".$row["id"] ." </th>
    <th>".$row["fname"] ." </th>
    <th>".$row["lname"] ." </th>
    <th>".$row["email"] ." </th>
    <th>".$row["mobile"] ." </th>
    <th>".$row["gender"] ." </th>
	<th>".$row["subject"] ." </th>
	<th>".$row["address"] ." </th>
    <th>".$row["city"] ." </th>
    <th>".$row["pin"] ." </th>
    <th>".$row["state"] ." </th>
    <th>".$row["country"] ." </th>
    <th>".$row["qualification"] ." </th>
	<th>".$row["depart"] ." </th>
    <td>
        <a class='btn btn-primary btn-sm' href='update.php?id=$row[id]'>Update</a>
        <a href='delete.php?id=$row[id]'><input type='submit' value='Delete' class='btn btn-danger btn-sm' onclick = 'return checkdelete()' ></a>
    </td>
</tr>";
  }
?>
</tbody>    
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
function checkdelete(){
return confirm('Are You Sure to deleted record');
}
</script>
</body>
</html>