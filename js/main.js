$(function(){

$('#blog').on('inview',function(){
  $(this).addClass('tada');
});

$('h1').on('inview',function(){
  $(this).addClass('slideInLeft');
});
$('h2').on('inview',function(){
  $(this).addClass('slideInRight');
});
$('address').on('inview',function(){
  $(this).addClass('slideInRight');
});






});
