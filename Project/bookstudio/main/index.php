<?session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BookStudio</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>

</head>
<script type="text/javascript">
	function forward(src){
		document.getElementById("contentFrame").src = src;
	}

	
</script>
<body>
	<div	id="wrap">
		<div id="top">
			<a href="./index.php"><img src="./img/logo.jpg" border="0" ></a>
			
		</div>
		
		<!-- 가운데 영역 -->
		<div id="body">
			<!-- 바깥쪽 연한 분홍색 영역 -->
			<div id="outer">
				<!-- 안쪽 연한 주황색 영역 -->
				<div id="inner">
					<!-- <a href="javascript:forward('./board.php')">공지사항</a> --> 
					<? if(!$_SESSION['id']){?>
						<a href="javascript:forward('../customer/join.php')">sign up</a> 
						<a href="javascript:forward('./login.php')">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
					<?}else{?>
					<a href="javascript:forward('./cart.php')">cart</a> 
					<a href="javascript:forward('./logout.php')">log out</a> 
					<?}?>
					<?if($_SESSION['id']=='admin'){?>
					&nbsp;<a href="javascript:forward('../STATISTICS/STATISTICS_MAIN.php')">administrator Anaysis</a> 
					&nbsp;<a href="javascript:forward('./addBook.php')">add book</a> 
					<?}?>
					
					<div style="width: 1140px; margin: 0px auto;">
					<iframe src="./main.php" id="contentFrame" scrolling="no" style="border: 0; width: 1140px; height: 800px; margin: 0px auto; background-color: #ffffff;" name="contentFrame">
					</iframe>
					</div>
				</div>
			</div>
		</div>
		
		<div id="footer">
			Copyright @ 2019 Dahyeok Park&nbsp;&nbsp;&nbsp; The Attractive&nbsp;&nbsp;&nbsp;All right reserved
		</div>
	</div>
</body>
</html>