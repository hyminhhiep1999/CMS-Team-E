//fake data
const listColor = [
  {
    color: 'blue',
    image1: 'images/pr-gallery-1.jpg',
    image2: 'images/pr-gallery-2.jpg',
    image3: 'images/pr-gallery-3.jpg',
    image4: 'images/pr-gallery-4.jpg'
  },
  {
    color: 'green',
    image1: 'images/pr-green-gallery-1.jpg',
    image2: 'images/pr-green-gallery-2.jpg',
    image3: 'images/pr-green-gallery-3.jpg',
    image4: 'images/pr-green-gallery-4.jpg'
  },
  {
    color: 'orange',
    image1: 'images/pr-orange-gallery-1.jpg',
    image2: 'images/pr-orange-gallery-2.jpg',
    image3: 'images/pr-orange-gallery-3.jpg',
    image4: 'images/pr-orange-gallery-4.jpg'
  }
];

//color picker

const url = $('.list-items').data('url');
const color = 'blue';
thumbnail(color);

$('.color-picker').click(function(){
  $(this).parent().find('.color-picker').removeClass('is-active');
  thumbnail($(this).data('value'));
  $('.list-items').each(function(){
    $(this).find('.items:first-child').click();
  });
  $(this).addClass('is-active');
});

function thumbnail(colorPicker){
  const images = listColor.filter((item) => colorPicker === item.color);
  $('.list-items .items').each(function(index){
    const urlIMG = `${url}/${images[0]['image'+(index+1)]}`;
    $(this).find('img').attr('src', urlIMG);
    $(this).attr('data-image', urlIMG);
  });
}
//end color picker

$('.list-items .items').click(function(){
  var apendImage = $(this).attr('data-image');
  $(this).parent().parents('.product-gallery').find('.image-full').attr("src",apendImage)
})
$('.list-items').each(function(){
  $(this).find('.items:first-child').click();
});