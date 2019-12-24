<?
	
	include '../connect.php';
	
	//echo  $_GET['num'];
	
	$sql = "select BOARD_TITLE,BOARD_AUTHOR,BOARD_DATE,BOARD_TEXT FROM BOARD WHERE BOARD_NUM =".$_GET['num'];
	$result = mysql_query($sql);
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
			
				<table class="info" cellspacing="0">
					<? while ($row = mysql_fetch_array($result)) {?>
						
					
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">title</td> &nbsp;&nbsp;
						<td><?=$row[BOARD_TITLE]?></td>			
					</tr>
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">writer</td> &nbsp;&nbsp;
						<td><?=$row[BOARD_AUTHOR]?></td>			
					</tr>
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">date</td> &nbsp;&nbsp;
						<td><?=$row[BOARD_DATE]?></td>			
					</tr>
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">content</td> &nbsp;&nbsp;
						<td colspan="2"><?=$row[BOARD_TEXT] ?></td>
					</tr>
					<?;} ?>
				</table>
			
			<a href="./board.php">back</a>
				
		</div>
	</div>
</body>
</html>