<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>Messages</h1>
<a class="btn btn-primary" href="TeacherPanel.html" role="button">Home</a>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>COUNTRY</th>
        <th>MESSAGE</th>

		
		
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
  $sql="SELECT *FROM message";
  $result=$db->query($sql);
  if(!$result){ 
    die("Invalid query: " . $db->error);
  }
  while($row =$result->fetch_assoc()){

  

  echo  "<tr>
    <th>".$row["id"] ." </th>
    <th>".$row["firstname"] ." </th>
    <th>".$row["lastname"] ." </th>
    <th>".$row["country"] ." </th>
    <th>".$row["message"] ." </th>
</tr>";
  }
?>
</tbody>    
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>