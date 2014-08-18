$(function(){
	var front, back;
	front 	= 	$('#front');
	back 	= 	$('#back');
	setTimeout(
	    function(){
			front.css({'opacity':'0'});
			back.css({'opacity':'1'});
		}, 
		1000
	);
});
