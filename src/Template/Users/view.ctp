<?= $this->element('navbar') ?>
<section>
<style type="text/css">
    .panel-body {
        background-image: url('/img/def_feat_pic.jpg');
        background-size: 1200px 430px;

    }
    .panel{
        color: white;
    }
    .text-m,.text-muted,.user-profile,.username {
        color: white;
    }
    .userp {
        padding: 10px;
        border: 1px solid #000;
        width: 180px;
        background-color: #000;
        opacity: 0.7;
    }
</style>
<div class="container pt-0 pb-0">
    <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                <div class="distance-button"></div>

               
                       <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> More About <?= h($user->username) ?></h4>
                                </div>
                                <div class="profile-back">
                                <center>
                                    <img src="<?= $user->picture ?>" name="aboutme" width="150" height="150" style="padding:12px;" border="0" class="img-circle"></a>
                                    <h3 class="media-heading"><strong><?= h($user->first_name." ".$user->last_name) ?></strong></h3>
                               </center>
                                </div>
                            <div class="modal-body">
                                <center>
                                    <p class="text-left"><strong><i class="fa fa-envelope"></i> Email: </strong>
                                        <?= h($user->email) ?></p>
                                    <p class="text-left"><strong><i class="fa fa-transgender"></i> Gender: </strong>
                                        <?= h($user->gender) ?></p> 
                                    <p class="text-left"><strong><i class="fa fa-calendar"></i> Birth Date: </strong>
                                        <?= h($user->month."/".$user->date."/".$user->year) ?></p> 
                                    <p class="text-left"><strong><i class="fa fa-globe"></i> Website: </strong>
                                        <a target="_blank" href="<?= $user->website ?>"><?= $user->website ?></a></p> 
                                    <p class="text-left"><strong><i class="fa fa-male"></i> Short Bio: </strong>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                    <br>
                                </center>
                            </div>
                            <div class="col-md-12">

                                <div class="horizontal-timeline">
                                  <div class="period"><span>2000 - 2004</span></div>
                                  <i class="fa fa-bank"></i>
                                  <h3>School of Arts</h3>
                                  <h5>Graphics Design & Photography</h5>
                                  <p class="mt-30">Aenean magna leo, mollis at dui eu, convallis molestie turpis. Morbi ante nisl, ultricies vitae mattis vestibulum, sagittis a libero. Integer tempor nec erat convallis molestie turpis.</p>
                                </div>
                                <!-- end .horizontal-timeline -->

                                <div class="horizontal-timeline">
                                  <div class="period"><span>2004 - 2008</span></div>
                                  <i class="fa fa-bank"></i>
                                  <h3>Texas State Univerity</h3>
                                  <h5>Graphic Design</h5>
                                  <p class="mt-30">Aenean magna leo, mollis at dui eu, convallis molestie turpis. Morbi ante nisl, ultricies vitae mattis vestibulum, sagittis a libero. Integer tempor nec erat convallis molestie turpis.</p>
                                </div>
                                <!-- end .horizontal-timeline -->
                                <center>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">See All Diaries</button>
                                </center>
                                <br />
                                 <!-- protfolio items -->
              <div class="megafolio-container" data-padding="15" data-layoutarray="[11]">
                <div class="mega-entry cat-all cat-print" id="mega-entry-2" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-print" id="mega-entry-2" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Super Vector Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photoshop" id="mega-entry-3" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Studio Creative Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photography" id="mega-entry-4" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Advanced Creative Sketch</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-branding" id="mega-entry-5" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Black & White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-print" id="mega-entry-6" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Photography Action</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photoshop" id="mega-entry-7" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photoshop" id="mega-entry-7" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Black & White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photoshop" id="mega-entry-7" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photoshop" id="mega-entry-7" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Vintage Photoshop Action</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photography" id="mega-entry-8" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">White Art</div>
                  </a>
                </div>
                <div class="mega-entry cat-all cat-photography" id="mega-entry-8" data-src="http://placehold.it/380x254" data-width="504" data-height="400">
                  <a data-lightbox="gallery" href="http://placehold.it/380x254">
                    <div class="mega-hover alone notitle">
                      <div class="mega-hoverlink"><i class="pe-7s-look"></i></div>
                    </div>
                    <div class="gallerycaption-bottom">Black & White Art</div>
                  </a>
                </div>
                            </div>

                            <div class="modal-footer">
                                <center>
                                <button type="button" class="btn btn-default" data-dismiss="modal">See All Quotes</button>
                                </center>
                            </div>
                        </div>
                <div class="distance-button"></div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('user_footer') ?>
