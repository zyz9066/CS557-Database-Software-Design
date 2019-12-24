<!-- 고객별 통계페이지입니다. 2013-05-18 dhpark -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
	include '../connect.php';
	
	
?>

<html>
<head><title>Order static</title>

<style type="text/css">
a:link { text-decoration:none }
a:visited { text-decoration:none }
a:active { text-decoration:none }
a:hover { text-decoration:none }

table {font-size: 10pt}
</style>
</head>
	<form method=post name=srhForm action="<?=$php_self?>">
	
		<input type="hidden" name="nPage" value="1" />
		<input type=hidden name=no />

	<table border=1 width=100% align=center valign=middle>	
		
		<tr align=center valign=middle >
			
		<th>sum</th>
			<th>Philosophy, psychology, ethics</th>
			<th>religion</th>
			<th>Social science</th>
			<th>Science</th>
			<th>Science of Technology</th>
			<th>ART</th>
			<th>language </th>
			<th>literature</th>
			<th>History, geography, tourism</th>
			<th>TOTAL</th>
		</tr>

		<tr>
			
				<td align=center><?
				$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 0";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];
				?></td>
				<td align=center><?
				$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 1";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];
				?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 2";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 3";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 4";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 5";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 6";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 7";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 8";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?$sql = "select count(*) as field from `BOOK` where substring(isbn_mean,3,1) = 9";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<td align=center><?
				$sql = "select count(*) as field from `BOOK`";
				$res = mysql_query($sql);
				$data =  mysql_fetch_array($res);
				echo $data[field];?></td>
				<!-- 
				<td align=center valign=middle>
					<input type="button" value=수정 onclick="process('mod','<?=$data[idx]?>'); return false;">
					<input type="button" value=삭제 onclick="process('del','<?=$data[idx]?>'); return false;">
				</td>
				 -->
			</tr>
	

	</table>
	
</html>