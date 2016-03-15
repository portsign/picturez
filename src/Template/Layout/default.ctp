<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Escope - Multi Concept Creative Template" />
	<meta name="keywords" content="bootstrap,portfolio,corporate,design" />
	<meta name="author" content="ThemeMascot" />
    <title><?= '' ?></title>
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" type="text/css">
	<link href="/css/css-plugin-collections.css" rel="stylesheet"/>
	<link href="/css/main-style.css" rel="stylesheet" type="text/css">
	<link href="/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<link href="/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.tagsinput.css" />
	<link href="/css/single-range-slider/bubble-slider.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="minimal-layout bg-light-gray">
<?= $this->fetch('content') ?>
<script src="/js/jquery-2.1.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/ckeditor/ckeditor.js"></script>
<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
<script src="/js/jquery-plugin-collection.js"></script>
<script src="/js/jquery.tagsinput.js"></script>
<script src="/js/single-range-slider/jquery.bubble-slider.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/main.js"></script>
<script>
$(document).ready(function () {
	$('.material-button-toggle').click(function () {
		$(this).toggleClass('open');
		$('.option').toggleClass('scale-on');
	});

	//this is for Tags
	$('#tags').tagsInput({
	   'height':'43px',
	   'width':'100%',
	});
});
</script>
</body>
</html>
