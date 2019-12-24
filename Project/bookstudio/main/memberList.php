<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>member list</title>
<style type="text/css">
	#wrap {
		width: 80%;
		margin: 0 auto;
		text-align: center;
	}
	
	td {
		padding: 8px;
		border-bottom: 1px solid #ECECEC;
	}
	
	table {
		width: 100%;
		margin-top: 30px;
		margin-bottom: 30px;
	}
	
	#paging {
		width: 100%;
		margin-top: 30px;
		margin-bottom: 30px;
	}
	
	#search {
		width: 100%;
		margin-top: 30px;
		margin-bottom: 30px;
		padding-top: 30px;
		padding-bottom: 30px;
		text-align: center;
		background-color: #f3f3f3;
		border: 2px solid #e3e3e3;
	}
</style>
</head>
<body>
	<div id="wrap">
		<br>
		<table cellspacing="0" >
			<tr>
				<td style="width: 25%; text-align: center; border-top: 2px solid #797979;">member number</td>
				<td style="width: 25%; text-align: center; border-top: 2px solid #797979;">name</td>
				<td style="width: 25%; text-align: center; border-top: 2px solid #797979;">id</td>
				<td style="width: 50%; text-align: center; border-top: 2px solid #797979;">phone number</td>
			</tr>
			<!-- 회원 목록들 -->
				<tr>
					<td>01</td>
					<td>홍길동</td>
					<td>길동이짱</td>
					<td>010-123-12</td>
			</tr>
			<!-- 회원 목록끝 -->
			<tr>
				<td colspan="7" style="border-bottom: 2px solid #797979;"></td>
			</tr>
		</table>
		
		<!-- 페이징 -->
		<div id="paging">
			paging
		</div>
		
		<!--  회원검색 -->
		<div id="search">
			<form method="post" action="./memberList.html">
				<select name="type">
					<option value="0">id</option>
					<option value="0">name</option>
				</select>&nbsp;
				<input type="text" name="searchText" size="30">&nbsp; 
				<input type="submit" value="search">
			</form>
		</div>
	</div>
</body>
</html>