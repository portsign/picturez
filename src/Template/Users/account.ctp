<?= $this->element('navbar') ?>

<section>
<div class="container pt-0 pb-0">
	<div class="section-content">
	    <div class="row">
			<div class="col-md-12">
				<h3>My Account</h3>
	                <div class="horizontal-tab">
	                	<ul class="nav nav-tabs">
			                <li class="active"><a href="#tab1" data-toggle="tab"><i class="pe-7s-user"></i>Profile</a></li>
			                <li><a href="#tab2" data-toggle="tab"><i class="pe-7s-lock"></i>Account</a></li>
			                <li><a href="#tab3" data-toggle="tab"><i class="pe-7s-tools"></i>Settings</a></li>
	                	</ul>
		                <div class="tab-content">
		                    <div class="tab-pane fade in active" id="tab1">
			                    <div class="row">
									<div class="distance-button"></div>
									<form class="form-horizontal">
										<fieldset>
											<div class="form-group">
												<label class="col-md-4 control-label" for="textinput">Current Picture</label>
												<div class="col-md-4">
													<img src="/img/profile_pictures/default_avatar.jpg" class="ratio img-responsive img-circle image-picture-account" />
											    </div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label" for="textinput">trade show name</label>
												<div class="col-md-4">
													<input id="textinput" name="textinput" type="text" placeholder="trade show name" class="form-control input-md">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label" for="textinput">date attended</label>
												<div class="col-md-4">
													<input id="textinput" name="textinput" type="text" placeholder="date attended" class="form-control input-md">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label" for="textinput">host</label>
												<div class="col-md-4">
													<input id="textinput" name="textinput" type="text" placeholder="host" class="form-control input-md">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label" for="selectbasic">country</label>
												<div class="col-md-4">
													<select id="selectbasic" name="selectbasic" class="form-control">
														<option value="1">1</option>
														<option value="2">2</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="textarea">trade show introduction</label>
												<div class="col-md-4">
													<textarea class="form-control" id="textarea" name="textarea">trade show introduction</textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="filebutton">upload photo</label>
												<div class="col-md-4">
													<input id="filebutton" name="filebutton" class="input-file" type="file">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="singlebutton"></label>
												<div class="col-md-4">
													<button id="singlebutton" name="singlebutton" class="btn btn-warning">submit</button>
												</div>
											</div>

										</fieldset>
									</form>
			                    </div>
			                </div>
		                <div class="tab-pane fade" id="tab2">
		                    <div class="row">
								<!--  -->
		                    </div>
		                </div>
		                <div class="tab-pane fade" id="tab3">
		                    <div class="row">
								<!--  -->
		                    </div>
		                </div>
	                	</div>
					<div class="distance-button"></div>
	            </div>
			</div>
		</div>
	</div>
</div>
</section>

<?= $this->element('user_footer') ?>
