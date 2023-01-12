jQuery(function ($) {
      /*
       * Select/Upload image(s) event
       */
  $('body').on('click', '.cxc_multi_upload_image_button', function (e) {
    e.preventDefault();

    var button = $(this),
    custom_uploader = wp.media({
      title: 'Insert image',        
      button: {
        text: 'Use this image' 
      },
      multiple: true 
    });
    custom_uploader.on('select', function () { 
      var attech_ids = '';
      attachments
      var attachments = custom_uploader.state().get('selection'),
      attachment_ids = new Array(),
      i = 0;
      $(button).siblings('ul').empty();
      attachments.each(function (attachment) {
        attachment_ids[i] = attachment['id'];
        attech_ids += ',' + attachment['id'];
        if (attachment.attributes.type == 'image') {
          $(button).siblings('ul').append('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.url + '" /></a><i class=" dashicons  dashicons-no delete-img"></i></li>');
        } else {
          $(button).siblings('ul').append('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.icon + '" /></a><i class=" dashicons  dashicons-no delete-img"></i></li>');
        }

        i++;
      });

      $(button).siblings('.attechments-ids').attr('value', attachment_ids);
      $(button).siblings('.cxc_multi_remove_image_button').show();

    });
    custom_uploader.on('open',function() {
      var selection = custom_uploader.state().get('selection');
      var ids_value = $(button).siblings('.attechments-ids').val();

      if(ids_value.length > 0) {
        var ids = ids_value.split(',');

        ids.forEach(function(id) {
          attachment = wp.media.attachment(id);
          attachment.fetch();
          selection.add(attachment ? [attachment] : []);
        });
      }
    });
    custom_uploader.open();
  });

      /*
       * Remove image event
       */
  $('body').on('click', '.cxc_multi_remove_image_button', function () {
    $(this).hide().prev().val('').prev().addClass('button').html('Add  Media');
    $(this).parent().find('ul').empty();
    return false;
  });

  jQuery(document).on('click', '.cxc-multi-upload-medias ul li i.delete-img', function () {
    var ids = [];
    var attach_id =  jQuery(this).parents('li').attr('data-attechment-id');
    jQuery('.cxc-multi-upload-medias ul li').each(function () {
      if( attach_id != jQuery(this).attr('data-attechment-id') ){
        ids.push(jQuery(this).attr('data-attechment-id'));  
      }

    });
    jQuery(this).parents('.cxc-multi-upload-medias').find('input[type="hidden"]').val(ids);
    jQuery(this).parent().remove();               
  });

});