<html>
<head>
			<script>
		function myFun()
		{
			

			var a1 = document.getElementById("a1").value;
			var a2 = document.getElementById("a2").value;
			var a3 = document.getElementById("a3").value;
			if(a1.checked==true)
			{
				alert(" The selected one is :" +a1.value);
				
			}
			else if(a2.checked==true)
			{
				alert(" The selected one is :" +a2.value);
				
			}
			else if(a3.checked==true)
			{
				alert(" The selected one is :" +a3.value);
				
			}
			
			else

			alert(" The is no selected type:" );
			
		} 


</script>

</head>
<body>


	Gender:<br>
	<input type="radio" id="a1" name="grp1" value="Male">Male
							<input type="radio" id="a2" name="grp1" value="Female">Female
							<input type="radio" id="a3" name="grp1" value="Others">Others<br>

<button onclick="myFun()" id="btn1">Submit</button>


</body>
</html>