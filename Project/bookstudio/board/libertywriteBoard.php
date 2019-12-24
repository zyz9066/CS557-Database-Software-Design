<?
	include '../connect.php';
	
	$writer = $_POST['writer'];
	$name = $_POST['name'];
	$textarea = $_POST['textarea'];
	$day = date("Ymd");
	$boardtype = "자유게시판";
	
	//echo $name;
	
	$sql = "insert into BOARD(BOARD_AUTHOR,BOARD_DATE,BOARD_TEXT,BOARD_TITLE,BOARD_TYPE)
			  values('".$writer."','".$day."','".$textarea."','".$name."','".$boardtype."')";
	$result=mysql_query($sql,$connect) or exit(mysql_error());
	
	echo "<script> alert('write complete'); </script>";
	
	echo "<meta http-equiv='refresh' content='0;url=./libertyboard.php'>"; exit;
	
?>
