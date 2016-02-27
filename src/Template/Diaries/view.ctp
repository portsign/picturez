<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">
				<div class="distance-button"></div>
				<ol class="breadcrumb">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Html->link(__('Edit Diary'), ['action' => 'edit', $diary->id]) ?> </li>
					<li><?= $this->Form->postLink(__('Delete Diary'), ['action' => 'delete', $diary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diary->id)]) ?> </li>
					<li><?= $this->Html->link(__('List Diaries'), ['action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New Diary'), ['action' => 'add']) ?> </li>
				</ol>

				<div class="diaries view large-9 medium-8 columns content">
				    <h3><?= h($diary->title) ?></h3>
				    <table class="table table-striped table-border vertical-table">
				        <tr>
				            <th><?= __('Title') ?></th>
				            <td><?= h($diary->title) ?></td>
				        </tr>
				        <tr>
				            <th><?= __('Id') ?></th>
				            <td><?= $this->Number->format($diary->id) ?></td>
				        </tr>
				        <tr>
				            <th><?= __('Status') ?></th>
				            <td><?= $this->Number->format($diary->status) ?></td>
				        </tr>
				        <tr>
				            <th><?= __('Created') ?></th>
				            <td><?= h($diary->created) ?></td>
				        </tr>
				        <tr>
				            <th><?= __('Modified') ?></th>
				            <td><?= h($diary->modified) ?></td>
				        </tr>
				    </table>
				        <h4><?= __('Diary') ?></h4>
				        <?= $this->Text->autoParagraph(h($diary->diary)); ?>
						<a href="/diaries" class="btn btn-default">Back to diary lists</a>
						<div class="distance-button"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>
