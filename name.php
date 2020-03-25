<html>
<head>
</head>
<body>
	<script>
		function myFun()
		{
			var correct_way= /^ A-Za-z/+$;

			var a= document.getElementById("User_Name").value;
			if(a=="")
			{
				document.getElementById("Message").innerHTML="**Please fill name";
				return false;
			}
			if(a.length<3 || a.length>20)
			{
				document.getElementById("Message").innerHTML="** Name does not match the limit ";
				return false;
			}
			if(a.match(correct_way))
				true;
			else
			{
				document.getElementById("Message").innerHTML=" **use alphabets";
				return false;
			}
		} 


</script>
<form onsubmit="return myFun()">

Name:<br>
<input type="text" id="User_Name" value="">
<span id="Message"></span><br>
<input type="submit"  value="Submit"></input>

</form>
</body>
</html>