jQuery(document).ready(function($) {
//	$('.file-upload').('.the-image').html('XXXX');
//	$('.the-image').text('bbb');

//	$('.the-image').append('ZZZ');
//	$('.the-image').text('ccc');
//	$('.the-image').append('vyz');
	$('.the-image').css('background-color','green');


	$( ".file-upload" ).click(function() {
//		$(this).next('.box-with-content').text('abc');
//		alert('pooper');
	});

	$( ".clickme" ).click(function() {
		$(this).next('.box-with-content').text('abc');
	});

	$(".file-upload").ajaxfileupload({
		'action': test_url_submit,

		'onComplete': function(response) {
//	$('.the-image').append('abc'+response);
//	$(parent).append('background-color','red');
//		$(this).next('.box-with-content').text('abc');
//		alert('pooper');

//			$('.wrap').append('<img src="'+response+'" />');	
//			$(this).after('<img src="'+response+'" />');
//			$(this).next('.the-image').append('<img src="'+response+'" />');

//			$(this).next('.box-with-content').attr("src", response);
			$(this).next('.box-with-content').html('<img src="'+response+'" />');
		},

/*
		'params': {
			'extra': 'info'
		},
		'onComplete': function(response) {
			console.log('custom handler for file:');
			alert(JSON.stringify(response));
		},
		'onStart': function() {
			if(weWantedTo) return false; // cancels upload
		},
		'onCancel': function() {
			console.log('no file selected');
		}
*/
	});

});