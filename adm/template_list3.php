<?php
$sub_menu = "100290";
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

// $sql = " select * from template where tmp_nm = 'card'";
    if ($_GET['tmpl_no'] != 0)
    {
        $sql = " update template set tmpl_no = '".$_GET['no'].
                                "',tmpl_nm = '".$_GET['nm'].
                                "',tmpl_type = '".$_GET['type'].
                                "',tmpl_cont = '".$_GET['cont'].
                                "' where tmpl_no = '".$_GET['tmpl_no']."'";
        sql_query($sql);
    }
    else
    {
            if ($_GET['no'])
            {
            $sql = "INSERT INTO template(tmpl_no, tmpl_nm, tmpl_type, tmpl_cont) 
            VALUES('".$_GET['no']."' , '".$_GET['nm']."', '".$_GET['type']."', '".$_GET['cont']."')";
            $result = sql_query($sql); //쿼리 실행
            }
    }
// if($_GET['nm']){
//     alert("nm 들어옴");
//         $sql2 = " select * from template where tmpl_nm = '" . $_GET['nm']. "'";  //쿼리문 작성
//         } 
// else {
//     alert("nm 값 없음");
        $sql2 = " select * from template order by tmpl_no";  //쿼리문 작성
//         }
$result2 = sql_query($sql2); //쿼리 실행

//name "님 환영 합니다." $_GET['name'] . "님 환영합니다" ==> 문자열 
// $sql = "INSERT INTO template('tmpl_no', 'tmpl_nm', 'tmpl_type', 'tmpl_cont') 
// VALUES('$_GET['no']', '$_GET['nm']', '$_GET['type']', '$_GET['cont']')";

/*
php 문법
1. 문자열
"", '' 문자열
시작과 끝 맺음에 따라 문자열 안에 ' 혹은 " 들어갈 수 있다.
ex) "정건모 님이 '아 너무 어렵네', 라고 혼자 말을 했다."
ex) '정건모 님이 "아 너무 재밌어", 라고 말을 했다.' 
쌍따움표 안은 모두 문자열 "가나" + "다라" = "가나다%$%#$% (*&#(*ㅒ!ㅃ@%#라"  ""
java ""쌍따움표만 문자열, 쿼리에서는 ' 따움표만 문자열
javascript, php 는 따움표, 쌍따움표 둘다 문자열

2. 변수 null 이거나 undefined => false



20191230 과제
 1. U - 업데이트
 2. D - 삭제
  
*/


$g5['title'] = "템플릿관리";
include_once('./admin.head.php');

$colspan = 7;
?>	
<?php print_r2($sql);?>
<?php //print_r2($result2);?>
<script type="text/javascript">
	function deleteTmpl(tmpl_no){
		console.log("./template_delete.php?tmpl_no="+tmpl_no);
		location.href = "./template_delete.php?tmpl_no="+tmpl_no;
	}
	function updateTmpl(tmpl_no){
		location.href = "./template_update2.php?tmpl_no="+tmpl_no;
	}
</script>
<div> <?php echo $_GET['no']. $_GET['nm']. $_GET['type']. $_GET['cont'] ;?>
<div>
	<table>
		<tr>
			<td>번호<td>템플릿명<td>템플릿타입<td>템플릿컨텐츠<td>DELETE<td>UPDATE
			<td><a href=./template_create.php><input type='button' value='생성'></a>
		</tr>
		<?php
		echo "정건모 님이 '아 너무 어렵네', 라고 혼자 말을 했다.";
		echo '정건모 님이 "아 너무 재밌어", 라고 말을 했다.';
//  		  for($i=1; $i<4; $i++){
		for($i=1; $aa=sql_fetch_array($result2); $i++){
// 		    echo print_r2($result);
// 		    break;
		      echo "<tr>";
		      echo "<td>".$aa["tmpl_no"]."<td>".$aa['tmpl_nm']."<td>".$aa['tmpl_type']."<td>".$aa['tmpl_cont']
		          ."<td><a href='javascript:deleteTmpl(\"".$aa['tmpl_no']."\");'>삭제</a>"
		          ."<td><a href='javascript:updateTmpl(\"".$aa['tmpl_no']."\");'>수정</a>";
		      echo "</tr>";
		     
		}?>
	</table>
</div>
<?php
include_once ('./admin.tail.php');
?>
