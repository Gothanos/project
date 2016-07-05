<!DOCTYPE html>
<html>
<body>
<?php
if(!isset($_SESSION["contdor"])){
	$_SESSION["contador"] = 1;
}
else{
	$_SESSION["contador"] = $_SESSION["contador"] + 1;
}
?>
<?php echo $_SESSION["contador"]?>
</body>
</html>
