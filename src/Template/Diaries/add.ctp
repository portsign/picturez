<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">
				<div class="distance-button"></div>
				<ol class="breadcrumb">
				  <li><?= __('Actions') ?></li>
				  <li><?= $this->Html->link(__('List Diaries'), ['action' => 'index']) ?></li>
				</ol>
				<div class="diaries form large-9 medium-8 columns content">
				    <?= $this->Form->create($diary) ?>
				    <fieldset>
				        <legend><?= __('Add New Diary') ?></legend>
				        <?php
				            echo $this->Form->input('title', ['class' => 'form-control', 'placeholder' => 'title for your story today', 'autofocus' => true]);
				            echo $this->Form->input('diary', ['class' => 'ckeditor form-control']);
				            echo '<div class="distance-button"></div>';
				            echo $this->Form->input('tags', ['class' => 'ckeditor form-control']);
				        ?>
						<div class="distance-button"></div>
				        <a href="" class="btn btn-default">Use Feature Image</a>
				    </fieldset>
					<div class="distance-button"></div>
				    <?= $this->Form->button(__('Post'), ['class' => 'btn btn-warning']) ?>
				    <?= $this->Form->button(__('Draft'), ['class' => 'btn btn-success']) ?>
					<a href="/diaries" class="btn btn-default pull-right">Cancel</a>
					<div class="distance-button"></div>
				    <?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>
