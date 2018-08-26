

$(document).ready(function(){
// $(function(){

$('.thumb').magnifier({
  magnify: 3, 
  // region: {
  //   h: 38.7, 
  //   w: 38.7
  // }, 
  display: $('#display')
});

$('#cart').click(function(e){
  // alert('kk');
	$('.subMenu').toggle().css({

         'transition': '0.5s linear',
		'transform':'translateY(0px)',

	});
  $.get('process.php?action=carts',function(datas)
  {
    $('#cartBody').html(datas);
  });
   // $('.subMenu').toggle();
});

$('#addCart').click(function(e){
  var productNames= $('#productName').text();
  var productPrices =$('#productRate').text();
  var productImages =$('#productImage').attr('src');

  $.post('process.php?action=addCart',{
   productName:productNames,
   productPrice:productPrices,
   productImage:productImages
  },function(data)
  {
     alert(data)
  });



});
   });