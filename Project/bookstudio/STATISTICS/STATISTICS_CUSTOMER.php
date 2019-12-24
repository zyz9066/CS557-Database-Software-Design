<!-- 고객별 통계페이지입니다. 2013-05-14 dhpark -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
	include '../connect.php';
	
	
	$sql = "select * from STASTICS";
	$res = mysql_query($sql);
	 $total_cnt = mysql_num_rows($res);
	
	if(isset($_GET['nPage']))
	{
		$nPage = $_GET['nPage'];
	} 
	else{
		if(!$nPage) $nPage = 1; // 현재 페이지
	}
	 $list_cnt = 5; // 목록 갯수
	
	 
	 
	 $list_no = $total_cnt - ($list_cnt * ($nPage-1));
	 
	 if ( $total_cnt % $list_cnt == 0 ) $total_page = floor(($total_cnt) / $list_cnt) ; //총페이지
	 else $total_page = floor($total_cnt / $list_cnt) +1 ;
	 
	 $page_scale = 10; //페이징 수
	 $start_list = ((floor(($nPage-1)/$page_scale))*$page_scale)+1; //시작페이지
	 $end_list = ($start_list + $page_scale) - 1; //끝페이지
	 if($end_list > $total_page) $end_list = $total_page;
	 
	 $start_list_query = ($nPage-1)*$list_cnt;
	 
	 $query = "SELECT * FROM STASTICS ORDER BY CUST_NUM ASC LIMIT $start_list_query, $list_cnt";
	 $result = mysql_query($query);
	
?>

<html>
<head><title>customer order static</title>
<script type="text/javascript">
function changePage(arg){
	frm = document.srhForm;
	frm.nPage.value = arg;
	frm.submit();
}
/*
 function process(arg1, arg2){
	frm = document.srhForm;
	frm.no.value = arg2;
	
	if(arg1 == "mod"){
		frm.action = "write.php?act=2";
		frm.submit();
	}
	else if(arg1 == "del"){
		window.open('delpop.php','delpop','width=280,height=70,scrollbars=no');
		frm.target = "delpop";
		frm.action = "delpop.php";
		frm.submit();
	}
}

*/
</script>
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
		<tr>
			<td colspan='3'> &nbsp <?=$nPage?> of <?=$total_page?> Page</td>
			<!-- <td align=center><a href="write.php?act=1">입력</a></td> -->
		</tr>
		<tr align=center valign=middle >
			<th>member number</th>
			<th>name</th>
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

<?	
	while($data=mysql_fetch_array($result)){ 
?>
			<tr>
				<td align=center><?=$data[CUST_NUM]?></td>
				<td align=center><? echo (mysql_result(mysql_query('SELECT CUSTOMNAME('.$data[CUST_NUM].') FROM STASTICS'), 0)); ?></td>
				<td align=center><?=$data[FIELD0]?></td>
				<td align=center><?=$data[FIELD1]?></td>
				<td align=center><?=$data[FIELD2]?></td>
				<td align=center><?=$data[FIELD3]?></td>
				<td align=center><?=$data[FIELD4]?></td>
				<td align=center><?=$data[FIELD5]?></td>
				<td align=center><?=$data[FIELD6]?></td>
				<td align=center><?=$data[FIELD7]?></td>
				<td align=center><?=$data[FIELD8]?></td>
				<td align=center><?=$data[FIELD9]?></td>
				<td align=center><?=$data[FIELD0]+$data[FIELD1]+$data[FIELD2]+$data[FIELD3]+$data[FIELD4]+$data[FIELD5]
				+$data[FIELD6]+$data[FIELD7]+$data[FIELD8]+$data[FIELD9]?></td>
				<!-- 
				<td align=center valign=middle>
					<input type="button" value=수정 onclick="process('mod','<?=$data[idx]?>'); return false;">
					<input type="button" value=삭제 onclick="process('del','<?=$data[idx]?>'); return false;">
				</td>
				 -->
			</tr>
	
<?
	}
?>
	</table>
	<div style="padding:10px 0 0 0; text-align:center;">
     <? if($nPage > 1){ ?>
      &nbsp;<a href="./STATISTICS_CUSTOMER.php?nPage=1" onclick="changePage('1');">first</a>&nbsp;
     <? }else{ ?>
      &nbsp;first&nbsp;
     <? } 
      if($nPage - $page_scale > 0){ ?>
      <a href="./STATISTICS_CUSTOMER.php?nPage=<?=$start_list-$page_scale?>" onclick="changePage('<?=$start_list-$page_scale?>');">pre</a>
     <? }
      for($i=$start_list ; $i<= $end_list; $i++){ 
       
	if($i == $nPage){ ?>
        <strong>&nbsp;<?=$i?>&nbsp;</strong>
       <? }else{ ?>
        <a href="./STATISTICS_CUSTOMER.php?nPage=<?=$i?>" onclick="changePage('<?=$i?>');">&nbsp;<?=$i?>&nbsp;</a>
       <? }
      } 
      if($nPage + $page_scale < $total_page ){ ?>
      &nbsp;<a href="./STATISTICS_CUSTOMER.php?nPage=<?=$start_list + $page_scale?>" onclick="changePage('<?=$start_list + $page_scale?>');">next</a>
     <? } 
      if($nPage != $total_page){?>
      &nbsp;<a href="./STATISTICS_CUSTOMER.php?nPage=<?=$total_page?>" onclick="changePage('<?=$total_page?>'); ">end</a>&nbsp;
     <? }else{ ?>
      &nbsp;end&nbsp;
     <? } ?>
    </div>
</html>