/*
 @Desc : Dbait Taro Shuffle 
 @Author : Aiden Kim
*/
const maxCardNum = 74;
var openedList = [];
var count = 74;

$(document).ready(function(){
	$("table").on("click","td.back",function(){
		var _this = this;
		if($(_this).hasClass("isFlipped")) return; 
		var num = getRandomCard();
		$(_this).addClass("isFlipped");
		$("#dummy").css("background-image","url('./assets/img/cards/decks/"+num+".jpg')");
		setTimeout(function(){
			$(_this).css("background-image","url('./assets/img/cards/decks/"+num+".jpg')");//.css("backface-visibility", "hidden");	
			$(_this).removeClass("back");
		},650);
		
	});
});
function getRandomCard(){
	var notUnique = true;
	var num = "../Backpage";
	var cnt = 0;
	while(notUnique && count > 0 ){
		num = Math.floor(Math.random() * maxCardNum + 1) ;
		if(openedList.indexOf(num) < 0 && count-- > -1){
			openedList.push(num);
			notUnique = false;
		}
	}	
	return num;
}