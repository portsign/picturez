
// THIS AJAX SAVE DIARY--------------------------------------------------------------------
var dataDiary = new Array();

$('button.btn-success').click(function(){ 
    
    dataDiary['id'] = $('div#inject-id').text();
    dataDiary['title'] = $('#title').val();
    dataDiary['diary'] = CKEDITOR.instances['diary'].getData();
    dataDiary['tags'] = $('#tags').val();
    dataDiary['featureImage'] = $(':input:checked').val();
    dataDiary['status'] = 'draft';

    save(dataDiary);
    return false;
});

$('button.btn-warning').click(function(){ 
    
    dataDiary['id'] = $('div#inject-id').text();
    dataDiary['title'] = $('#title').val();
    dataDiary['diary'] = CKEDITOR.instances['diary'].getData();
    dataDiary['tags'] = $('#tags').val();
    dataDiary['featureImage'] = $(':input:checked').val();
    dataDiary['status'] = 'posted';

    save(dataDiary);
    return false;
});


function save(data) 
{
    $("div.uil-reload-css").removeClass('hidden');
    var url = location.protocol+'//'+location.hostname+'/diaries/ajaxSaveDiary';

    $.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        data: { id: dataDiary['id']
                , title: dataDiary['title']
                , diary: dataDiary['diary']
                , feature_image: dataDiary['featureImage']
                , tags: dataDiary['tags']
                , status: dataDiary['status'] 
            },
        beforeSend  : function() {
            
        },
        success : function(response) {
            console.log(response);
            $("div.uil-reload-css").addClass('hidden');
            // tambah tulisan kalo sudah save;
            $('div.alert-success').removeClass('hidden');
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                $('div.alert-success').addClass('hidden');
            });   
            $('div#inject-id').text(response.id);

            if(response.status=='posted') {
                window.location.href = "/diaries";
            }
        },
        error: function() {
            alert('Fuck');
        }
        
    });

}

//BULK ACTION ON LIST DIARIES-------------------------------------------------------------

$("#selectall").click(function () {

    $('.case').prop('checked', this.checked);
    var count = $('input:checked').length;
    if (count>0) {
        $('button.btn-apply').removeClass('disabled');
    } else {
        $('button.btn-apply').addClass('disabled');
    }

});

$(".case").click(function() {

    if($(".case").length == $(".case:checked").length) {
        $("#selectall").attr("checked", "checked");
    } else {
        $("#selectall").removeAttr("checked");
    }

});

setTimeout(function() {
    $('div.alert-success').addClass('hidden');
}, 5000);

// FOR DELETE BULK BUTTON DISABLED----------------------------------------------------------
$('.case').click(function() {  
var count_check_diary = $('input:checked').length;

    if (count_check_diary>=1) {
        $('button.btn-apply').removeClass('disabled');
    } if (count_check_diary==0) {
        $('button.btn-apply').addClass('disabled');
    } else {
        $('button.btn-apply').removeClass('disabled');
    }
});


// MODAL - CREATE QUOTES-------------------------------------------------------------------
    //remove modal when checked radio button image
    $(document).ready(function() {

        $('label.image-toggler').on('click', function(){
            $('a.btn-default').eq(0).addClass('hidden');
            $('a.btn-danger').removeClass('hidden');
            $(this).clone('img').appendTo("div#hidden_radio");
            $('label.image-toggler img').eq(0).addClass("prev-thumb");
            $('label.image-toggler').eq(0).addClass("disabled");
        });
        $("a.btn-danger").click(function() {
            $('a.btn-default').eq(0).removeClass('hidden');
            $('a.btn-danger').addClass('hidden');
            $('div#selected-image label').remove();
            $(':input:checked').remove();
        });

    });

    // STEP WIZARD 
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-default').addClass('btn-primary');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='email'],select[id='industry']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }
            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');

    });

