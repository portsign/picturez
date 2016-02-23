<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><br />
			<?= $this->Flash->render('error_login') ?>
			<?= $this->Flash->render('auth') ?>
			<?= $this->Form->create() ?>
			    <fieldset>
			        <legend><?= __('Please enter your Username and password') ?></legend>
			        <?= $this->Form->input('username', ['class' => 'form-control', 'required' => true]) ?>
			        <?= $this->Form->input('password', ['class' => 'form-control', 'required' => true]) ?>
			    </fieldset>
			<?= $this->Form->button(__('Login'), ['class' => 'btn btn-warning distance-button']); ?>
			<?= $this->Form->end() ?>
			<hr />
			<a href="/users/google_login"><img src="/img/gp_login.png" /></a>
			<div class="distance-button"></div>
			<?= $this->Facebook->loginLink($options = ['label' => '<img src="/img/fb_login.png" />']); ?>
			<br />
			<br />
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
</section>
<?= $this->element('footer') ?>
