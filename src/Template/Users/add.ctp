<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<br />
			    <?= $this->Form->create($user) ?>
			    <fieldset>
			        <legend><?= __('Register Picturez') ?></legend>
			        <?php
			            echo $this->Form->input('email', ['class' => 'form-control', 'required' => true]);
			            echo $this->Form->input('username', ['class' => 'form-control', 'required' => true]);
			            echo $this->Form->input('password', ['class' => 'form-control', 'required' => true]);
			            echo $this->Form->input('status', ['class' => 'form-control', 'value' => 'not_verified', 'type' => 'hidden']);
			        ?>
			    </fieldset>
			    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-default distance-button']) ?><br />
				<div class="center-text"><h2 class="align-center">OR</h2></div><hr />
				<a href="/users/google_login"><img src="/img/gp_login.png" /></a>
				<div class="distance-button"></div>
				<?= $this->Facebook->loginLink($options = ['label' => '<img src="/img/fb_signup.png" />']); ?>
			    <?= $this->Form->end() ?><br />
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</div>
</section>

<?= $this->element('footer') ?>
