
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


function save(data) {
    $("div.uil-reload-css").removeClass('hidden');
    var url = location.protocol+'//'+location.hostname+'/diaries/ajaxSaveDiary';

    console.log(dataDiary['id']);

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
        success : function(response){
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
        error: function(){
            alert('Fuck');
        }
        
    });

}


//BULK ACTION ON LIST DIARIES

$("#selectall").click(function () {
    $('.case').prop('checked', this.checked);
    var count = $('input:checked').length;
    if (count>0) {
        $('button.btn-apply').removeClass('disabled');
    } else {
        $('button.btn-apply').addClass('disabled');
    }
});

$(".case").click(function(){
    if($(".case").length == $(".case:checked").length) {
        $("#selectall").attr("checked", "checked");
    } else {
        $("#selectall").removeAttr("checked");
    }
});

setTimeout(function(){
  $('div.alert-success').addClass('hidden');
}, 5000);

// FOR DELETE BULK BUTTON DISABLED
$('.case').click(function(){  
var count_check_diary = $('input:checked').length;

    if (count_check_diary>=1) {
        $('button.btn-apply').removeClass('disabled');
    } if (count_check_diary==0) {
        $('button.btn-apply').addClass('disabled');
    } else {
        $('button.btn-apply').removeClass('disabled');
    }
});