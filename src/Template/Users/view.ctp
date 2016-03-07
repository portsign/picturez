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

                <div class="users view large-9 medium-8 columns content">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 user-profile">
                            <div class="userp"><strong>User profile</strong></div>
                            <hr>
                        </div>
                        <div class="col-md-4 text-center">
                          <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
                          display:block; margin:auto; width: 70%" src="<?= $user->picture ?>">
                        </div>
                        <div class="col-md-8" style="background-color: #000;opacity: 0.6;">
                          <div class="row">
                            <div class="col-md-12">
                              <h1 class="only-bottom-margin username"><?= h($user->username) ?></h1>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <span class="text-muted"><strong>Email:</strong></span> <?= h($user->email) ?><br>
                              <span class="text-muted"><strong>Birth date:</strong></span> <?= h($user->month."/".$user->date."/".$user->year) ?><br>
                              <span class="text-muted"><strong>Gender:</strong></span> <?= $user->gender ?><br>
                              <span class="text-muted"><strong>Website:</strong></span> <a target="_blank" href="<?= $user->website ?>"><?= $user->website ?></a><br>
                              <span class="text-muted"><strong>Short Biography:</strong></span> <?= $user->bio ?><br><br>
                              <small class="text-muted"><i class="text-m">Created: <?= $user->created ?></i></small>
                            </div>
                            <div class="col-md-6">
                              <div class="activity-mini">
                                <i class="glyphicon glyphicon-comment text-muted"></i> 500
                              </div>
                              <div class="activity-mini">
                                <i class="glyphicon glyphicon-thumbs-up text-muted"></i> 1500
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php 
                            $loged = $this->request->session()->read(['Auth','User','id']);
                            if ($loged!=null) {
                        ?>
                            <div class="row">
                            <div class="col-md-12">
                                <hr><a href="/users/account" class="btn btn-success pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            </div>
                            </div>
                        <?php } else {} ?>
                    </div>
                  </div>
             
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('user_footer') ?>
