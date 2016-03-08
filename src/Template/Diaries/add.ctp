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
				    <?= $this->Form->create($diary, ['id' => 'ajax-submit']) ?>
				    <div id="inject-id" class="hidden"></div>
				    <fieldset>
				        <legend><?= __('Add New Diary') ?></legend><div class='uil-reload-css hidden' style='-webkit-transform:scale(0.12)'><div></div></div>
				        <?php
				            echo $this->Form->input('title', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'title for your story today', 'autofocus' => true]);
				            echo $this->Form->input('diary', ['class' => 'ckeditor form-control uil-cube-css']).'<div class="distance-button"></div>';
				            echo $this->Form->input('tags', ['id' => 'tags', 'class' => 'ckeditor', 'style' => 'height:50px;']);
				        ?>
						<div class="distance-button"></div>
						<div id="selected-image" class="feature-image">
							<div id="hidden_radio" class="btn-group" data-toggle="buttons">
							</div>
						</div>
						<div class="distance-button"></div>
				        <a class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-image-o"></i> Use Feature Image</a>
				        <a class="btn btn-danger hidden"><i class="fa fa-trash-o"></i> Remove Feature Image</a>
				    	<hr />

					    <div class='uil-reload-css hidden' style='-webkit-transform:scale(0.18)'><div></div></div>
				    	
				    	<div class="alert alert-success hidden" id="success-alert">
						    <button type="button" class="close" data-dismiss="alert">x</button>
						    <strong>Success! </strong>
						    Your Diary have added to your Draft.
						</div>
				    	<!-- Large Modal Feature Image-->
						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						    <div class="modal-dialog modal-lg">
							    <div class="modal-content">
								    <div style="padding: 10px;">

										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-default image-toggler" data-image-id="#image1">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/def_feat_pic.jpg" id="option2"><a data-dismiss="modal" aria-label="Close"> <img src="/img/def_feat_pic.jpg" width="160" /></a>
										    </label>
										    <label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/1.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/1.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/2.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/2.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/3.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/3.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/4.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/4.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/5.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/5.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/6.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/6.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/7.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/7.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/8.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/8.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/9.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/9.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/10.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/10.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/11.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/11.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/12.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/12.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/13.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/13.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/14.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/14.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/15.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/15.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/16.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/16.jpg" width="160" /></a>
										 	</label>
										 	<label class="btn btn-default image-toggler" data-image-id="#image2">
										    	<input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/17.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/17.jpg" width="160" /></a>
										 	</label>
										</div>
								    </div>
							    </div>
						    </div>
						</div>
				    	<!-- Large Modal Feature Image End-->

					    </fieldset><div class="distance-button"></div>
					    <?= $this->Form->button(__('Publish'), ['name' => 'post', 'value' => true, 'class' => 'btn btn-warning']) ?>
					    <?= $this->Form->button(__('Save'), ['name' => 'draft', 'value' => false, 'class' => 'btn btn-success']) ?><a href="/diaries" class="btn btn-default pull-right">Cancel</a><div class="distance-button"></div>
					    <?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('user_footer') ?>