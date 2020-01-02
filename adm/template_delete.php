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
<?php 

$sql = "delete from template where tmpl_no=".$_GET['tmpl_no'];
sql_query($sql); //쿼리 실행
?>
<a href=./template_list3.php><input type='button' value='돌아가기'></a>
<?php
include_once ('./admin.tail.php');
?>
