<html>
<head>
		<script>
		function myFun()
		{
			

			var a1 = document.getElementById("a1").value;
			
			if(a1.checked==true)
			{
				alert(" The selected one is :" +a1.value);
				
			}
			
			
			else

			alert(" The is no selected type:" );
			
		} 


</script>

</head>


</body>
Select Date :<br>
						
							<input id="a1" type="Date" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
							</body><br>

<button onclick="myFun()" id="btn1">Submit</button>
</html>