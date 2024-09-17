<?php
d define('DB_SERVER', '127.0.0.1:3308');
   define('DB_PORT', '3308');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'college');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //check connection
  if  ($db->connect_error){
    die("Connection Failed: " . $db->connect_error);
  }
  
    $id = $_GET['id'];

    $query = "DELETE FROM studentreg WHERE  id ='$id' ";
	$data = mysqli_query($db,$query);
	if($data)
	{
	echo"Record Deleted"
	?>
	<meta http-equiv = "refresh" content = "0; url =StudentApprove.php"/>
	<?php
	}
	else{
	echo"faild";
	}
	 
	
	

	
	?>