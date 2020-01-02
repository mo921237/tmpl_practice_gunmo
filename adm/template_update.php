<?php
$sub_menu = "100290";
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

// $sql = " select * from template where tmp_nm = 'card'";
    $sql = " update template set tmp_no = ". $_GET['tmp_no']." where tmp_nm = '".  $_GET['tmp_nm'] . "'";  //쿼리문 작성
$result = sql_query($sql); //쿼리 실행

$sql = " select * from template where tmp_nm = '".  $_GET['tmp_nm'] . "'";  //쿼리문 작성
$result = sql_query($sql); //쿼리 실행

$g5['title'] = "템플릿 관리";
include_once('./admin.head.php');

$colspan = 7;
?>
<?php print_r2($result);?>
<div>
	<table>
		<tr>
			<td>번호<td>템플릿명<td>
		</tr>
		<?php
//  		  for($i=1; $i<4; $i++){
		for($i=1; $row=sql_fetch_array($result); $i++){
// 		    echo print_r2($result);
// 		    break;
		      echo "<tr>";
		      echo "<td>".$row['tmp_no']."<td>".$row['tmp_nm'];
		      echo "</tr>";
		}?>
	</table>
</div>
<?php
include_once ('./admin.tail.php');
?>
