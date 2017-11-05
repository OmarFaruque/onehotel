	jQuery(document).ready(function($) {

	    $('#ch_fade_slider_upload').click(function(e) {
	        var mediaUploader;
	        e.preventDefault();
	        // If the uploader object has already been created, reopen the dialog
	        if (mediaUploader) {
	            mediaUploader.open();
	            return;
	        }
	        // Extend the wp.media object
	        mediaUploader = wp.media.frames.file_frame = wp.media({
	            title: 'Choose Slider Image',
	            button: {
	                text: 'Choose Slider Image'
	            },
	            multiple: false
	        });

	        // When a file is selected, grab the URL and set it as the text field's value
	        mediaUploader.on('select', function() {
	            attachment = mediaUploader.state().get('selection').first().toJSON();
	            $('input#ch_slider_input_img').attr('value', attachment.url);
	            $('input#ch_slider_input_img_id').attr('value', attachment.id);
	            $('.previewch_slider img').attr('src', attachment.url);

	        });
	        // Open the uploader dialog
	        mediaUploader.open();
	    });

	    /* End Image Upload */




	    /* New Slider Submit */
	    $(document.body).on('click', 'input#ch_slider_submit', function() {
	        var imageUpload = $(this).closest('.submit_ch_sluder').prev('.uploader').find('input#ch_slider_input_img').val();

	        if (imageUpload == '' || UrlExists(imageUpload) == 404) {
	            $(this).closest('.submit_ch_sluder').prev('.uploader').find('input#ch_slider_input_img').addClass('error');
	            return false;
	        }
	        var formVar = $('form#ch_fade_slider').serialize();
	        var slider_title = $(this).parents('.newSliderWrap').find('#s_title').val();
	        var s_button_text = $(this).parents('.newSliderWrap').find('input#s_button_text').val();
	        var s_button_link = $(this).parents('.newSliderWrap').find('input#s_button_link').val();
	        var s_visiable = $(this).parents('.newSliderWrap').find('input:checked').val();
	        var input_img = $(this).parents('.newSliderWrap').find('input#ch_slider_input_img').val();
	        var img_id = $(this).parents('.newSliderWrap').find('input#ch_slider_input_img_id').val();
	        var endesable = $('table.widefat tbody tr').last().children('td').last().children('a').last().data('delete');
	        var encrise = 0;
	        if (typeof endesable === "undefined") {
	            encrise = 0;
	        } else {
	            encrise += parseInt(endesable + 1);
	        }
	        console.log(formVar);

	        var newRaw = '<tr>';
	        newRaw += '<td>';
	        newRaw += '<span class="img_prev"><img class="sliderImg" src="' + input_img + '"/></span>';
	        newRaw += '<span class="hidden"><input required type="text" class="hidden" name="ch_slider_input_img[]" value="' + input_img + '">';
	        newRaw += '<input type="hidden" name="ch_slider_input_img_id[]" value="' + img_id + '"></span>';
	        newRaw += '</td>';
	        newRaw += '<td><span class="text" style="display: inline;">' + slider_title + '</span><span class="input hidden"><input type="text" class="" name="s_title[]" value="' + slider_title + '"></span></td>';
	        newRaw += '<td><span class="text" style="display: inline;">' + s_button_text + '</span><span class="input hidden"><input type="text" class="" name="s_button_text[]" value="' + s_button_text + '"></span></td>';
	        newRaw += '<td><span class="text" style="display: inline;">' + s_button_link + '</span><span class="input hidden"><input type="text" class="" name="s_button_link[]" value="' + s_button_link + '"></span></td>';
	        newRaw += '<td>';
	        newRaw += (s_visiable == 0) ? '<a href="javascript:void(0)" data-endesable="' + encrise + '" class="enableDesable readonly"><span class="desable">Desable</span></a>' : '<a href="javascript:void(0)" data-endesable="' + encrise + '" class="enableDesable readonly"><span class="enable">Enable</span></a>';
	        newRaw += '<span class="input hidden"><input type="hidden" name="s_visiable[]" value="' + s_visiable + '" ></span></td>';
	        newRaw += '<td><a class="edit_slide" data-edit="' + encrise + '" href="javascript:void(0)" ><div alt="f464" class="dashicons dashicons-edit"></div></a><a class="delete_slide" data-delete="' + encrise + '" href="javascript:void(0)"><div alt="f182" class="dashicons dashicons-trash"></div></a></td>';
	        newRaw += '</tr>';


	        jQuery.ajax({
	            type: "POST",
	            url: ajaxurl,
	            data: {
	                action: "ch_slider_insert",
	                formVar: formVar
	            },
	            success: function(data) {
	                console.log(data);
	                // jQuery('.errorShow').text(data);
	                $('input#ch_slider_input_img').removeClass('error');
	                document.getElementById("ch_fade_slider").reset();
	                $('input#ch_slider_input_img, input#ch_slider_input_img_id').attr('value', '');
	                $('.previewch_slider img').attr('src', '');
	                $('table.widefat tbody').append(newRaw);
	            }
	        });
	    });



	    $(document.body).on('click', 'a.delete_slide', function() {
	        var dataDelete = $(this).data('delete');
	        var thistr = $(this).closest('td').closest('tr');

	        jQuery.ajax({
	            type: "POST",
	            url: ajaxurl,
	            data: {
	                action: "ch_slider_delete",
	                delete: dataDelete
	            },
	            success: function(data) {
	                thistr.remove();
	                window.location.reload(true);
	            }
	        });
	        return false;
	    });



	    // Edit Function 
	    $(document.body).on('click', '.edit_slide', function() {
	        $('span.input').addClass('hidden');
	        $('span.text').show();
	        $('a.edit_slide').removeClass('active');
	        $('a.enableDesable').addClass('readonly');
	        $('a.edit_slide').html('<div alt="f464" class="dashicons dashicons-edit"></div>');
	        $('span.img_prev').removeClass('clicable');
	        $('tr').removeClass('editActive');
	        $(this).parents('tr').addClass('editActive');
	        $(this).addClass('active');
	        $(this).html('<div alt="f147" class="dashicons dashicons-yes"></div>');
	        $(this).parents('tr').find('span.text').hide();
	        $(this).parents('tr').find('span.input').removeClass('hidden');
	        $(this).parents('tr').find('span.img_prev').addClass('clicable');
	        $(this).parents('tr').find('a.enableDesable').removeClass('readonly').addClass('active');
	        $(this).closest('td').append('<span></span>');
	    });


	    /* Submit Edited Data */
	    $(document.body).on('click', 'a.edit_slide.active', function() {
	        var thisTr = $(this).parents('tr.editActive');
	        var slider_title = $(this).parents('tr.editActive').find('input[name="s_title[]"]').val();
	        var s_button_text = $(this).parents('tr.editActive').find('input[name="s_button_text[]"]').val();
	        var s_button_link = $(this).parents('tr.editActive').find('input[name="s_button_link[]"]').val();
	        var s_visiable = $(this).parents('tr.editActive').find('input[name="s_visiable[]"]').val();
	        var input_img = $(this).parents('tr.editActive').find('input[name="ch_slider_input_img[]"]').val();
	        var img_id = $(this).parents('tr.editActive').find('input[name="ch_slider_input_img_id[]"]').val();
	        var edit_id = $(this).data('edit');

	        // Ajax Action 
	        jQuery.ajax({
	            type: "POST",
	            url: ajaxurl,
	            data: {
	                action: "ch_slider_edit",
	                slider_title: slider_title,
	                s_button_text: s_button_text,
	                s_button_link: s_button_link,
	                s_visiable: s_visiable,
	                input_img: input_img,
	                img_id: img_id,
	                edit_id: edit_id
	            },
	            success: function(data) {
	                //window.location.reload(true);
	                console.log(data);
	                thisTr.find('input[name="s_title[]"]').closest('span.input').prev('span.text').text(slider_title);
	                thisTr.find('input[name="s_button_text[]"]').closest('span.input').prev('span.text').text(s_button_text);
	                thisTr.find('input[name="s_button_link[]"]').closest('span.input').prev('span.text').text(s_button_link);


	                thisTr.find('span.text').show();
	                thisTr.find('span.input').addClass('hidden');

	                thisTr.find('a.edit_slide').removeClass('active').html('<div alt="f464" class="dashicons dashicons-edit"></div>');
	                thisTr.find('a.enableDesable').addClass('readonly').removeClass('active');
	                thisTr.removeClass('editActive');
	            }
	        });
	    });


	    // Active & Deactive click  When Edit Slider  
	    $(document.body).on('click', 'a.enableDesable.active', function() {
	        var currentVal = $(this).next('span.input').children('input').val();
	        var changeVal = (currentVal == 1) ? 0 : 1;
	        var thisText = ($(this).text() == 'Enable') ? 'Desable' : 'Enable';
	        $(this).next('span.input').children('input').val(changeVal);
	        $(this).text(thisText);

	    });




	    // Edit Image 
	    $(document.body).on('click', 'tr.editActive img.sliderImg', function(e) {
	        var mediaUploader;
	        var thisfield = $(this);
	        e.preventDefault();
	        // If the uploader object has already been created, reopen the dialog
	        if (mediaUploader) {
	            mediaUploader.open();
	            return;
	        }
	        // Extend the wp.media object
	        mediaUploader = wp.media.frames.file_frame = wp.media({
	            title: 'Choose Slider Image',
	            button: {
	                text: 'Choose Slider Image'
	            },
	            multiple: false
	        });

	        // When a file is selected, grab the URL and set it as the text field's value
	        mediaUploader.on('select', function() {
	            attachment = mediaUploader.state().get('selection').first().toJSON();
	            thisfield.attr('src', attachment.url);
	            thisfield.closest('span.img_prev.clicable').next('span.hidden').children('input[name="ch_slider_input_img[]"]').attr('value', attachment.url);
	            thisfield.closest('span.img_prev.clicable').next('span.hidden').children('input[name="ch_slider_input_img_id[]"]').val(attachment.id);
	        });
	        // Open the uploader dialog
	        mediaUploader.open();
	    });


	    // Shortable  
	    $(function() {
	        $("table.widefat tbody").sortable({
	            update: function(event, ui) {
	                var formVar = $('form#ch_fade_slider').serialize();

	                // Action Shortable Ajax 
	                jQuery.ajax({
	                    type: "POST",
	                    url: ajaxurl,
	                    data: {
	                        action: "ch_update_shortable",
	                        formVar: formVar
	                    },
	                    success: function(data) {
	                        console.log(data);
	                        jQuery('.errorShow').text(data);
	                        $('input#ch_slider_input_img').removeClass('error');
	                        //document.getElementById("of_slider").reset();
	                        //$('table.widefat tbody').append(newRaw);
	                    }
	                });

	            }
	        });
	        $("table.widefat tbody").disableSelection();
	        // End Shortable
	    });


	    /*
	     * Show Hide New Slider
	     */

	    $(".addSlider a").toggle(function() {
	        $('div#newSlider').animate({
	            opacity: 1,
	            height: '335px'
	        });
	        $("html, body").animate({
	            scrollTop: $(document).height()
	        }, 1000);
	        $(this).removeClass('dashicons-plus-alt').addClass('dashicons-dismiss');
	    }, function() {
	        $('div#newSlider').animate({
	            opacity: 0,
	            height: '0px'
	        });
	        $(this).removeClass('dashicons-dismiss').addClass('dashicons-plus-alt');
	    });


	 

	}); // End Document Ready 


	 // Check Url 404
	function UrlExists(url) {
	    var http = new XMLHttpRequest();
	    http.open('HEAD', url, false);
	    http.send();
	    return http.status;
	}