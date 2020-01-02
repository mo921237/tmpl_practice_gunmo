<?php
$sub_menu = "100290";
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

// $sql = " select * from template where tmp_nm = 'card'";

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
    		<form action="./template_list3.php">
    		<tr>
    			<td><input type="text" name="no">
    			<td><input type="text" name="nm">
    			<td><input type="text" name="type">
    			<td><input type="text" name="cont">
    			<td><p><input type="submit"></p>
    		</form>
		</tr>
	</table>
</div>
    <?php
    include_once ('./admin.tail.php');
    ?>
