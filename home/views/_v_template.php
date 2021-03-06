<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link href="/css/theme.css" rel="stylesheet" media="screen">
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
	<script type='text/javascript'>
	$(window).load(function() {
		$(".navbar ul li").find("a[href='"+window.location.pathname+"']").each(function() {
			$(this).parent().addClass('active');
			console.log($(this).parent());
			});
		});
	</script>
	
</head>

<body>	
	
	<?=$header;?>
	
	<?=$content;?> 
	
	<?=$footer;?>

</body>
</html>

	
