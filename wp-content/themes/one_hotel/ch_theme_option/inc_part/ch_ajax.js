jQuery( function($) {
    $( "#sortable" ).sortable({
        update: function(event, ui) {
            var listOrder = [];
            $('#sortable li').each(function(i){
                listOrder.push($(this).data('short') + '=' + $(this).data('item'));
            });


           $.ajax({
            url: the_ajax_script.ajaxurl,
            type: 'post',

            data: {
                action: 'textAjaxProcessRequest',
                order: listOrder
            },
            success: function( data ) {
            console.log( data );
        },error: function() {
            console.log("Error");            
        }
    })
        }
    });
    $( "#sortable" ).disableSelection();
} );
/*

jQuery(function($) { // Form Submit Function 
    $('#ch_themesetting').on('submit',function(event){
        event.preventDefault();
        var postData = $(this).serialize();
        postData = postData.replace(/%5B/g,"[");
        postData = postData.replace(/%5D/g,"]");
            
            $.ajax({
                url: the_ajax_script.ajaxurl,
                type: 'post',
                data: {
                    action: 'postAjaxCHaction',
                    postdata: postData
                },
                
            success: function( data ) {
                $('.ajaxResult').html(data);
                console.log(data);
            },error: function() {
                console.log("Error");            
            }
        })
    });
});*/