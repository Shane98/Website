<?php include("_include/definition.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?= PR_NAME; ?></title>
	<?php include("_include/head.php"); ?>
</head>
<body>

<?php include("_include/nav.php"); ?>

<pre>
Contact Information: <br />
<?php 
	if (CT_EMAIL != ""){
		print 'EMAIL: ' . CT_EMAIL . '<br/>';
	}
	if (CT_ADDRE != ""){
		print 'ADDRESS: ' . CT_ADDRE . '<br/>';
	}
	if (CT_PHONE != ""){
		print 'PHONE: ' . CT_PHONE . '<br/>';
	}
?>
</pre>

</body>
</html>