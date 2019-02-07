<?PHP
	$con= new mysqli('localhost','root','','company');
	$sql="Select * from vproduct";
	$result=mysqli_query($con,$sql);
	print "<table width='70%' border='1' align='center'>";
	
	print "<tr>";
	while ($fieldinfo=mysqli_fetch_field($result))
	{
	printf ("<th> %s </th>",$fieldinfo->name);
	}
	print "</tr>";
	print "<tr>";
	while ($row=mysqli_fetch_row($result)){
		$id=$row[0];
		$name=$row[1];
		$price=$row[2];
		$manufacturer_no=$row[3];
	print "</tr>";
	print "<tr>";
		print "<td>" .$id."</td>";
		print "<td>" .$name."</td>";
		print "<td>" .$price."</td>";
		print "<td>" .$manufacturer_no."</td>";
	print "</tr>";
	}
	print "</table>";
?>