$('.image-toggler-quotes img').click(function() {

    $('<img src='+$(this).attr('src')+' class="img-responsive" />').appendTo('#ready_image');
    $('#1_choose').addClass('hidden'); 
    $('#2_choose').addClass('hidden');
    $('#ready_image').removeClass('hidden');
    $('a.btn-cancel').removeClass('hidden');
    $('button.nextBtn').attr('disabled', false);
    $('<input type="text" class="form-control" Placeholder="Add Title" style="margin-bottom:20px" autofocus /><textarea class="form-control" rows="6" style="margin-bottom:20px" Placeholder="Add Short Description"></textarea>').appendTo('.col-md-6 .row');

});

$('a.btn-cancel').click(function() {

    $('#ready_image').find('img').remove();
    $('#1_choose').removeClass('hidden  '); 
    $('#2_choose').removeClass('hidden');
    $('#ready_image').addClass('hidden');
    $(this).addClass('hidden');
    $('button.nextBtn').attr('disabled', true);
    $('.add-description .row').find('input').remove();
    $('.add-description .row').find('textarea').remove();
    $('#place_pic img').remove();
    $('.stepwizard-step').eq(1).find('a').attr('disabled', true);

});


$('#readyNext').click(function() {
    if ($('#place_pic img').length==0){
        $('#ready_image img').clone().appendTo('#step-2 #place_pic');
    } else {

    }
});

$(document).ready(function() {
    // TEXT ADD
    var get_height = 0;
    $('#addtext').on('change keyup keydown paste', function() {

        var thetext = $('#addtext').val();
        $('.h2-custom-picture span').text(thetext);


        get_height = $('.h2-custom-picture').height();
        console.log(get_height);
        var inc_font = 2;
        var dec_font = 2.3;
        if (get_height > 300) {
            $('.h2-custom-picture span').css({'font-size' : inc_font + 'vw'});
            $('.h2-custom-picture').css({'margin-top' : '-67px'})
        } else {
            $('.h2-custom-picture span').css({'font-size' : dec_font + 'vw'});
            $('.h2-custom-picture').css({'margin-top' : '0px'})
        }

    });
    // ON SLIDER BLUR
    $('div.bubble-slider-thumb').eq(0).slider({
        change: function(event, ui) {
            if (event.originalEvent) {
                var valblur = $('.getBlur').eq(0).text();
                $('#place_pic img').css({'-webkit-filter': 'blur('+valblur+'px)'});
            }
            else {} // Programatic Code
        }
    });
    // ON SLIDER TEXT SIZE
    $('div.bubble-slider-thumb').eq(1).slider({
        change: function(event, ui) {
            if (event.originalEvent) {
                var valFont = $('.getBlur').eq(1).text();
                $('.h2-custom-picture span').css({'font-size': ''+valFont+'vw'});
            }
            else {}// Programatic Code
        }
    });
    // ON SLIDER BRIGHTNESS
    $('div.bubble-slider-thumb').eq(2).slider({
        change: function(event, ui) {
            if (event.originalEvent) {
                var valBright = $('.getBlur').eq(2).text();
                $('#place_pic img').css({'-webkit-filter': 'brightness('+valBright+'%)'});
            }
            else {}// Programatic Code
        }
    });
    // CHANGE TEXT POSITION
    $('select').eq(0).change(function() { 

        var valPosition = $('select').val();
        if (valPosition=='left') {
            $('.h2-custom-picture').removeAttr('style');
            $('.h2-custom-picture').css({'left':'0px', 'text-align':'left'})
        }
        if (valPosition=='center') {
            $('.h2-custom-picture').removeAttr('style');
            $('.h2-custom-picture').css({'left':'0px', 'right':'0px', 'margin':'auto', 'text-align':'center'})
        } 
        if (valPosition=='right') {
            $('.h2-custom-picture').removeAttr('style');
            $('.h2-custom-picture').css({'right':'0px', 'text-align':'right'})
        }

    });
});