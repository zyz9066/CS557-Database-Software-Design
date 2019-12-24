<?
	include '../connect.php';
	mysql_query("set names UTF8");
	$id = $_POST['id'];
	$pw = $_POST['password'];
	$name = $_POST['name'];
	$zipcode1 = $_POST['zipcode1'];
	$addr1 = $_POST['addr1'];
	$addr2 = $_POST['addr2'];
	$call1 = $_POST['call1'];
	$phone1 = $_POST['phone1'];
	
	


	//$query = "call CUSTOMERINSERT ('$name','$id','$pw',$zipcode1,'$addr1','$addr2','nomal',0,$phone1,$call1)";
	//echo $query;
	//$result=mysql_query($query,$connect) or exit(mysql_error()); // 오류 출력
	
	$sql1 = "INSERT INTO CUSTOMER(NAME,id,PW,ADDR_NUM,ADDR_FIRST,ADDR_SECOND,GRADE,MIL,PHONE_NUM,TEL_NUM)
			  values('".$name."','".$id."','".$pw."','".$zipcode1."','".$addr1."','".$addr2."','".$nomal."','0','".$phone1."','".$call1."')";
	$result1=mysql_query($sql1,$connect) or exit(mysql_error());


	//echo $sql1;

	$sql2 = "INSERT INTO STASTICS (CUST_NUM) SELECT MAX(CUST_NUM) FROM CUSTOMER";
	$result2=mysql_query($sql2,$connect) or exit(mysql_error());
	
	echo "<script> alert('registered'); </script>";
	echo "<meta http-equiv='refresh' content='0;url=../main/main.php'>"; exit;
?>
