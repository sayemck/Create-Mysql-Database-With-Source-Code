<form action="" method="post">
	<table> 
    	<tr>
        	<td>Name:</td>
            <td><input type="text" name="name" placeholder="Enter Name"/></td>
        </tr>
        <tr>
        	<td>Address:</td>
            <td><input type="text" name="address" placeholder="address Name"/></td>
        </tr>
        <tr>
        	<td>Contact:</td>
           <td><input type="text" name="contact" placeholder="contact Name"/></td>
        </tr>
         <tr>
        	<td>Email:</td>
           <td><input type="email" name="email" placeholder="email Name"/></td>
        </tr>
        <tr>
        	<td>&nbsp;</td>
            <td><input type="submit" name="submit" value="submit"/></td>
        </tr>
    </table>
</form>
<?php
 if (isset($_POST['submit'])){
	 $con=new mysqli('localhost','root','','company');
	 $name=$_POST['name'];
	 $address=$_POST['address'];
	 $contact=$_POST['contact'];
	 $email=$_POST['email'];
	 $sql= "call manufact('$name','$address','$contact','$email')";//procedure name
	 mysqli_query($con,$sql);
	 
print "Inserted Data";
	 }
?>