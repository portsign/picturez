<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">
				<div class="distance-button"></div>
				<ol class="breadcrumb">
				  <li><?= __('Actions') ?></li>
				  <li><?= $this->Html->link(__('New Diary'), ['action' => 'add']) ?></li>
				</ol>

				<div class="diaries index large-9 medium-8 columns content">
					<a href="/diaries/add" class="btn btn-default">Add New Diary</a>
				    <h3><?= __('Diaries') ?></h3>
				    <div class="col-md-3">
					    <div class="row">
						    <select name="status" class="form-control">
						    	<option value="delete_permanently">Delete Permanently</option>
						    	<option value="move_to_trash">Move to Draft</option>
						    	<option value="post">Post</option>
						    </select>
					    </div>
				    </div>
				    <div class="col-md-9">
					    <div class="row">
					    	<form role="search">
							    <div class="form-group">
							        <input type="text" class="form-control" placeholder="Search">
							    </div>
							</form>
					    </div>
				    </div>
				    <table class="table table-striped table-border" cellpadding="0" cellspacing="0">
				        <thead>
				            <tr>
				                <th><?= $this->Paginator->sort('/') ?></th>
				                <th><?= $this->Paginator->sort('title') ?></th>
				                <th><?= $this->Paginator->sort('status') ?></th>
				                <th><?= $this->Paginator->sort('created') ?></th>
				                <th><?= $this->Paginator->sort('modified') ?></th>
				                <th class="actions"><?= __('Actions') ?></th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php 
				            	foreach ($diaries as $diary): 
				            ?>
				            <tr>
				                <td><input type="checkbox"></td>
				                <td><a href="/diaries/edit/<?= h($diary->id) ?>"><?= h($diary->title) ?></a></td>
				                <td class="font-color"><strong><?= h($diary->status) ?></strong></td>
				                <td><?= h($diary->created) ?></td>
				                <td><?= h($diary->modified) ?></td>
				                <td class="actions">
				                    <?= $this->Html->link(__(' '), ['action' => 'view', $diary->id], ['class' => 'fa fa-eye distance-action-button']) ?>
				                    <?= $this->Html->link(__(' '), ['action' => 'edit', $diary->id], ['class' => 'fa fa-pencil-square-o distance-action-button']) ?>
				                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $diary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diary->id), 'class' => 'fa fa-trash-o distance-action-button']) ?>
				                </td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <div class="paginator">
				        <ul class="pagination">
				            <?= $this->Paginator->prev('< ' . __('previous')) ?>
				            <?= $this->Paginator->numbers() ?>
				            <?= $this->Paginator->next(__('next') . ' >') ?>
				        </ul>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>
