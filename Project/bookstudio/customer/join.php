<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<? include '../connect.php'; ?>
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

table {
	margin-top: 30px;
	margin-bottom: 30px;
	width: 100%;
}

td.title {
	width: 10%;
}
</style>
<script type="text/javascript"
	src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript"
	src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="jquery.ui.datepicker-ko.js"></script>
<script type="text/javascript">

	
	
	var check = 0;
	
	function idcheck(){
		var idname= document.frm.id.value;

		 //window.open("idcheck.php?name="+document.frm.id.value,"idcheck","width=400,height=300,scrollbars=yes,resizeable=no,left=150,top=150");
		location.href='join.php?name='+idname;

	}


	var num = 0;
function mo(){

	
	$('#pw2').mouseleave(function(){
		if($('#pw').val() != $('#pw2').val()){
		  if(num == 0){
			
				alert("wrong password");

			 num = num+1;
		  }
		  
		}
	});


	
}
</script>
<?
if($_GET['name']){
		$sql = "select id from CUSTOMER where ID = RTRIM(LTRIM('".$_GET['name']."')) limit 0,1";
		$result = mysql_query($sql);
		$rs = mysql_fetch_array($result);

		if(!$rs){
			echo "<script> alert('allow to use this ID'); check=1; </script>";


		}
		else{
			echo "<script> alert('you can't use this ID'); </script>";

		}
	}
	?>
</head>
<!-- 

	디자인을 보니 폼이 다 똑같아 iframe으로 내용만 불러올 목적으로 이렇게 만듬
 -->
<body
	onload="if(check==1)  document.getElementById('sub').style.visibility = 'visible'; document.getElementById('inputid').style.visibility = 'visible'; ">
	<div id="wrap">
		<div id="contentArea">
			<img src="./joinus.jpg" border="0">
			<form name="frm" method="post" action="./joinProc.php">
				<table class="gubun" cellspacing="0" class="gubun">
					<tr>
						<td class="title"
							style="border-top: 2px solid #767676; border-bottom: 2px solid #767676;">membership level </td>
						<td
							style="border-top: 2px solid #767676; border-bottom: 2px solid #767676;"><input
							type="radio" value="0" name="gubun"> ordinary</td>
					</tr>
				</table>
				<img src="./gi.jpg" border="0">
				<table class="info" cellspacing="0">
					<tr>
						<td class="title" style="border-top: 2px solid #767676;">id</td>
						<td style="border-top: 2px solid #767676;"><input type="text"
							id="idnum" name="id" value="<?=$_GET['name']?>"> &nbsp;&nbsp; <input type="button"
							value="duplication check" onclick="javascript_:idcheck();" /> &nbsp;&nbsp;
							id? :<?=$_GET['name']?>
						</td>

					</tr>

					<tr>
						<td class="title">password</td>
						<td><input type="password" id="pw" name="password">
						</td>
					</tr>
					<tr>
						<td class="title">password check</td>
						<td><input type="password" id="pw2" name="password2"
							onmouseout="javascript_:mo();">
						</td>
					</tr>

					<tr>
						<td class="title">name</td>
						<td><input type="text" name="name" size="50"></td>
					</tr>
					<tr>
						<td class="title">address</td>
						<td><input type="text" name="zipcode1" size="3"> - <input
							type="text" name="zipcode2" size="3"> <!-- 우편번호찾기 버튼삽입 --> <br> <input
							type="text" name="addr1" size="50"><br> <input type="text"
							name="addr2" size="50">
						</td>
					</tr>
					<tr>
						<td class="title">phone number</td>
						<td><input type="text" name="call1" size="3"> - <input type="text"
							name="call2" size="4"> - <input type="text" name="call3" size="4">
						</td>
					</tr>
					<tr>
						<td class="title">cell phone number</td>
						<td><input type="text" name="phone1" size="3"> - <input
							type="text" name="phone2" size="4"> - <input type="text"
							name="phone3" size="4"></td>
					</tr>
					<tr>
						<td colspan="2" style="border-bottom: 2px solid #767676;"><input
							type="submit" id="sub" name="sub" value="register"
							style="margin-left: 10%; visibility: hidden">&nbsp;&nbsp;&nbsp;<input
							type="reset" value="reset"></td>
					</tr>
				</table>
				<!--<a href="../main/main.php">asdf</a>  -->
			</form>
		
		</div>
	</div>
</body>
</html>
