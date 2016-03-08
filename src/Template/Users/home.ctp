<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
			<div class="col-md-12">
				<!-- Section: Services -->
				<br />
			    <section id="services">
			          <div class="row multi-row-clearfix">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<a href="/users/timeline">
		  			            <div class="icon-box boxed mb-30"> <i class="fa fa-spinner"></i>
		  			                <h4 class="heading">My Timeline</h4>
		  			            </div>
							</a>
  			            </div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<a href="/diaries">
					            <div class="icon-box boxed mb-30"> <i class="fa fa-book"></i>
					                <h4 class="heading">Write My Diary</h4>
					            </div>
						    </a>
			            </div>
			            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<a href="/quotes">
				                <div class="icon-box boxed darker mb-30"> <i class="fa fa-pencil"></i>
				                	<h4 class="heading">Make Quote</h4>
				                </div>
						    </a>
			            </div>

			            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<a href="/popular-diaries">
				                <div class="icon-box boxed darker mb-30"> <i class="fa fa-star"></i><i class="fa fa-book"></i>
				                	<h4 class="heading">Popular Diaries</h4>
				                </div>
						    </a>
			            </div>
			            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a href="/popular-quotes">
			                <div class="icon-box boxed mb-30"> <i class="fa fa-star"></i><i class="fa fa-pencil"></i>
			                	<h4 class="heading">Popular Quotes</h4>
			                </div>
					    </a>
			            </div>
			            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a href="/users/settings">
			                <div class="icon-box boxed darker mb-30"> <i class="pe-7s-help2"></i>
			                	<h4 class="heading">Settings</h4>
			                </div>
					    </a>
			            </div>
			          </div>
			    </section>
			</div>
	</div>
</div>
</section>

<?= $this->element('user_footer') ?>
