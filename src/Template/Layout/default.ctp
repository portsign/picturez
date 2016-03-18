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
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine|Inconsolata|Droid+Sans|Open+Sans|Roboto|Lato|Roboto+Condensed|Slabo+27px|Oswald|Montserrat|Source+Sans+Pro|Raleway|Lora|PT+Sans|Open+Sans+Condensed|Ubuntu|Roboto+Slab|Droid+Serif|Arimo|Fjalla+One|Merriweather|PT+Sans+Narrow|Noto+Sans|Titillium+Web|PT+Serif|Playfair+Display|Alegreya+Sans|Indie+Flower|Bitter|Passion+One|Poiret+One|Poiret+One|Dosis|Cabin|Candal|Yanone+Kaffeesatz|Oxygen|Lobster|Arvo|Inconsolata|Hind|Noto+Serif|Nunito|Anton|Bree+Serif|Muli|Abel|Fira+Sans|Josefin+Sans|Ubuntu+Condensed|Exo+2|Amatic+SC|Libre+Baskerville|Crimson+Text|Pacifico|Francois+One|Archivo+Narrow|Signika|Asap|Shadows+Into+Light|Cuprum|Quicksand|Play|Merriweather+Sans|Varela+Round|Vollkorn|Alegreya|Maven+Pro|Orbitron|Karla|Rokkitt|Dancing+Script|Righteous|Questrial|Architects+Daughter|Exo|PT+Sans+Caption|Patua+One|Ropa+Sans|Abril+Fatface|Chewy|Pathway+Gothic+One|Quattrocento+Sans|Monda|Istok+Web|Sigmar+One|Bangers|Josefin+Slab|BenchNine|Crete+Round|EB+Garamond|Noticia+Text|Kaushan+Script|Comfortaa|Cantarell|News+Cycle|Gloria+Hallelujah|Russo+One|Pontano+Sans|Gudea|Covered+By+Your+Grace|Lobster+Two|Coming+Soon">
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
