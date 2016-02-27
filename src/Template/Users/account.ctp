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
									<div class="distance-button"></div>
									<?= $this->Flash->render('successEditProfile') ?>
									<?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
										<fieldset>
											<div class="form-group">
												<div class="col-md-3"></div>
												<div class="col-md-6">
													<img src="<?= $user->picture ?>" class="inner ratio img-responsive img-circle image-picture-account" />
													<?= $this->Form->file('picture', ['id' => 'filebutton', 'required' => false, 'style' => 'color:transparent;text-align: right;margin-left:205px;width:120px;']); ?>
													<div class="distance-button"></div>
													<?= $this->Form->input('first_name', ['id' => 'textinput', 'class' => 'form-control input-md', 'required' => true]); ?>
													<div class="distance-button"></div>

													<?= $this->Form->input('last_name', ['id' => 'textinput', 'class' => 'form-control input-md', 'required' => true]); ?>
													<div class="distance-button"></div>

													<?=
													$this->Form->radio(
													    'gender',
													    [
													        ['value' => 'male', 'text' => ' Male ', 'style' => 'color:red;'],
													        ['value' => 'female', 'text' => ' Female', 'style' => 'color:blue;margin-left:20px;']
													    ],
														[
															'required' => true
														]
													);
													?>
													<div class="distance-button"></div>
													<div class="col-md-3"><div class="row">Date Birth</div></div>
													<div class="col-md-9">
														<div class="row">
														<?=
														$this->Form->select(
														    'date',
														    [0 => ' date ', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
														    ['class' => 'form-control tgl-form', 'style' => 'float:left']
														);
														?>
														<?=
														$this->Form->select(
														    'month',
														    [0 => ' month ', 'January','February','March','April','May','June','July','August','September','October','November','December'],
														    ['class' => 'form-control bulan-form', 'style' => 'float:left']
														);
														?>
														<select name="year" class="form-control year-form">
															<option>Year</option>
															<option <?php if ($user->year == '1970') { echo 'selected="selected"'; } ?> value="1970">1970</option>
															<option <?php if ($user->year == '1971') { echo 'selected="selected"'; } ?> value="1971">1971</option>
															<option <?php if ($user->year == '1972') { echo 'selected="selected"'; } ?> value="1972">1972</option>
															<option <?php if ($user->year == '1973') { echo 'selected="selected"'; } ?> value="1973">1973</option>
															<option <?php if ($user->year == '1974') { echo 'selected="selected"'; } ?> value="1974">1974</option>
															<option <?php if ($user->year == '1975') { echo 'selected="selected"'; } ?> value="1975">1975</option>
															<option <?php if ($user->year == '1976') { echo 'selected="selected"'; } ?> value="1976">1976</option>
															<option <?php if ($user->year == '1977') { echo 'selected="selected"'; } ?> value="1977">1977</option>
															<option <?php if ($user->year == '1978') { echo 'selected="selected"'; } ?> value="1978">1978</option>
															<option <?php if ($user->year == '1979') { echo 'selected="selected"'; } ?> value="1979">1979</option>
															<option <?php if ($user->year == '1980') { echo 'selected="selected"'; } ?> value="1980">1980</option>
															<option <?php if ($user->year == '1981') { echo 'selected="selected"'; } ?> value="1981">1981</option>
															<option <?php if ($user->year == '1982') { echo 'selected="selected"'; } ?> value="1982">1982</option>
															<option <?php if ($user->year == '1983') { echo 'selected="selected"'; } ?> value="1983">1983</option>
															<option <?php if ($user->year == '1984') { echo 'selected="selected"'; } ?> value="1984">1984</option>
															<option <?php if ($user->year == '1985') { echo 'selected="selected"'; } ?> value="1985">1985</option>
															<option <?php if ($user->year == '1986') { echo 'selected="selected"'; } ?> value="1986">1986</option>
															<option <?php if ($user->year == '1987') { echo 'selected="selected"'; } ?> value="1987">1987</option>
															<option <?php if ($user->year == '1988') { echo 'selected="selected"'; } ?> value="1988">1988</option>
															<option <?php if ($user->year == '1989') { echo 'selected="selected"'; } ?> value="1989">1989</option>
															<option <?php if ($user->year == '1990') { echo 'selected="selected"'; } ?> value="1990">1990</option>
															<option <?php if ($user->year == '1991') { echo 'selected="selected"'; } ?> value="1991">1991</option>
															<option <?php if ($user->year == '1992') { echo 'selected="selected"'; } ?> value="1992">1992</option>
															<option <?php if ($user->year == '1993') { echo 'selected="selected"'; } ?> value="1993">1993</option>
															<option <?php if ($user->year == '1994') { echo 'selected="selected"'; } ?> value="1994">1994</option>
															<option <?php if ($user->year == '1995') { echo 'selected="selected"'; } ?> value="1995">1995</option>
															<option <?php if ($user->year == '1996') { echo 'selected="selected"'; } ?> value="1996">1996</option>
															<option <?php if ($user->year == '1997') { echo 'selected="selected"'; } ?> value="1997">1997</option>
															<option <?php if ($user->year == '1998') { echo 'selected="selected"'; } ?> value="1998">1998</option>
															<option <?php if ($user->year == '1999') { echo 'selected="selected"'; } ?> value="1999">1999</option>
															<option <?php if ($user->year == '2000') { echo 'selected="selected"'; } ?> value="2000">2000</option>
															<option <?php if ($user->year == '2001') { echo 'selected="selected"'; } ?> value="2001">2001</option>
															<option <?php if ($user->year == '2002') { echo 'selected="selected"'; } ?> value="2002">2002</option>
															<option <?php if ($user->year == '2003') { echo 'selected="selected"'; } ?> value="2003">2003</option>
															<option <?php if ($user->year == '2004') { echo 'selected="selected"'; } ?> value="2004">2004</option>
															<option <?php if ($user->year == '2005') { echo 'selected="selected"'; } ?> value="2005">2005</option>
															<option <?php if ($user->year == '2006') { echo 'selected="selected"'; } ?> value="2006">2006</option>
															<option <?php if ($user->year == '2007') { echo 'selected="selected"'; } ?> value="2007">2007</option>
															<option <?php if ($user->year == '2008') { echo 'selected="selected"'; } ?> value="2008">2008</option>
														</select>
														</div>
													</div>
													<div class="distance-button"></div>

													<?= $this->Form->input('bio', ['id' => 'textarea', 'class' => 'form-control input-md']); ?>
													<div class="distance-button"></div>
													<?= $this->Form->button('Save', ['class' => 'btn btn-warning pull-right']) ?>

											</div>

										</fieldset>
									<?= $this->Form->end() ?>
									<div class="col-md-3"></div>
			                    </div>
				                <div class="tab-pane fade" id="tab2">
								<fieldset>

										<?= $this->Form->create($user) ?>

										<?= $this->Form->input('email', ['class' => 'form-control input-md']); ?>
										<?= $this->Form->input('website', ['class' => 'form-control input-md']); ?>
										<div class="distance-button"></div>
										<?= $this->Form->button('Save', ['class' => 'btn btn-warning pull-right']) ?>
										<div class="distance-button"></div>
										<div class="distance-button"></div>
										<?= $this->Form->end() ?>
									</fieldset>


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
