<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">


				<section>
			        <div class="container">
				        <div class="esc-heading lr-line left-heading">
				          <h3><span>Timeline</span></h3>
				        </div>
				        <div class="row">
				            <div class="col-md-12">

					            <div class="horizontal-timeline">
					              <div class="period"><span>2000 - 2004</span></div>
					              <i class="fa fa-bank"></i>
					              <h3>School of Arts</h3>
					              <h5>Graphics Design & Photography</h5>
					              <p class="mt-30">Aenean magna leo, mollis at dui eu, convallis molestie turpis. Morbi ante nisl, ultricies vitae mattis vestibulum, sagittis a libero. Integer tempor nec erat convallis molestie turpis.</p>
					            </div>
					            <!-- end .horizontal-timeline -->

					            <div class="horizontal-timeline">
					              <div class="period"><span>2004 - 2008</span></div>
					              <i class="fa fa-bank"></i>
					              <h3>Texas State Univerity</h3>
					              <h5>Graphic Design</h5>
					              <p class="mt-30">Aenean magna leo, mollis at dui eu, convallis molestie turpis. Morbi ante nisl, ultricies vitae mattis vestibulum, sagittis a libero. Integer tempor nec erat convallis molestie turpis.</p>
					            </div>
					            <!-- end .horizontal-timeline -->

				            </div>
				        </div>

			        </div>
			    </section>

			</div>
		</div>
	</div>

        <div class="material-button-anim">
          <ul class="list-inline" id="options">
            <li class="option">
              <a href="/diaries/add">
	              <button class="material-button option1" type="button">
	                <span class="fa fa-pencil" aria-hidden="true"></span>
	              </button>
              </a>
            </li>
            <li class="option">
              <a href="/quotes">
	              <button class="material-button option2" type="button">
	                <span class="fa fa-image" aria-hidden="true"></span>
	              </button>
              </a>
            </li>
            <li class="option">
              <a href="/">
	              <button class="material-button option3" type="button">
	                <span class="fa fa-plus-circle" aria-hidden="true"></span>
	              </button>
              </a>
            </li>
          </ul>
          <button class="material-button material-button-toggle" type="button">
            <span class="fa fa-plus" aria-hidden="true"></span>
          </button>
        </div>
</section>

<?= $this->element('user_footer') ?>
