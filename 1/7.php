<html>
<head>
<script type="text/javascript">
	function startTime(){

		var d = new Date();
		var h = d.getHours();
		var m = d.getMinute();
		var s = d.getSeconds();
		document.getElementByID('txt').innerHTML=h+':'+m+':'+s;
		setTimeout('startTime()',1000);
	}	
</script>
<style type="txt/css">
	h1{
		font-size:70px;
} 
</style>
</head>
<body bgcolor="#349" text="white" onload="startTime()">
<br>
<h1 align="center">The Time from the local system is :
	<span id="txt"></span>>
	
<?php echo "The time from the server is ".date("h:i:sa");?>

</h1>

</body>
</html>


