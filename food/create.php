<?php include('action/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Service</title>

	<!-- <script>
	function validateForm()
	{
	var a=document.forms["myForm"]["name"].value;
	var b=document.forms["myForm"]["image"].value;
	var c=document.forms["myForm"]["price"].value;
	var d=document.forms["myForm"]["ingredients"].value;
	var e=document.forms["myForm"]["allergens"].value;
	if (a==null || a=="" || b==null || b=="" || c==null || c=="" || d==null || d=="" || e==null || e=="")
	  {
	  alert("Fill all the fields");
	  return false;
	  }
	}
	</script> -->

</head>
<body>


	<form name="myForm" action="action/a_create.php" onsubmit="return validateForm()" method="post">
		<input type="text" placeholder="Name" name="name" required>
		<input type="text" placeholder="Image URL" name="image" required>
		<input type="text" placeholder="Price" name="price" required>
		<input type="text" placeholder="Ingredients" name="ingredients" required>
		<input type="text" placeholder="Allergens" name="allergens" required>
		<input type="submit" value="ADD" name="submit">
	</form>
	

</body>
</html>