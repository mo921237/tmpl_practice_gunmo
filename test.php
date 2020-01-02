<?

	echo document.referrer;
?>
<html>
<head>
<script type="text/javascript">
	var con;
	window.onload = function(){
		console.log(document.referrer);
		con = document.getElementById("con");
		con.append("document.referrer : "+document.referrer);
		con.append(document.createElement("br"));
		//con.append("window.origin : "+window.origin);
	}
</script>
</head>
<body>
	<div id="con">
	</div>
	<a href="http://www.stillknow.com/test.php" > a태그  바로가기</a>
	<br />
	<button onclick="location.href='http://www.stillknow.com/test.php';">location.href</button>
	<br />
	<button onclick="window.location='http://www.stillknow.com/test.php';">window.location</button>
	<br />
	<button onclick="location.replace('http://www.stillknow.com/test.php');">location.replace</button>
</body>
</html>
