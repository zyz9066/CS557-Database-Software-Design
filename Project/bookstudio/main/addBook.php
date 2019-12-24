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
			<form method="post" action="./addBookProc.php" enctype="multipart/form-data">
				<table class="info" cellspacing="0">
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">book name</td>
						<td  style="border-top: 2px solid #767676;"><input type="text" name="name"></td>
					</tr>
					<tr>
						<td class="title">ISBN</td>
						<td><input type="text" name="isbn"></td>
					</tr>
					<tr>
						<td class="title">ISBN_MEAN</td>
						<td><input type="text" name="isbnmean"></td>
					</tr>
					<tr>
						<td class="title">publisher</td>
						<td><input type="text" name="company"> </td>
					</tr>
					<tr>
						<td class="title">author</td>
						<td><input type="text" name="author"> </td>
					</tr>
					<tr>
						<td class="title">price</td>
						<td><input type="text" name="price"></td>
					</tr>
					<tr>
						<td class="title">image</td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>			
							<input type="file" name="fileupload">
						</td>
					</tr>
					<tr>
						<td colspan="2"  style="border-bottom: 2px solid #767676;"><input type="submit" value="등록" style="margin-left: 10%;">&nbsp;&nbsp;&nbsp;<input type="reset" value="다시입력"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>