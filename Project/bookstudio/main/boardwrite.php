<?
	session_start();
	include '../connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
	#wrap {
		width: 90%;
		margin: 0 auto;
		font-weight: bold;
	}
	
	#contentArea {
		margin: 0 auto;
		padding: 30px;
	}
	
	td {
		background-color: #f5f5f5;
		padding: 10px;
		padding-left: 20px;
		border-bottom: 1px solid #ECECEC;
	}
	
	table{
		margin-top: 30px;
		margin-bottom: 30px;
		width: 100%;
	}
	
	td.title {
		width: 10%;
	}
</style>
</head>
<body>
	<div id="wrap">
		<div id="contentArea">
			<form method="post" action="./libertywriteBoard.php">
				<input type="hidden" name="writer" value=<?=$_SESSION['id']?>>
				<table class="info" cellspacing="0">
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">title</td>
						<td  style="border-top: 2px solid #767676;"><input type="text" name="name" style="width: 80%;"></td>
					</tr>
					
					<tr>
						<td colspan="2"><textarea name='textarea' style="width: 100%; height: 300px"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"  style="border-bottom: 2px solid #767676; text-align: center;"><input type="submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="reset" value="reset"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>