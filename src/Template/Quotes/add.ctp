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
            <?php 
            // debug($data)
            ?>

            <!-- quote form -->
            
                <fieldset><!-- form contents -->

                    <!-- Wizard STEP 1 -->
                    <div class="row setup-content" id="step-1">
                        <div class="col-sm-12">
                            <!--  -->
                            <!-- Large modal -->
                            <div class="distance-button"></div>
                            <center>
                                <h1 id="1_choose"><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="pe-7s-photo"></i></a></h1>
                                
                                <p id="2_choose">Choose Picture</p>
                                <div class="col-md-6 add-description">
                                    <div id="ready_image" class="hidden">
                                    </div>
                                </div>
                                

                            </center>
                                <div class="col-md-6 add-description">
                                    <div class="row">

                                    </div>
                                </div>
                            
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
                                            <li><a href="#id"><i class="fa fa-angle-double-right"></i> Nature Wallpaper</a></li>
                                            <li><a href="#name"><i class="fa fa-angle-double-right"></i> Landscape</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Abstract</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Tech</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Animals</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Rain</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Cloud</a></li>
                                            <li><a href="#description"><i class="fa fa-angle-double-right"></i> Flame</a></li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="search_param" value="name" id="search_param">         
                                    <input type="text" class="form-control" name="q" placeholder="Search by name.." id="search_key" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="submit">  Search  </button>
                                    </span>
                                </div>
                                
                                <div class="distance-button"></div>
                                <center>Available Pictures</center>
                                    <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image1">
                                                <a data-dismiss="modal" aria-label="Close"> <img src="/img/def_feat_pic.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/1.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/2.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/3.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/4.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/5.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/6.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/7.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/8.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/9.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/10.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/11.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/12.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/13.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/14.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/15.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/16.jpg" width="166" /></a>
                                            </label>
                                            <label class="btn btn-default image-toggler-quotes" data-image-id="#image2">
                                                <a data-dismiss="modal" aria-label="Close"><img src="/img/17.jpg" width="166" /></a>
                                            </label>
                                        </div>

                                </div>
                              </div>
                            </div>

                            <a class="btn btn-primary btn-cancel hidden">Change Picture</a>
                            <button id="readyNext" class="btn btn-default nextBtn 1_next col-xs-3 pull-right" disabled="disabled" type="button" >Next Step <i class="fa fa-angle-double-right"></i> </button>
                        </div>
                    </div>
                    <!-- Wizard STEP 1 END -->
                    
                    <!-- Wizard STEP 2 -->
                    <div class="row setup-content" id="step-2">
                        <div class="col-sm-12">
                        <style type="text/css">
                            h2 { 
                               position: absolute; 
                               top: 200px; 
                               left: 0; 
                               width: 100%; 
                               font-size: 28px;
                            }
                            #place_pic {
                                position: relative; 
                                width: 100%; /* for IE 6 */
                            }
                            h2 span { 
                               color: white; 
                               font: bold 24px/45px Helvetica, Sans-Serif; 
                               letter-spacing: -1px;  
                               background: rgb(0, 0, 0); /* fallback color */
                               background: rgba(0, 0, 0, 0.7);
                               padding: 10px; 
                               font-size: 28px;
                            }
                        </style>
                            <!--  -->
                            <input id="example" name="example" placeholder="0 - 100" type="number" min="0" max="100" step="1" value="50" data-color="#6324B5" data-decimals="0" class="bubble-slider">
                            
                            <div id="place_pic">
                                <h2 class="h2-custom-picture"><span>Lorem Ipsum Dolor Sit Amet</span></h2>
                            </div>
                            <br />
                            <textarea class="form-control" placeholder="Type Your Qoute Here"></textarea>
                            <div class="col-xs-6">
                                <br />
                                <br />
                                <input id="example" name="example" placeholder="0 - 100" type="number" min="0" max="100" step="1" value="50" data-color="#1C8EC5" data-decimals="0" class="bubble-slider">
                            </div>
                            <div class="col-xs-6">
                                <br />
                                <br />
                                <input id="example" name="example" placeholder="0 - 100" type="number" min="0" max="100" step="1" value="50" data-color="#12C7AC" data-decimals="0" class="bubble-slider">    
                            </div>
                            <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span>Text Position</span>
                                    <select class="pull-right" style="width: 200px;">
                                        <option>Left</option>
                                        <option>Center</option>
                                        <option>Right</option>
                                    </select>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span>Text Bold</span>
                                    <div class="material-switch pull-right">
                                        <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                                        <label for="someSwitchOptionDefault" class="label-default"></label>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <br />
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

                    <br />
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('user_footer') ?>
