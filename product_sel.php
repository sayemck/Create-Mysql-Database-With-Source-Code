<?PHP
if(isset($_POST['submit'])){
	
		$mysqli = new mysqli('localhost','root','','company');
		$email = $_POST['email'];
		$sql = "call product_sel('$email',@name,@contact)";
		$rs = mysqli_query($mysqli,$sql);
		
		$rs = mysqli_query($mysqli,"select @name,@contact");
		//print_r($sql1);
while($row = $rs->fetch_assoc())
{
print "Name:".$row['@name']."<br />";
print "Contact:".$row['@contact']."<br />";

}
}
?>
<form action="" method="post">
<table>
<tr>  
<td> <label>Email:</label></td>
<td> <input type="text" name="email" placeholder="Email Input here"/>  </td>
</tr>
<tr>  
<td>&nbsp;   </td>
<td><input type="submit" name="submit" value="Submit Form"/> </td>
</tr>
</table>
</form>
</body>
</html>