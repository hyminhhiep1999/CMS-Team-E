$('.list-items .items').click(function(){
    var apendImage = $(this).attr('data-image');
    $(this).parent().parents('.product-gallery').find('.image-full').attr("src",apendImage)
  })
  $('.list-items').each(function(){
    $(this).find('.items:first-child').click();
  });