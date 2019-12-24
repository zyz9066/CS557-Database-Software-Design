<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
include '../connect.php';


if(isset($_GET['isbn']))
{
	$isbn = $_GET['isbn'];
}
else{
	if(!$isbn) $isbn = 'none'; // 현재 페이지
}
$query = "SELECT * FROM EBOOK WHERE ISBN='$isbn'";
$result = mysql_query($query);

?>

<html>
<head>
<title>EBOOK ORDER</title>
<style type="text/css">
	body{
		text-align: center;
	}
</style>
</head>
<body style="text-align: centerl">
	<div id="wrap">
	<!-- 여기서 주문테이블에 들어가고 회원은 그 이북을 볼수있어야함(결제프로세스) -->
		<form method=post name=orderForm action="ebookOrderProcess.php">

			<?	
				$data=mysql_fetch_array($result);
?>
				<input type="hidden" name="isbn" value="<?=$data[ISBN]?>" />
				<?=$data[TITLE]?> will you buy E-book?
				<br><br>
					<input type="submit" value="  yes  ">&nbsp;&nbsp;&nbsp;<input type="button" value="no">
			
		</form>
	</div>
</body>
</html>
