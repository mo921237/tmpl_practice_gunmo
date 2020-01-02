<?php
$sub_menu = "200110";
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');

$sql_common = " from {$g5['free_trial_usr']} ";

$sql_search = " where (1) ";
//$sql_search .= " and ( del_yn = 'N')";
if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        case 'usr_tel' :
        case 'usr_nm' :
            $sql_search .= " ({$sfl} like '%{$stx}') ";
            break;
        default :
            $sql_search .= " ({$sfl} like '{$stx}%') ";
            break;
    }
    $sql_search .= " ) ";
}

if ($is_admin != 'super'){
   //$sql_search .= " and mb_level <= '{$member['mb_level']}' ";
}

if (!$sst) {
    $sst = "REG_DT";
    $sod = "desc";
}

$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함


$listall = '<a href="'.$_SERVER['SCRIPT_NAME'].'" class="ov_listall">전체목록</a>';

$g5['title'] = '무료체험신청현황';
include_once('./admin.head.php');

$sql = " select * {$sql_common} {$sql_search} {$sql_order} limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$colspan = 16;
?>

<div class="local_ov01 local_ov">
    <?php echo $listall ?>
    <span class="btn_ov01"><span class="ov_txt">총 신청수 </span><span class="ov_num"> <?php echo number_format($total_count) ?>명 </span></span>
</div>

<form id="fsearch" name="fsearch" class="local_sch01 local_sch" method="get">

<label for="sfl" class="sound_only">검색대상</label>
<select name="sfl" id="sfl">
    <option value="usr_nm"<?php echo get_selected($_GET['sfl'], "usr_nm"); ?>>이름</option>
    <option value="usr_tel"<?php echo get_selected($_GET['sfl'], "usr_tel"); ?>>전화번호</option>
    <option value="stck_nm"<?php echo get_selected($_GET['sfl'], "stck_nm"); ?>>보유종목</option>
    <!-- 
    <option value="reg_dt"<?php echo get_selected($_GET['sfl'], "mb_datetime"); ?>>신청일시</option>
    -->
</select>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
<input type="submit" class="btn_submit" value="검색">

</form>

<div class="local_desc01 local_desc">
    <p>
        <!--회원자료 삭제 시 다른 회원이 기존 회원아이디를 사용하지 못하도록 회원아이디, 이름, 닉네임은 삭제하지 않고 영구 보관합니다.
        -->
    </p>
</div>


<form name="fmemberlist" id="fmemberlist" action="./member_list_update.php" onsubmit="return fmemberlist_submit(this);" method="post">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col" id="mb_list_chk" rowspan="2" >
            <label for="chkall" class="sound_only">회원 전체</label>
            <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
        </th>
        <th scope="col" id="mb_list_usr_nm"><?php echo subject_sort_link('mb_id') ?>이름</a></th>
        <th scope="col" id="mb_list_usr_tel">연락처</th>
        <th scope="col" id="mb_list_stck_nm">보유종목</th>
        <th scope="col" id="mb_list_chnl_cd">화면크기</th>
        <th scope="col" id="mb_list_reg_dt">신청일</th>
    </tr>
    </thead>
    <tbody id="listBody">
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++) {
    ?>

    <tr class="<?php echo $bg; ?>">
        <td headers="mb_list_chk" class="td_chk">
            <input type="hidden" name="seq<?php echo $row['seq'] ?>" value="<?php echo $row['seq'] ?>" id="mb_id_<?php echo $i ?>">
            <label for="chk_<?php echo $i; ?>" class="sound_only"><?php echo get_text($row['usr_nm']); ?> <?php echo get_text($row['usr_nm']); ?>님</label>
            <input type="checkbox" name="chk[]" value="<?php echo $i ?>" id="chk_<?php echo $i ?>">
        </td>
        <td headers="mb_list_usr_nm" class="td_name sv_use">
            <?php echo $row['USR_NM'] ?>
        </td>
        <td headers="mb_list_usr_tel" name="usrTel" class="td_name sv_use">
            <?php echo $row['USR_TEL'] ?>
        </td>
        <td headers="mb_list_stck_nm" class="td_name sv_use">
            <?php echo $row['STCK_NM'] ?>
        </td>
        <td headers="mb_list_chnl_cd" class="td_name sv_use">
            <?php echo $row['CHNL_CD'] ?>
        </td>
        <td headers="mb_list_reg_dt" class="td_name sv_use">
            <?php echo $row['REG_DT'] ?>
        </td>
    </tr>

    <?php
    }
    if ($i == 0)
        echo "<tr><td colspan=\"".$colspan."\" class=\"empty_table\">자료가 없습니다.</td></tr>";
    ?>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
<!--
    <input type="submit" name="act_button" value="선택수정" onclick="document.pressed=this.value" class="btn btn_02">
    <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_02">
-->
    <input type="button" name="act_button" value="번호보기" onclick="decrypt();" class="btn btn_02">
    <?php if ($is_admin == 'super') { ?>
    <a href="./member_form.php" id="member_add" class="btn btn_01">회원추가</a>
    <?php } ?>

</div>


</form>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, '?'.$qstr.'&amp;page='); ?>

<script>
function fmemberlist_submit(f)
{
    if (!is_checked("chk[]")) {
        alert(document.pressed+" 하실 항목을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택삭제") {
        if(!confirm("선택한 자료를 정말 삭제하시겠습니까?")) {
            return false;
        }
    }

    return true;
}

function setHeader(xhr) {
  //xhr.setRequestHeader('Authorization', 'token');
}

var decrypted = false;
function decrypt(){
	if(decrypted) return;
	var params = [];
	$.each($("#listBody td[name='usrTel']"),function(){
		params.push($(this).prev().prev().find("input[name^='seq']").val()+":"+$(this).text().trim())
	});
	$.ajax({
	 	 url	  	: 'http://www.sangsangstockclub.com/getEncToDecrypted.do'
//	 	 url	  	: 'http://localhost:8080/getEncToDecrypted.do'
		,type		: "POST"
     	,dataType	:  'json'
		,crossDomain	: true
     	,data		: {encArrStr : params.join(",") }
	//,jsonpCallback	: "callback"
		,cache		: false
	//,jsonp		: 'callback'
		//,xhrFields: { withCredentials: true }
		,beforeSend	: setHeader
     	,success	: function(rs) {
	   		console.log(rs);
	     	var str = atob( rs.respData.substr( (params.length*params.length-params.length+"").length ) );
	   		$.each(str.split(","),function(){
	   	   		//var strIdx = (params.length*params.length-params.length+"").length;
	   			var arr = this.split(":");
	   			$("#listBody input:hidden[name=seq"+arr[0]+"]").parent().siblings("td[name='usrTel']").text(arr[1]);
	   		});
	   		if(str.length > 0){
     			decrypted = true;
	   		}
	   	}
	 	,error		:function(error){
	 		console.log(error);
	 		alert('서버 연결 도중 에러가 났습니다. 다시 시도해 주십시오.');
	 	}
 });
}
function callback(rs){
	
}
</script>

<?php
include_once ('./admin.tail.php');
?>
