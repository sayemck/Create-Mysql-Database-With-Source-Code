<?PHP
if(isset($_POST['submit'])){
		$mysqli = new mysqli('localhost','root','','company');
		$name = $_POST['name'];
		$sql = "call product_del('$name');";
		mysqli_query($mysqli,$sql);
		print "Data Deleted";
}
?>
<form action="" method="post">
<table>
<tr>  
<td> <label>Name:</label></td>
<td> <input type="text" name="name" placeholder="Name Input here"/>  </td>
</tr>
<tr>  
<td>&nbsp;   </td>
<td><input type="submit" name="submit" value="Submit Form"/> </td>
</tr>
</table>
</form>
</body>
</html>