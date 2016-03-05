    
    var dataDiary = new Array();

    $('button.btn-success').click(function(){ 
        
        dataDiary['id'] = $('div#inject-id').text();
        dataDiary['title'] = $('input').eq(2).val();
        dataDiary['diary'] = CKEDITOR.instances['diary'].getData();
        dataDiary['tags'] = $('input').eq(3).val();
        dataDiary['featureImage'] = $(':input:checked').val();
        dataDiary['status'] = 'draft';

        save(dataDiary);
        return false;
    });

    setInterval(function(){ 
        
        dataDiary['id'] = $('div#inject-id').text();
        dataDiary['title'] = $('input').eq(2).val();
        dataDiary['diary'] = CKEDITOR.instances['diary'].getData();
        dataDiary['tags'] = $('input').eq(3).val();
        dataDiary['featureImage'] = $(':input:checked').val();
        dataDiary['status'] = 'draft';

        save(dataDiary);
        return false;

    }, 60000);


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
            $('div#insert-id').html('<input type="hidden" name="id" value="'+response.id+'" />');
        },
        error: function(){
            alert('Fuck');
        }
        
    });

}


