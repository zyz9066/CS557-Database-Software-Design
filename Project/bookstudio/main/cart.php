<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
	include '../connect.php';
	
	
	
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cart</title>
<style type="text/css">

	#wrap {
		width: 80%;
		margin: 0 auto;
		text-align: center;
	}
	td {
		border-top: 3px solid #E3E3E3;
		border-bottom: 2px solid #E3E3E3;
	}
	
	table {
		margin-top: 50px;
		margin-bottom: 30px;
		width: 100%;
	}
</style>
</head>
<body>
	<div id="wrap">
		<img src="cart.jpg" border="0" align="left">
		<br>
		<!-- 장바구니 목록 -->
		<table cellspacing="0" >
			<tr>
			
				<td style="width: 5%; text-align: center; border-top: 2px solid #797979;">order book</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">order date</td>
				<td style="width: 30%; text-align: center; border-top: 2px solid #797979;">price</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">count</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">status</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">order number</td>
			</tr>
			<!-- data binding 20111517 dhpark -->
			
			<tr>
				
			</tr>
			
			<!-- 
			<tr>
				<td style="padding-top: 100px; padding-bottom: 100px; text-align: center; font-weight: bold; font-size: 15pt; font-family: HY견고딕;">장바구니가 비어있습니다.</td>
			</tr>
			 -->
		</table>
		<div style="float: left;">
		<!-- <img src="./delete.jpg" border="0">&nbsp;<img src="./clear.jpg" border="0"> -->	
		</div>
		<div style="float: right">
			<img src="./continue.jpg" border="0">&nbsp;<img src="order.jpg" border="0">
		</div>
		<div>
			<img src="./look.jpg" border="0" style="width: 950px;">
		</div>
	</div>
</body>
</html>