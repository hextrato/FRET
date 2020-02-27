<? 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$x = $_SERVER['REQUEST_URI'];
if (strpos($x, "index.html") == false && strpos($x, "index.php") == false && substr($x, -1) != "/") {
?>
<html>
	<body>
		<script>
		 var x = location.href;
		 if (!x.includes("index.html") && !x.includes("index.php") && !x.endsWith("/")) {
			location.href = x+"/";
		 }
		</script>
	</body>
</html>	
<?
} else {
	$GLOBALS["BASE_APP_RELATIVE_PATH"] = "../../";
	require_once("_funding.php");
}
?> 
