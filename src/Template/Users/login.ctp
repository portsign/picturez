<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12"><br />
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

			</div>
		</div>
	</div>
</div>
</section>

<?= $this->element('footer') ?>
