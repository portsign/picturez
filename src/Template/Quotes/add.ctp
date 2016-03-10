<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
    <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                <div class="distance-button"></div>

                    <!-- Step Wizard -->
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Step 1</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3</p>
                    </div>
                </div>
            </div>
            <!-- Step Wizard END -->
            <!-- quote form -->
            <form class="form-horizontal" role="form" method="post" autocomplete="on" spellcheck="true">
            
                <fieldset><!-- form contents -->

                    <!-- Wizard STEP 1 -->
                    <div class="row setup-content" id="step-1">
                        <div class="col-sm-12">
                            <!--  -->
                            <!-- Large modal -->
                            <div class="distance-button"></div>
                            <center>
                                <h1><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="pe-7s-photo"></i></a></h1>
                                <p>Choose Picture</p>
                            </center>
                            <div class="distance-button"></div>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-pading">

                                  <div class="input-group">
                                    <div class="input-group-btn search-panel">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span id="search_concept">Category</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#id"><i class="fa fa-angle-double-right"></i> ID</a></li>
                                            <li><a href="#name"><i class="fa fa-angle-double-right"></i> Name</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Description</a></li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="search_param" value="name" id="search_param">         
                                    <input type="text" class="form-control" name="q" placeholder="Search.." id="search_key" value="">
                                    <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">  Search  </button>
                                    </span>
                                </div>
                                
                                <div class="distance-button"></div>
                                <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default image-toggler" data-image-id="#image1">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/def_feat_pic.jpg" id="option2"><a data-dismiss="modal" aria-label="Close"> <img src="/img/def_feat_pic.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/1.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/1.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/2.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/2.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/3.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/3.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/4.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/4.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/5.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/5.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/6.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/6.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/7.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/7.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/8.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/8.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/9.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/9.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/10.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/10.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/11.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/11.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/12.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/12.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/13.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/13.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/14.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/14.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/15.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/15.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/16.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/16.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler" data-image-id="#image2">
                                                <input type="radio" name="featureImage" data-dismiss="modal" aria-label="Close" value="/img/17.jpg" id="option2"> <a data-dismiss="modal" aria-label="Close"><img src="/img/17.jpg" width="166" /></a>
                                            </label>
                                        </div>

                                </div>
                              </div>
                            </div>

                            <button class="btn btn-default nextBtn col-xs-3 pull-right" type="button" >Next Step <i class="fa fa-angle-double-right"></i> </button>
                        </div>
                    </div>
                    <!-- Wizard STEP 1 END -->
                    
                    <!-- Wizard STEP 2 -->
                    <div class="row setup-content" id="step-2">
                        <div class="col-sm-12">
                            <!--  -->
                            <button class="btn btn-default nextBtn col-xs-3 pull-right" type="button" >Next Step <i class="fa fa-angle-double-right"></i> </button>
                        </div>
                    </div>
                    <!-- Wizard STEP 2 END -->
                    
                    <!-- Wizard STEP 3 -->
                    <div class="row setup-content" id="step-3">
                        <div class="col-sm-12">
                            <!--  -->
                        <div class="col-sm-3"><h3>SHARE <i class="fa fa-angle-double-right"></i></h3></div>
                        </div>
                    </div>
                    <!-- Wizard STEP 3 END -->
                </fieldset><!-- form contents END -->
            </form>

                    <br />
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('user_footer') ?>
