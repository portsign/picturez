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
					<a href="/diaries/add" class="btn btn-default"><i class="fa fa-plus"></i> Add New Diary</a>
				    <h3><?= __('Diaries') ?></h3>
				    <div class="col-md-2">
					    <div class="row">
						    <select name="status" class="form-control">
						    	<option value="delete_permanently">Delete Permanently</option>
						    	<option value="move_to_trash">Move to Draft</option>
						    	<option value="postall">Post All</option>
						    </select>
					    </div>
				    </div>
				    <div class="col-md-1">
						<button class="btn btn-apply">Apply</button>
						<div class="distance-button"></div>
					</div>
				    <div class="col-md-9">
					    <div class="row">
					    	<form action="/diaries" method="GET">
							    <div class="form-group">
							        <input type="text" name="key" class="form-search form-control" placeholder="Type Keyword and Enter">
							        <button type="submit" class="hidden">Search</button>
							    </div>
							</form>
					    </div>
				    </div>
				    <table class="table table-striped table-border" cellpadding="0" cellspacing="0">
				        <thead>
				            <tr>
				                <th><input type="checkbox" id="selectall" /></th>
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
				                <td><input type="checkbox" class="case" name="case"></td>
				                <td><a href="/diaries/edit/<?= h($diary->id) ?>"><?= h($diary->title) ?></a></td>
				                <td <?php if ($diary->status=='posted') { echo 'class="font-color-posted"'; } else { echo 'class="font-color-draft"'; } ?> ><strong><?= h($diary->status) ?></strong></td>
				                <td><?= h($diary->created) ?></td>
				                <td><?= h($diary->modified) ?></td>
				                <td class="actions">
				                    <?= $this->Html->link(__(' '), ['action' => 'view', $diary->id], ['class' => 'fa fa-eye distance-action-button']) ?>
				                    <?= $this->Html->link(__(' '), ['action' => 'edit', $diary->id], ['class' => 'fa fa-pencil-square-o distance-action-button']) ?>
				                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $diary->id], ['confirm' => __('Are you sure you want to delete This Diary?', $diary->id), 'class' => 'fa fa-trash-o distance-action-button']) ?>
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
