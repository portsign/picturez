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
				            echo $this->Form->input('tags', ['id' => 'tags', 'class' => 'ckeditor', 'style' => 'height:50px;']);
				        ?>
						<div class="distance-button"></div>
						<div id="selected-image" class="feature-image">
							<div id="hidden_radio" class="btn-group" data-toggle="buttons">
							</div>
						</div>
						<div class="distance-button"></div>
				        <a class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-image-o"></i> Use Feature Image</a>
				        <a class="btn btn-danger hidden"><i class="fa fa-trash"></i> Remove Feature Image</a>
				    	<!-- Large modal -->

						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						    <div class="modal-dialog modal-lg">
							    <div class="modal-content">
								    <div style="padding: 10px;">
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-default image-toggler" data-image-id="#image1">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" value="/img/def_feat_pic.jpg" id="option1"><a data-dismiss="modal" aria-label="Close"> <img src="/img/def_feat_pic.jpg" width="160" title="image 2" alt="image 2" /></a>
										    </label>
										    <label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/1.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>

										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/3.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/5.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/6.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/7.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/8.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/9.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/10.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/11.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/12.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/13.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/15.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/16.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/17.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/18.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/19.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="options" data-dismiss="modal" aria-label="Close" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/20.jpg" width="160" title="image 1" alt="image 1" /></a>
										 	</label>
										</div>
								    </div>
							    </div>
						    </div>
						</div>
				    </fieldset>
					<div class="distance-button"></div>
				    <?= $this->Form->button(__('Post'), ['name' => 'post', 'value' => true, 'class' => 'btn btn-warning']) ?>
				    <?= $this->Form->button(__('Draft'), ['name' => 'draft', 'value' => false, 'class' => 'btn btn-success']) ?>
					<a href="/diaries" class="btn btn-default pull-right">Cancel</a>
					<div class="distance-button"></div>
				    <?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>