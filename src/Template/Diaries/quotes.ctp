<?= $this->element('navbar') ?>
<section>
<div class="container pt-0 pb-0">
    <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                <div class="distance-button"></div>

                    <div class="container">
                        <div class="row multistep">
                       
                        <div class="col-xs-4 multistep-step current">
                            <div class="text-center multistep-stepname">Current Step</div>
                            <div class="progress"></div>
                            <a href="#" class="multistep-dot"></a>
                        </div>

                        <div class="col-xs-4 multistep-step next">
                            <div class="text-center multistep-stepname">Next Step</div>
                            <div class="progress"></div>
                            <a href="#" class="multistep-dot"></a>
                        </div>

                        <div class="col-xs-4 multistep-step disabled">
                            <div class="text-center multistep-stepname">Final Step</div>
                            <div class="progress"></div>
                            <a href="#" class="multistep-dot"></a>
                        </div>
                    </div>
                    </div>

                    <br />
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('user_footer') ?>
