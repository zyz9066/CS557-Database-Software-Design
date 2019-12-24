<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<? include '../connect.php'; ?>
<!-- 관리자만 admin이라는 id를 사용할수있음 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>로그인</title>
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

table {
	margin-top: 30px;
	margin-bottom: 30px;
	width: 100%;
}

td.title {
	width: 20%;
}
</style>


<body>
	<div id="wrap">
		<div id="contentArea">
			<form method="post" action="./loginProc.php">
				<table class="info" cellspacing="0">

					<tr>
						<td class="title" style="border-top: 2px solid #767676;">id</td>
						<td style="border-top: 2px solid #767676;"><input type="text"name="id">
						</td>
						<td rowspan="2" style="border-top: 2px solid #767676;"><input type="submit" value="login"
							style="margin-left: 10%; margin: 0px auto; border: 2px solid #eeeeee;">
						</td>
					</tr>
					<tr>
						<td class="title" style="border-bottom: 2px solid #767676;">password</td>
						<td style="border-bottom: 2px solid #767676;"><input type="password" name="password">
						</td>
					</tr>

				</table>
			</form>
		</div>
	</div>
</body>
</html>
