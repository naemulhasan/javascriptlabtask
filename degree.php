<html>
<head>
			<script>
		function myFun()
		{
			

			var a1 = document.getElementById("a1").value;
			var a2 = document.getElementById("a2").value;
			var a3 = document.getElementById("a3").value;
			if()
			
			{
				alert(" The selected one is :" +a1.value);
			
				
			}

			
			else

			alert(" selected" );
			
		} 


</script>

</head>
<body>


	Gender:<br>
	<input type="radio" id="a1" name="grp1" value="SSC">SSC
							<input type="radio" id="a2" name="grp2" value="HSC">HSC
							<input type="radio" id="a3" name="grp3" value="BSC">BSC<br>

<button onclick="myFun()" id="btn1">Submit</button>


</body>
</html>