<?php 

$dbhost='localhost:3306';
$dbuser='root';
$dbpass='icancode23';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass); //remember that mysql_connect has been deprecated this is used to make a connection to the sql server on the localhost in this case and a hosted server in case of real time sites
//if ($conn)
{
	//echo "connection succesfull\n";
}
//else 
//echo 'connection failed';
$databasefound=mysqli_select_db($conn,'tester'); //selecting a particle
//if ($databasefound)
	//echo 'database selected';
/* $sql = "INSERT INTO employee    //a query string written in sql language performs all the required operations in the database
VALUES ('vishrut', 19, 'M')";
*/
$sql="SELECT name,age,sex from employee";
$dataentercheck=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($dataentercheck);
$row=mysqli_fetch_assoc($dataentercheck);  //returns arrays with key value pair ie an associative array where in the key is the column and the corresponding row value is the value it is also a kind of a iterator as might be visible from the output as a result of such continouos commands
//echo "emp name:{$row['name']} <br>";   //extracting the data from row associative array
if ($_POST['name'])   //after the http postt request the the same php file from the form action attribute of the html form a $_POST array is made which is also associative
echo "data has been entered ";
$insertionsqlcommand="INSERT INTO employee
VALUES ('{$_POST['name']}',{$_POST['age']},'{$_POST['sex']}')";
$datastore=mysqli_query($conn,$insertionsqlcommand);
if($datastore)
	echo 'data saved succesfully';

//if ($dataentercheck)
	//echo 'data succesfully entered';
//else
	//echo 'could not enter the data';
//STUDY ABOUT THE FOR EACH LOOP
mysqli_close($conn);
?>
<html>
<body>
<div>
	<form action="<?php $_PHP_SELF ?>" method="POST" >
	enter your name:
	<input type='text' name="name" placeholder='enter you name here'>
	enter your age:
	<input type='text' name="age" placeholder='age'>
	enter sex:
	<input type='text' name="sex" placeholder=''>
	<input type='submit' value='register' >
</form>
</div>
</body>
</html>