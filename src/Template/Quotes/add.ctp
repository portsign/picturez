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
                                left: 15; 
                                z-index: 4;
                                width: 60%; 
                                font-size: 2.2vw;
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
                                padding: 6px;
                                padding-right: 10px; 
                                font-size: 2.2vw;
                                font-weight: normal;
                                font-family: "Roboto", serif;
                            }
                            label.btn.btn-default {
                                border: none;
                                margin-top: 5px;
                            }
                            li.dropdown select {
                                border: none;
                                margin-top: 7px;
                            }
                            .h2-custom-picture {
                                line-height: 50px;
                            }
                        </style>
                            <div id="player">&nbsp;</div> 
                            <input id="example" name="example" placeholder="0 - 100" type="number" min="0" max="100" step="1" value="0" data-color="#6324B5" data-decimals="0" class="bubble-slider">
                            <div id="place_pic">
                                <h2 class="h2-custom-picture"><span></span></h2>
                            </div>
                            <br />
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default">
                                            <input type="checkbox" id="bold" autocomplete="off"><i class="fa fa-bold"></i>
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="checkbox" id="italic" autocomplete="off"> <i class="fa fa-italic"></i>
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="checkbox" id="underline" autocomplete="off"> <i class="fa fa-underline"></i>
                                        </label>
                                    </div>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <select id="fonts" class="form-control">
                                            <option class="g-font-faces" value='"Tangerine", serif'>Tangerine</option>
                                            <option class="g-font-faces" value='"Inconsolata", serif'>Inconsolata</option>
                                            <option class="g-font-faces" value='"Droid Sans", serif'>Droid Sans</option>
                                            <option class="g-font-faces" value='"Open Sans", serif'>Open Sans</option>
                                            <option class="g-font-faces" value='"Roboto", serif'>Roboto</option>
                                            <option class="g-font-faces" value='"Lato", serif'>Lato</option>
                                            <option class="g-font-faces" value='"Roboto", serif' selected="selected">Roboto</option>
                                            <option class="g-font-faces" value='"Condensed", serif'>Condensed</option>
                                            <option class="g-font-faces" value='"Slabo 27px", serif'>Slabo 27px</option>
                                            <option class="g-font-faces" value='"Oswald", serif'>Oswald</option>
                                            <option class="g-font-faces" value='"Montserrat", serif'>Montserrat</option>
                                            <option class="g-font-faces" value='"Source Sans Pro", serif'>Source Sans Pro</option>
                                            <option class="g-font-faces" value='"Raleway", serif'>Raleway</option>
                                            <option class="g-font-faces" value='"Lora", serif'>Lora</option>
                                            <option class="g-font-faces" value='"PT Sans", serif'>PT Sans</option>
                                            <option class="g-font-faces" value='"Open Sans Condensed", serif'>Open Sans Condensed</option>
                                            <option class="g-font-faces" value='"Ubuntu", serif'>Ubuntu</option>
                                            <option class="g-font-faces" value='"Roboto Slab", serif'>Roboto Slab</option>
                                            <option class="g-font-faces" value='"Droid Serif", serif'>Droid Serif</option>
                                            <option class="g-font-faces" value='"Arimo", serif'>Arimo</option>
                                            <option class="g-font-faces" value='"Fjalla One", serif'>Fjalla One</option>
                                            <option class="g-font-faces" value='"Merriweather", serif'>Merriweather</option>
                                            <option class="g-font-faces" value='"PT Sans Narrow", serif'>PT Sans Narrow</option>
                                            <option class="g-font-faces" value='"Noto Sans", serif'>Noto Sans</option>
                                            <option class="g-font-faces" value='"Titillium Web", serif'>Titillium Web</option>
                                            <option class="g-font-faces" value='"PT Serif", serif'>PT Serif</option>
                                            <option class="g-font-faces" value='"Playfair Display", serif'>Playfair Display</option>
                                            <option class="g-font-faces" value='"Alegreya Sans", serif'>Alegreya Sans</option>
                                            <option class="g-font-faces" value='"Indie Flower", serif'>Indie Flower</option>
                                            <option class="g-font-faces" value='"Bitter", serif'>Bitter</option>
                                            <option class="g-font-faces" value='"Passion One", serif'>Passion One</option>
                                            <option class="g-font-faces" value='"Poiret One", serif'>Poiret One</option>
                                            <option class="g-font-faces" value='"Dosis", serif'>Dosis</option>
                                            <option class="g-font-faces" value='"Cabin", serif'>Cabin</option>
                                            <option class="g-font-faces" value='"Candal", serif'>Candal</option>
                                            <option class="g-font-faces" value='"Yanone Kaffeesatz", serif'>Yanone Kaffeesatz</option>
                                            <option class="g-font-faces" value='"Oxygen", serif'>Oxygen</option>
                                            <option class="g-font-faces" value='"Lobster", serif'>Lobster</option>
                                            <option class="g-font-faces" value='"Arvo", serif'>Arvo</option>
                                            <option class="g-font-faces" value='"Inconsolata", serif'>Inconsolata</option>
                                            <option class="g-font-faces" value='"Hind", serif'>Hind</option>
                                            <option class="g-font-faces" value='"Noto Serif", serif'>Noto Serif</option>
                                            <option class="g-font-faces" value='"Nunito", serif'>Nunito</option>
                                            <option class="g-font-faces" value='"Anton", serif'>Anton</option>
                                            <option class="g-font-faces" value='"Bree Serif", serif'>Bree Serif</option>
                                            <option class="g-font-faces" value='"Muli", serif'>Muli</option>
                                            <option class="g-font-faces" value='"Abel", serif'>Abel</option>
                                            <option class="g-font-faces" value='"Fira Sans", serif'>Fira Sans</option>
                                            <option class="g-font-faces" value='"Josefin Sans", serif'>Josefin Sans</option>
                                            <option class="g-font-faces" value='"Ubuntu Condensed", serif'>Ubuntu Condensed</option>
                                            <option class="g-font-faces" value='"Exo "2 serif'>Exo </option>
                                            <option class="g-font-faces" value='"Amatic SC", serif'>Amatic SC</option>
                                            <option class="g-font-faces" value='"Libre Baskerville", serif'>Libre Baskerville</option>
                                            <option class="g-font-faces" value='"Crimson Text", serif'>Crimson Text</option>
                                            <option class="g-font-faces" value='"Pacifico", serif'>Pacifico</option>
                                            <option class="g-font-faces" value='"Francois One", serif'>Francois One</option>
                                            <option class="g-font-faces" value='"Archivo Narrow", serif'>Archivo Narrow</option>
                                            <option class="g-font-faces" value='"Signika", serif'>Signika</option>
                                            <option class="g-font-faces" value='"Asap", serif'>Asap</option>
                                            <option class="g-font-faces" value='"Shadows Into Light", serif'>Shadows Into Light</option>
                                            <option class="g-font-faces" value='"Cuprum", serif'>Cuprum</option>
                                            <option class="g-font-faces" value='"Quicksand", serif'>Quicksand</option>
                                            <option class="g-font-faces" value='"Play", serif'>Play</option>
                                            <option class="g-font-faces" value='"Merriweather Sans", serif'>Merriweather Sans</option>
                                            <option class="g-font-faces" value='"Varela Round", serif'>Varela Round</option>
                                            <option class="g-font-faces" value='"Vollkorn", serif'>Vollkorn</option>
                                            <option class="g-font-faces" value='"Alegreya", serif'>Alegreya</option>
                                            <option class="g-font-faces" value='"Maven Pro", serif'>Maven Pro</option>
                                            <option class="g-font-faces" value='"Orbitron", serif'>Orbitron</option>
                                            <option class="g-font-faces" value='"Karla", serif'>Karla</option>
                                            <option class="g-font-faces" value='"Rokkitt", serif'>Rokkitt</option>
                                            <option class="g-font-faces" value='"Dancing Script", serif'>Dancing Script</option>
                                            <option class="g-font-faces" value='"Righteous", serif'>Righteous</option>
                                            <option class="g-font-faces" value='"Questrial", serif'>Questrial</option>
                                            <option class="g-font-faces" value='"Architects Daughter", serif'>Architects Daughter</option>
                                            <option class="g-font-faces" value='"Exo", serif'>Exo</option>
                                            <option class="g-font-faces" value='"PT Sans Caption", serif'>PT Sans Caption</option>
                                            <option class="g-font-faces" value='"Patua One", serif'>Patua One</option>
                                            <option class="g-font-faces" value='"Ropa Sans", serif'>Ropa Sans</option>
                                            <option class="g-font-faces" value='"Abril Fatface", serif'>Abril Fatface</option>
                                            <option class="g-font-faces" value='"Chewy", serif'>Chewy</option>
                                            <option class="g-font-faces" value='"Pathway Gothic One", serif'>Pathway Gothic One</option>
                                            <option class="g-font-faces" value='"Quattrocento Sans", serif'>Quattrocento Sans</option>
                                            <option class="g-font-faces" value='"Monda", serif'>Monda</option>
                                            <option class="g-font-faces" value='"Istok Web", serif'>Istok Web</option>
                                            <option class="g-font-faces" value='"Sigmar One", serif'>Sigmar One</option>
                                            <option class="g-font-faces" value='"Bangers", serif'>Bangers</option>
                                            <option class="g-font-faces" value='"Josefin Slab", serif'>Josefin Slab</option>
                                            <option class="g-font-faces" value='"BenchNine", serif'>BenchNine</option>
                                            <option class="g-font-faces" value='"Crete Round", serif'>Crete Round</option>
                                            <option class="g-font-faces" value='"EB Garamond", serif'>EB Garamond</option>
                                            <option class="g-font-faces" value='"Noticia Text", serif'>Noticia Text</option>
                                            <option class="g-font-faces" value='"Kaushan Script", serif'>Kaushan Script</option>
                                            <option class="g-font-faces" value='"Comfortaa", serif'>Comfortaa</option>
                                            <option class="g-font-faces" value='"Cantarell", serif'>Cantarell</option>
                                            <option class="g-font-faces" value='"News Cycle", serif'>News Cycle</option>
                                            <option class="g-font-faces" value='"Gloria Hallelujah", serif'>Gloria Hallelujah</option>
                                            <option class="g-font-faces" value='"Russo One", serif'>Russo One</option>
                                            <option class="g-font-faces" value='"Pontano Sans", serif'>Pontano Sans</option>
                                            <option class="g-font-faces" value='"Gudea", serif'>Gudea</option>
                                            <option class="g-font-faces" value='"Covered By Your Grace", serif'>Covered By Your Grace</option>
                                            <option class="g-font-faces" value='"Lobster Two", serif'>Lobster Two</option>
                                            <option class="g-font-faces" value='"Coming Soon", serif'>Coming Soon</option>
                                        </select>
                                    </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <select id="fontSize" class="form-control">
                                            <option class="0px" value="1.2">12</option>
                                            <option class="3px" value="1.8">18</option>
                                            <option class="50px" value="2.2" selected="selected">22</option>
                                            <option class="50px" value="2.6">28</option>
                                            <option class="62px" value="3.3">30</option>
                                        </select>
                                    </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                    <div id="textPosition" class="btn-group" data-toggle="buttons">
                                        <label class="left-side btn btn-default active">
                                            <input type="radio" autocomplete="off" checked><i class="fa fa-align-left"></i>
                                        </label>
                                        <label class="centered btn btn-default">
                                            <input type="radio" autocomplete="off"> <i class="fa fa-align-center"></i>
                                        </label>
                                        <label class="right-side btn btn-default">
                                            <input type="radio" autocomplete="off"> <i class="fa fa-align-right"></i>
                                        </label>
                                        <label class="justified btn btn-default">
                                            <input type="checkbox" autocomplete="off"> <i class="fa fa-align-justify"></i>
                                        </label>
                                    </div>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <select id="bgEffect" class="form-control">
                                            <option value="none"><i>Background Effect</i></option>
                                            <option value="grayscale(100%)">Black and White</option>
                                            <option value="hue-rotate(90deg)">Hue Rotate</option>
                                            <option value="saturate(8)">Saturate</option>
                                            <option value="sepia(100%)">Sepia</option>
                                            <option value="contrast(200%) brightness(150%)">Contrass 200%</option>
                                        </select>
                                    </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                                
                            <textarea id="addtext" class="form-control" placeholder="Type Your Qoute Here" rows="7"></textarea>
                            <br />
                            <button class="btn btn-default nextBtn col-xs-3 pull-right" type="button" >Next Step and finish <i class="fa fa-angle-double-right"></i> </button>
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
