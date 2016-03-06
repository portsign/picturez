<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">

				<div class="distance-button"></div>
				<ol class="breadcrumb">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Form->postLink(
							__('Delete'),
							['action' => 'delete', $diary->id],
							['confirm' => __('Are you sure you want to delete # {0}?', $diary->id)]
						)
					?></li>
					<li><?= $this->Html->link(__('List Diaries'), ['action' => 'index']) ?></li>
				</ol>

				<div class="diaries form large-9 medium-8 columns content">
				    <?= $this->Form->create($diary) ?>
				    <div id="inject-id" class="hidden">
				    	<?= $this->request->params['pass'][0] ?>
				    </div>
				    <fieldset>
				        <legend><?= __('Edit Diary') ?></legend>
				        <?php
				            echo $this->Form->input('title', ['class' => 'form-control', 'id' => 'title']);
				            echo $this->Form->input('diary', ['class' => 'ckeditor']);
				            echo $this->Form->input('tags', ['id' => 'tags', 'style' => 'height:50px;']);

				        ?>
					    <div class='uil-reload-css hidden' style='-webkit-transform:scale(0.18)'><div></div></div>
				        <div class="alert alert-success hidden" id="success-alert">
						    <button type="button" class="close" data-dismiss="alert">x</button>
						    <strong>Success! </strong>
						    Saved.
						</div>
				    </fieldset>
					<div class="distance-button"></div>
				    <?= $this->Form->button(__('Update'), ['class' => 'btn btn-warning']) ?>
				    <?= $this->Form->button(__('Save to draft'), ['class' => 'btn btn-success']) ?>
					<a href="/diaries" class="btn btn-default pull-right">Cancel</a>
				    <?= $this->Form->end() ?>
					<div class="distance-button"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>
