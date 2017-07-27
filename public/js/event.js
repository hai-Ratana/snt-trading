$(document).ready(function(){
  $('.dropForm').on('click',function(){
    $('.createSlide').fadeIn(1500);
  });
  $('.close').on('click',function(){
    $('.createSlide').fadeOut(400);
  });
});
