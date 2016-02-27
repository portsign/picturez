<div id="wrapper">
  <!-- preloader -->
<div id="preloader">
	<div id="spinner"></div>
</div>
  <!-- Header -->
  <header class="header">
	<div class="header-nav inner-sticky-wrapper">

		<?php
			// $loged = $this->request->session()->check('Auth');
			$loged = $this->request->session()->read(['Auth','User','id']);
			if ($loged!=null) {
		?>

	  <!-- menu -->
	  <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <div class="navbar-header">
				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- logo -->
				<a id="header-logo" href="index.html" class="navbar-brand"><img height="35" src="/images/escope-logo-dark.png" alt=""></a> </div>
			  <div class="navbar-collapse collapse" id="navbar" aria-expanded="false" role="menu" style="height: 1px;">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"> <a href="/users/timeline" class="dropdown-toggle">Timeline</a></li>
					<li class="dropdown"> <a href="/users/home" class="dropdown-toggle">Menu</a></li>
				  <li class="dropdown"> <a href="/popular-quotes" class="dropdown-toggle">Popular Quotes</a></li>
				  <li class="dropdown"> <a href="/popular-diaries" class="dropdown-toggle">Popular Diaries</a></li>
				  <li class="dropdown"> <a href="/users/account" class="dropdown-toggle"><i class="fa fa-user"></i> Account</a></li>
				  <li class="dropdown"> <a href="/users/logout" class="dropdown-toggle"><strong><i class="fa fa-power-off"></i> Sign out</strong></a></li>

				  <li><a href="#" data-toggle="collapse" data-target="#top-search-bar" id="top-search-toggle"><i class="fa fa-search"></i></a></li>

				</ul>
			  </div>
			  <!--/.nav-collapse --></div>
		  </div>
		</div>
		<div id="top-search-bar" class="collapse">
		  <div class="container">
			<form role="search" action="#" class="search_form_top" method="get">
			  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
			  <span class="search-close"><i class="fa fa-times"></i></span>
			</form>
		  </div>
		</div>
	  </nav>
	  <!-- end menu -->

	  <?php } else { ?>

	  <!-- menu -->
	  <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <div class="navbar-header">
				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- logo -->
				<a id="header-logo" href="index.html" class="navbar-brand"><img height="35" src="/images/escope-logo-dark.png" alt=""></a> </div>
			  <div class="navbar-collapse collapse" id="navbar" aria-expanded="false" role="menu" style="height: 1px;">
				<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown"> <a href="/" class="dropdown-toggle">Home</a></li>
				  <li class="dropdown"> <a href="/recent" class="dropdown-toggle">Recent</a></li>
				  <li class="dropdown"> <a href="/hot" class="dropdown-toggle">Hot</a></li>
				  <li class="dropdown"> <a href="/articles" class="dropdown-toggle">Articles</a></li>
				  <li class="dropdown"> <a href="/users/add" class="dropdown-toggle"><strong>Create Account</strong></a></li>
				  <li class="dropdown"> <a href="/users/login" class="dropdown-toggle"><strong>Sign in</strong></a></li>

				  <li><a href="#" data-toggle="collapse" data-target="#top-search-bar" id="top-search-toggle"><i class="fa fa-search"></i></a></li>

				</ul>
			  </div>
			  <!--/.nav-collapse --></div>
		  </div>
		</div>
		<div id="top-search-bar" class="collapse">
		  <div class="container">
			<form role="search" action="#" class="search_form_top" method="get">
			  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
			  <span class="search-close"><i class="fa fa-times"></i></span>
			</form>
		  </div>
		</div>
	  </nav>
	  <!-- end menu -->

	  <?php } ?>
	</div>
  </header>
    <!-- start main-content -->
    	<div class="main-content">
