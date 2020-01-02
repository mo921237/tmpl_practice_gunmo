<?php
$sub_menu = "100290";
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

// $sql = " select * from template where tmp_nm = 'card'";
    $sql = " select * from template where tmpl_no ='".$_GET['tmpl_no']."'";  //쿼리문 작성
    $result = sql_query($sql); //쿼리 실행
    

$g5['title'] = "템플릿 관리";
include_once('./admin.head.php');

$colspan = 7;
?>
<?php print_r2($result);?>
<div>
	<table>
		<tr>
			<td>번호<td>템플릿명<td>템플릿타입<td>템플릿컨텐츠
		</tr>
		<?php
		  $row=sql_fetch_array($result);
        ?>
            <form action="./template_list3.php">
        		<tr>
        			<td><input type="text" name="no" value="<?php echo $row['tmpl_no']?>">
        			<td><input type="text" name="nm" value="<?php echo $row['tmpl_nm']?>">
        			<td><input type="text" name="type" value="<?php echo $row['tmpl_type']?>">
        			<td><input type="text" name="cont" value="<?php echo $row['tmpl_cont']?>">
        			<td><p><input type="submit"></p>
        			<input type="hidden" name="tmpl_no" value="<?php echo $row['tmpl_no']?>">
        	</form>
	</table>
</div>
<?php
include_once ('./admin.tail.php');
?>
