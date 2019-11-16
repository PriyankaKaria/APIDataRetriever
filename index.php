<!DOCTYPE html>
<head>
<title>Fetching Data from APIn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
	listt-style: none;
}
</style>
</head>
<body>

	<form action="DataRetriver.php" method="get">
		<p>JSON_URL:"http://api.krisinformation.se/v1/links?format=json"</p>
		<p>Click on Submit to intiate Data Load.</p>
		<input type="submit" name="Fetch" value="Fetch Data">

	</form>

</body>
</html>