<!-- �Խ��� php�۾� dhpark 2019-11-16 -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
		include '../connect.php';
?>
<?
// ����¡ �� ���� �˻�	
	
	if (!$_POST[searchText]) {
		$sql = "select * from BOARD";
	}else {
		$sql = "select * from BOARD WHERE BOARD_TITLE LIKE '%".$_POST[searchText]."%'";
	}
	
	
	$res = mysql_query($sql);
	 $total_cnt = mysql_num_rows($res);
	
	if(isset($_GET['nPage']))
	{
		$nPage = $_GET['nPage'];
	} 
	else{
		if(!$nPage) $nPage = 1; // ���� ������
	}
	 $list_cnt = 30; // ��� ����
	
	 
	 
	 $list_no = $total_cnt - ($list_cnt * ($nPage-1));
	 
	 if ( $total_cnt % $list_cnt == 0 ) $total_page = floor(($total_cnt) / $list_cnt) ; //��������
	 else $total_page = floor($total_cnt / $list_cnt) +1 ;
	 
	 $page_scale = 10; //����¡ ��
	 $start_list = ((floor(($nPage-1)/$page_scale))*$page_scale)+1; //����������
	 $end_list = ($start_list + $page_scale) - 1; //��������
	 if($end_list > $total_page) $end_list = $total_page;
	 
	 $start_list_query = ($nPage-1)*$list_cnt;
	 
	 if (!$_POST[searchText]) {
	 	$query = "SELECT * FROM BOARD ORDER BY BOARD_NUM ASC LIMIT $start_list_query, $list_cnt";
	 }else {
	 	$query = "SELECT * FROM BOARD WHERE BOARD_TITLE LIKE '%".$_POST[searchText]."%' ORDER BY BOARD_NUM ASC LIMIT $start_list_query, $list_cnt";
	 }
	 
	 
	 $result = mysql_query($query);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>notice</title>
<script type="text/javascript">
function changePage(arg){
	frm = document.srhForm;
	frm.nPage.value = arg;
	frm.submit();
}

</script>
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
		<img src="./gong.jpg" border="0" align="left">
		<br>
		<table cellspacing="0" >
			<tr>
				<td style="width: 5%; text-align: center; border-top: 2px solid #797979;">number</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">category</td>
				<td style="width: 30%; text-align: center; border-top: 2px solid #797979;">title</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">author</td>
				<td style="width: 10%; text-align: center; border-top: 2px solid #797979;">date</td>
				
				
			</tr>
	<?	
		
		while($data=mysql_fetch_array($result)){ 
	?>
			<!-- �� ��ϵ� -->
				<tr>
					<td ><?=$data[BOARD_NUM]?></td>
					<td><?=$data[BOARD_TYPE]?></td>
					<td style="text-align: left;"><?=$data[BOARD_TITLE]?></td>
					<td><?=$data[BOARD_AUTHOR]?></td>
					<td><?=$data[BOARD_DATE]?></td>
					
					
			</tr>
			<!-- �� ��ϳ� -->
		
	<?
	;}
	?>
		<tr>
				<td colspan="7" style="border-bottom: 2px solid #797979;"></td>
			</tr>
		</table>
		
		<!-- ����¡ -->
		<div style="padding:10px 0 0 0; text-align:center;">
     <? if($nPage > 1){ ?>
      &nbsp;<a href="./board.php?nPage=1" onclick="changePage('1');">first</a>&nbsp;
     <? }else{ ?>
      &nbsp;first&nbsp;
     <? } 
      if($nPage - $page_scale > 0){ ?>
      <a href="./board.php?nPage=<?=$start_list-$page_scale?>" onclick="changePage('<?=$start_list-$page_scale?>');">pre</a>
     <? }
      for($i=$start_list ; $i<= $end_list; $i++){ 
       
	if($i == $nPage){ ?>
        <strong>&nbsp;<?=$i?>&nbsp;</strong>
       <? }else{ ?>
        <a href="./board.php?nPage=<?=$i?>" onclick="changePage('<?=$i?>');">&nbsp;<?=$i?>&nbsp;</a>
       <? }
      } 
      if($nPage + $page_scale < $total_page ){ ?>
      &nbsp;<a href="./board.php?nPage=<?=$start_list + $page_scale?>" onclick="changePage('<?=$start_list + $page_scale?>');">next</a>
     <? } 
      if($nPage != $total_page){?>
      &nbsp;<a href="./board.php?nPage=<?=$total_page?>" onclick="changePage('<?=$total_page?>'); ">end</a>&nbsp;
     <? }else{ ?>
      &nbsp;end&nbsp;
     <? } ?>
		
		<!--  �˻� -->
		<div id="search">
			<!-- �ڱ��ڽ��� ȣ�� -->
			<form method="post" action="./board.php">
				
				<select name="type">
					<!-- ����2 -->
					<option value="0">title</option>
					<option value="1">author</option> 
				</select>&nbsp;
				<input type="text" name="searchText" size="30">&nbsp; 
				<input type="submit" value="�˻�">
			</form>
		</div>
	</div>
</body>
</html>