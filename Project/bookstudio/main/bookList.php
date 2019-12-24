<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>book search</title>
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
		<table cellspacing="0" >
			<tr>
				<td style="width: 5%; text-align: center; border-top: 2px solid #797979;">number</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">category</td>
				<td style="width: 30%; text-align: center; border-top: 2px solid #797979;">book name</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">publiser</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">author</td>
			</tr>
			<!-- 책 목록들 -->
				<tr>
					<td>1</td>
					<td>medical</td>
					<td style="text-align: left;">test</td>
					<td>bio</td>
					<td>Dahyeok Park</td>
			</tr>
			<!-- 책 목록끝 -->
			<tr>
				<td colspan="7" style="border-bottom: 2px solid #797979;"></td>
			</tr>
		</table>
		
		<!-- 페이징 -->
		<div id="paging">
			paging
		</div>
		
		<!--  검색 -->
		<div id="search">
			<!-- 자기자신을 호출 -->
			<form method="post" action="./bookList.html">
				<select name="type">
					<option value="0">title</option>
					<option value="1">author</option>
					<option value="2">publisher</option>
					<option value="3">catetory</option>
				</select>&nbsp;
				<input type="text" name="searchText" size="30">&nbsp; 
				<input type="submit" value="search">
			</form>
		</div>
	</div>
</body>
</html>