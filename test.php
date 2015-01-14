<?php

// Set URLs
$site_url = 'http://local.wordpress-trunk.dev/unique-headers/';
$folder_url = $site_url . 'wp-content/plugins/add-options-example/';
$ajax_url = $folder_url . 'test.php?process=yes';



/**
 * Process the AJAX request.
 */
if ( isset( $_GET['process'] ) ) {
	file_put_contents( 'test.txt', rand() ); // Test to confirm the AJAX call is working

	header('Content-Type: text/html');
	$test = array( 'bla' );
	$json = json_encode( $test );

	$json = htmlspecialchars( json_encode( $json ), ENT_QUOTES, 'UTF-8' );

	echo $json;

	exit;
}

?>
<!DOCTYPE html>
<html lang="en-GB" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8" />

<script src="http://local.wordpress-trunk.dev/wp-includes/js/jquery/jquery.js"></script>
<script src="<?php echo $folder_url; ?>assets/jquery.ajaxfileupload.js"></script>

</head>
<body>

<form method="post" action="<?php echo $ajax_url; ?>" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />

	<input class="file-upload" type="file" name="bla" value="xxx" />
	<div class="box-with-content">test</div>

	<input type="submit" value="submit" />
</form>


<script>
jQuery(document).ready(function($) {

	$(".file-upload").ajaxfileupload({
		'action': '<?php echo $ajax_url; ?>',
//dataType: "json",
		'onComplete': function(response) {
//			alert('bla');
//			console.log(response);
			var json_obj = $.parseJSON(response);
//			console.log(json_obj);
			$(this).next('.box-with-content').html('xyz'+json_obj);
		},
	});

});
</script>

</body>
</html>
