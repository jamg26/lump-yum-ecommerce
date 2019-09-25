<?php 
include('../db/dbconn.php');
  
if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata="SELECT Description FROM product WHERE Description='$name' and category='feature';";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo '<font color="red">Already Exist</font>';
 }
 else
 {
  echo '<input type="submit" name="add" value="Submit" id="stylegamaysad" style="margin-top:-3%; margin-left:-25%; text-decoration:none;  box-shadow: 5px 8px #8889; padding:15px 15px 15px 15px; position:absolute; letter-spacing: 1px; font-size: 20px; color:#fff; background-color:#ffaf00; border-radius: 25px; border: 2px solid #fff558;">';
 }
 exit();
}

	?>