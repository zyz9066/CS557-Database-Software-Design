<?session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
	
	include '../connect.php';
	
	$id = $_POST['id'];
	$pw = $_POST['password'];
	
	$sql = "select id from CUSTOMER where id='".$id."' and pw='".$pw."'";
	
	$result = mysql_query($sql);
	$data =  mysql_fetch_array($result);
	
	//echo $data[id];
	
	
	if(!$data[id]){
		echo "wrong id or password";
	}
	else {
	
		$_SESSION['id'] = $data[id];
		//echo "ok";
		
		//echo $_SESSION['id'];
		//echo "<meta http-equiv='refresh' content='0; url=./main.php'>"; //원래 코드
		echo"<script> top.document.location.reload(); </script>";
		
		exit;
	}
	
?>
