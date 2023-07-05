/* FAQ
============================================================================ */
$(function(){
  $('.page-faq__question').click(function(){
    $(this).parent('.page-faq__detail > li').toggleClass('active');
    $(this).next('.page-faq__answer').slideToggle();
  });
});