<?session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BookStudio</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<script type="text/javascript">
</script>
<body>
	<!-- 윗쪽  -->
					<div id="contentTop">
						<div class="left">
							<div class="menu" onclick="location.href='bookList.php'">
								<div class="menuLeft"><div class="checkImg" >&nbsp;</div></div>
								<div class="menuRight">book list</div>
							</div>
							<!--
							<div class="menu">
								<div class="menuLeft"><div class="checkImg">&nbsp;</div></div>
								<div class="menuRight">recommand bok</div>
							</div>
							-->
							<div class="menu" onclick="location.href='../board/libertyboard.php'">
								<div class="menuLeft"><div class="checkImg">&nbsp;</div></div>
								<div class="menuRight">board</div>
							</div>
							<div class="menu" onclick="location.href='../board/event.php'">
								<div class="menuLeft"><div class="checkImg">&nbsp;</div></div>
								<div class="menuRight">event</div>
							</div>
							<div class="menu" onclick="location.href='ebookList.php'">
								<div class="menuLeft"><div class="checkImg">&nbsp;</div></div>
								<div class="menuRight">e-Book</div>
							</div>
							<div class="menu" style="border-bottom: 0;">
								<div class="menuLeft"><div class="checkImg">&nbsp;</div></div>
								<div class="menuRight">practice</div>
							</div>
						</div>
						<div class="right">
							<img src="./img/MainImage.jpg" border="0">
						</div>
					</div>
					&nbsp;
					<hr class="middleLine">
					<br>
					<!-- 아랫쪽 영역 -->
					notice &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<? if(!strcmp($_SESSION['id'], 'admin')){ ?>
						 <a href="./write.php">write notice</a>
					<?}?>
					
					<div id="contentBottom">
					<!-- 
						<div class="left">
							<img src="./img/bookSelect.jpg" border="0">
						</div>
						<div class="right">
							<img src="./img/bookList.jpg" border="0">
						</div>
					 -->
					 <iframe src="./board.php" style="width: 100%; height: 100%;"></iframe>
					</div>
</body>
</html>