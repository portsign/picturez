<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6"><br />

			<?php
				$tkn = $this->request->query['tk'];
			?>
			<?= $this->Form->create() ?>
			    <fieldset>
			        <legend><?= __('Please Click This Button to Verification Your Account') ?></legend>
			        <?= $this->Form->input('token', ['class' => 'form-control', 'required' => true, 'label' => false, 'value' => $tkn]) ?>
			        <?= $this->Form->input('status', ['class' => 'form-control', 'required' => true, 'label' => false, 'value' => 'verified']) ?>
			        <?= $this->Form->input('id', ['class' => 'form-control', 'required' => true, 'label' => false, 'value' => 60]) ?>
			    </fieldset>
			<?= $this->Form->button(__('Verify My Account'), ['class' => 'btn btn-default btn-lg distance-button']); ?>
			<?= $this->Form->end() ?>

			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
</section>

<?= $this->element('footer') ?>
