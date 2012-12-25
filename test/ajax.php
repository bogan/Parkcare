<html>
<head>
	<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js"></script>	
	<script  type="text/javascript">
	function go()
	{
		$.ajax({  
			type: "POST",  
			url: "some.php",  
			data: { name: "John", location: "Boston" }
		});
	}
	</script>
</head>
<body>

<button onclick="go();" value ="Go">Buh</button>

</body>
</html>

