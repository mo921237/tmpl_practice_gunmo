        <section class="titlebar">
            <h1 class="page-title"><span>Contact </span>us</h1>
            <div id="particles-js"></div>
        </section>
        
        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <section class="contact col-md-8 offset-md-2 top_90">
                <div class="contact-info text-center">
                    <p>YongSan-Gu, Seoul, South Korea</p> 
                    <a href="admin@stilknow.com">aiden@igrev.kr</a> 
                    <p>+82-2-3789-6666</p>
                </div>
                <div class="contact-form top_90">
                    <form id="emailForm" class="row" action="/sendEmail.php" method="post">
                        <div class="col-md-6">
                            <input id="name" name="name" class="inp" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input id="email" name="femail" class="inp" type="text" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea id="msg" name="content" placeholder="Your Message" rows="6" class="col-md-12 form-message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <input id="submit" type="submit" value="Submit" class="site-btn2">
                        </div>
                    </form>                    
                </div>
            </section>
        </div> <!-- cont end -->
        <script src="/assets/js/jquery.form.js"></script>
<script type="text/javascript">
$('#submit').click(function(e){
	e.preventDefault();
	var form = $('#emailForm').ajaxSubmit({
        url: '/bbs/formmail_send.php',
        dataType: 'text',
        timeout: 10000,
        beforeSubmit: showRequest,
        success: function(result, textStatus){ 
            if( result == "00" ){ 
                alert("문의가 완료되었습니다."); 
            }else{ 
                alert("문의가 실패 하였습니다. 관리자에게 문의 하세요."); 
            } 
        }, 
        error:function(XMLHttpRequest, textStatus, errorThrown){ 
			console.log(XMLHttpRequest);
			console.log(textStatus);
            alert("실패"); 
        } 
    });
	function processJson(result, textStatus) {
	    //debugger;
	    alert("it worked" + result);
	    console.log("respose: " + result);
	}
	function showRequest(formData, jqForm, options) {
	    //debugger;
	    var queryString = $.param(formData);
	    console.log('About to submit: \n' + queryString + '\n');
	    return true;
	}
	/*
    .done(function (result) {
        t.updateSinglePage(result);
        alert("전송 되었습니다.");
        //$("#emailForm").reset();
    })
    .fail(function () {
        t.updateSinglePage('AJAX Error! Please refresh the page!');
    });
	*/
});
</script>
