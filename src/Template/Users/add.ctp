<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12"><br />
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
				<a href="/users/social/Facebook">Facebook<a>
			    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-default distance-button']) ?>
			    <?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>
</section>

<?= $this->element('footer') ?>
