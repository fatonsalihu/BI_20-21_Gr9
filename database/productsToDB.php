<?php
$servername = "localhost";
$username = "root";
$password = "";

include("DBcreate.php");
$db= new CreateDb();

$dbname=$db->get_name();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$open = fopen('newproductfile.txt','r');
 
while (!feof($open)) 
{
	$getTextLine = fgets($open);

	$explodeLine = explode("*",$getTextLine);


	list($filename,$name,$description,$price) = $explodeLine;

	$sql_check_qry= "SELECT filename from products where filename='$filename'";
	$checker = mysqli_query($conn, $sql_check_qry);
	$fname=trim($filename," ");
	if(!$checker->num_rows > 0){
	$qry = "INSERT INTO products (filename,name,description,price) VALUES('$fname','$name','$description','$price')";
	
	$test=mysqli_query($conn,$qry);
	
	if($test==1){
		$myfile = fopen("log.txt", "a");
		$newp="$name";
		$length=strlen($newp);
		
		fwrite($myfile,"this product was added \"$newp\" ->(string length: " .strlen($newp).")  Data:"  .date("Y-m-d h:i:sa") ."\n");
		
		printf("\n string length: \"%u\" -> this product was added  \" %s.\"",$length,$newp);
		fclose($myfile);
	}

	}
}

 
fclose($open);
?>

<html>
 <body>
    <h3><a href="../index.php">Kthehu mbrapa</a></h3>
 </body>
</html>