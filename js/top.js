window.addEventListener('beforeunload', function(e){
  $('html,body').animate({ scrollTop: 0 }, '1');
});

// 宿の数
$(function () {
  var lodge_number = $('.top-inn').length;
  // 画面に表示
  if(lodge_number === 1) {
    $('body').addClass('only');
    $('.top-inn__nav').hide();
  } else {
    $('.top-inn__nav').show();
    $('.top-inn__high > .mod-ttl').hide();
  }
});


// 円形プログレスバー
$(function(){
  var bar01 = new ProgressBar.Circle(circle01, {
    strokeWidth: 8,
    easing: 'linear',
    duration: 0,
    color: '#2A8E40',
    trailColor: '#FFF',
    trailWidth: 8,
    svgStyle: null
  });
  var bar02 = new ProgressBar.Circle(circle02, {
    strokeWidth: 8,
    easing: 'linear',
    duration: 0,
    color: '#2A8E40',
    trailColor: '#FFF',
    trailWidth: 7,
    svgStyle: null
  });
  var bar03 = new ProgressBar.Circle(circle03, {
    strokeWidth: 8,
    easing: 'linear',
    duration: 0,
    color: '#2A8E40',
    trailColor: '#FFF',
    trailWidth: 7,
    svgStyle: null
  });
  $(window).on('scroll', function() {
    var windowHeight = $(window).height(); // ウィンドウの高さ
    var documentHeight = $(document).height(); // ドキュメントの高さ
    var scrollTop = $(window).scrollTop(); // スクロール位置
    var scrollPercentage = (scrollTop / windowHeight) * 100; // スクロール位置の割合
    var circlePercentage = scrollPercentage / 100; // スクロール位置の割合
    var circlePercentage02 = (scrollPercentage / 100)- 1; // スクロール位置の割合
    var circlePercentage03 = (scrollPercentage / 100)- 2; // スクロール位置の割合
    var count = Math.floor(scrollPercentage); // 3つずつカウントアップ
    if (scrollTop === 0) {
      $('#counter').text('0' + "%"); // カウントを表示するなど、必要な処理を行う
    }
    if (scrollTop >= windowHeight * 3) {
      bar03.animate(1.0);
      $('#counter').text('100' + "%"); // カウントを表示するなど、必要な処理を行う
    } else if (scrollTop >= windowHeight * 2) {
      $('#circle02').addClass('hidden');
      $('#counter').text(count - 199 + "%"); // カウントを表示するなど、必要な処理を行う
    } else if (scrollTop >= windowHeight) {
      $('#circle01').addClass('hidden');
      $('#circle02').removeClass('hidden');
      $('#counter').text(count - 99 + "%"); // カウントを表示するなど、必要な処理を行う
    } else  if (scrollTop === 0) {
      $('#circle01').removeClass('hidden');
        bar01.animate(circlePercentage);
      $('#counter').text('0' + "%"); // カウントを表示するなど、必要な処理を行う
    } else {
      $('#counter').text(count + 1 + "%"); // カウントを表示するなど、必要な処理を行う
    }
    // if (scrollTop >= windowHeight * 3) {
    //   bar01.animate(1.0);
    // } else if (scrollTop >= windowHeight * 2) {
    //   bar01.animate(circlePercentage);
    // } else if (scrollTop >= windowHeight) {
    //   bar01.animate(circlePercentage);
    // } else if (scrollTop === 0) {
    //   bar01.animate(0);
    // } else {
        bar01.animate(circlePercentage);
        bar02.animate(circlePercentage02);
      if (circlePercentage03 <= 1.0) {
        bar03.animate(circlePercentage03);
      }
    // }
    // 円
    // bar.animate(circlePercentage);
  });
});


// KV
$(function(){
  var header = $('.common-header');
  var kvInner = $('.top-kv__inner');
  var scrollCircle = $('.top-kv__scroll')
  var windowHeight = $(window).height();
  var scrollTop = $(window).scrollTop();
  $('.top-kv').css('height', windowHeight * 4)
  kvInner.css('height', windowHeight);
  if (scrollTop >= windowHeight) {
    $('.top-kv__sec:first-of-type').addClass('hidden')
  } else  {
    $('.top-kv__sec:first-of-type').removeClass('hidden')
  }
  if (scrollTop >= windowHeight * 2) {
    $('.top-kv__sec:nth-of-type(2)').addClass('hidden')
  } else  {
    $('.top-kv__sec:nth-of-type(2)').removeClass('hidden')
  }
  if (scrollTop >= windowHeight * 3) {
    kvInner.css({
      'position': 'absolute',
      'top': windowHeight * 3,
      'bottom': 'auto',
    })
  } else  {
    kvInner.css({
      'position': 'fixed',
      'top': '0',
      'bottom': 'auto',
    })
  }
  if (scrollTop >= windowHeight * 3) {
    scrollCircle.css({
      'position': 'fixed',
      'bottom': '0',
    })
  } else  {
    scrollCircle.css({
      'position': 'absolute',
      'bottom': '0',
    })
  }
  if (scrollTop >= windowHeight * 4) {
    header.css('background','#13320B')
  } else  {
    header.css('background','transparent');
  }
  $(window).scroll(function() {
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
  
    if (scrollTop >= windowHeight) {
      $('.top-kv__sec:first-of-type').addClass('hidden')
    } else  {
      $('.top-kv__sec:first-of-type').removeClass('hidden')
    }
    if (scrollTop >= windowHeight * 2) {
      $('.top-kv__sec:nth-of-type(2)').addClass('hidden')
    } else  {
      $('.top-kv__sec:nth-of-type(2)').removeClass('hidden')
    }
    if (scrollTop >= windowHeight * 3) {
      kvInner.css({
        'position': 'absolute',
        'top': windowHeight * 3,
        'bottom': 'auto',
      })
    } else  {
      kvInner.css({
        'position': 'fixed',
        'top': '0',
        'bottom': 'auto',
      })
    }
    if (scrollTop >= windowHeight * 4) {
      header.css('background','#13320B')
    } else  {
      header.css('background','transparent');
    }
  });
});

// 追従タイトル
$('.top-inn').each(function() {
  var lowSec = $(this).find(".top-inn__low")
  var lowFixed = $(this).find(".top-inn__low-fixed")
  $(window).scroll(function() {
    var headerHeight = $('.common-header').outerHeight();
    var scrollTop = $(window).scrollTop(); // スクロール上部の位置
    let lowTop = lowSec.offset().top; // 対象エリアの上部の位置
    let lowBottom = lowTop + lowSec.outerHeight(); // 対象エリアの下部の位置
    if (scrollTop < lowTop - headerHeight) {
      lowFixed.css({
        'position': 'absolute',
        'top': '0',
        'bottom': 'auto',
      });
    } else if (scrollTop >= lowTop - headerHeight   && scrollTop <= lowBottom - headerHeight * 4) {
      lowFixed.css({
        'position': 'fixed',
        'top': headerHeight,
        'bottom': 'auto',
      });
    } else {
      lowFixed.css({
        'position': 'absolute',
        'top': 'auto',
        'bottom': headerHeight,
      });
    }
  });
});

$('.top-inn').each(function() {
  let scrollTop = $(window).scrollTop(); // スクロール上部の位置
  let innTop = $(this).find(".top-inn__low").offset().top; // 対象エリアの上部の位置
  let innBottom = innTop + $(this).find(".top-inn__low").outerHeight(); // 対象エリアの下部の位置
  if (scrollTop > innTop && scrollTop < innBottom) {
    $(this).find('.top-inn__low-fixed').css({
      'position': 'fixed',
      'top': '0',
      'bottom': 'auto',
    })
  } else {
    $(this).find('.top-inn__low-fixed').css({
      'position': 'absolute',
      'top': 'auto',
      'bottom': '0',
    })
  }
});

// 施設の紹介
$(window).on('scroll', function() {
	$('.top-inn__intro-sec').each(function() { // .js-scrollというクラスが付いている要素に対して
    var elemPosition = $(this).offset().top,
        windowHeight = $(window).height(),
        scroll = $(window).scrollTop();

    if (scroll > elemPosition - windowHeight + windowHeight / 2) {
      // if (scroll > elemPosition - windowHeight) イベント発火のタイミグはお好みで
        $(this).addClass('active'); // ターゲットにis-showというクラスを追加
    }
  });
});
$('.top-inn__facility-right-inner').each(function(){
  if(window.matchMedia('(min-width: 1025px)').matches){
    var rightParent = $(this).parent('.top-inn__facility-right');
    var rightInnerHeight = $(this).outerHeight(true);
    rightParent.css('height', rightInnerHeight);
  }
});

$(function(){
  var arw_prev = $('.top-inn__facility-right .slick-prev');
  var arw_next = $('.top-inn__facility-right .slick-next');
  arw_prev.text('PREV');
  arw_next.text('NEXT');
});

// スライド枚数
$('.top-inn').each(function(){
  $(this).find(".top-inn__facility-left-low").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $(this).parent('.top-inn__facility-left').find(".top-inn__facility-left-num").text(i + '/' + slick.slideCount);
  });
});


// 設備紹介

function checkMediaQuery(){

  $(".top-inn__facility-right.slick-initialized").slick("unslick");
  $(".top-inn__facility-left-low.slick-initialized").slick("unslick");
  $(".top-inn__facility-left-high-inner.slick-initialized").slick("unslick");

    var initialSlide = 0;

    $(".top-inn").each(function(){
      var txt_slider = $(this).find(".top-inn__facility-left-high-inner");
      var txt_slider = $(this).find(".top-inn__facility-right").not(".slick-initialized").slick({
        fade: true,
        speed: 700,
        arrows: true,
        dots: false,
        focusOnSelect: false,
        draggable: false,
        swipeToSlide: false,
        initialSlide: initialSlide,
        waitForAnimate: false,
        asNavFor: txt_slider,
      });

      var nav_col = $(this).find(".top-inn__facility-left-low-item");
      nav_col.eq(0).removeClass("active");
      nav_col.eq(0).addClass("active");
      nav_col.each(function(){
        $(this).on('click', function(){
          nav_col.not(this).removeClass('active');
          $(this).addClass('active');
          var initialSlide = nav_col.index(this);
          main_slider.slick('slickGoTo', initialSlide, false);
        })
      });

      // 6面パネル
      var main_slider = $(this).find(".top-inn__facility-left-low").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        fade: true,
        speed: 700,
        dots: false,
        arrow: true,
        focusOnSelect: false,
        draggable: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
        // asNavFor: main_slider,
      });

      var main_slider = $(this).find(".top-inn__facility-left-high-inner").not(".slick-initialized").slick({
        fade: true,
        speed: 700,
        dots: false,
        focusOnSelect: false,
        draggable: true,
        swipeToSlide: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
        asNavFor: txt_slider,
      });

      $(this).find(".top-inn__facility-right").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        nav_col.removeClass('active');
        nav_col.eq(nextSlide).addClass("active");
        // console.log(nextSlide);
        if(nextSlide >= 20){
          $(this).parent(".top-inn__facility-inner").find(".top-inn__facility-left-low").slick('slickGoTo', 2, false);
        } else if(nextSlide >= 10){
          $(this).parent(".top-inn__facility-inner").find(".top-inn__facility-left-low").slick('slickGoTo', 1, false);
        } else if(nextSlide >= 0){
          $(this).parent(".top-inn__facility-inner").find(".top-inn__facility-left-low").slick('slickGoTo', 0, false);
        }
        /* if(nextSlide == 6){
          $(this).parents(".staysingle-about__right").prev().find(txt_slider).slick('slickGoTo', nextSlide, false);
        } */
      });
    })
  }
window.onload = checkMediaQuery();
var lastInnerWidth = window.innerWidth;
window.addEventListener( "resize", function () {
if ( lastInnerWidth != window.innerWidth ) {
  lastInnerWidth = window.innerWidth ;
  checkMediaQuery();
}
});


$('.top-inn__info-fee > li').each(function(){
   var num = $(this).find('.top-inn__info-fee-right').text();
   var price = String(num).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
   $(this).find('.top-inn__info-fee-right').text(price);
});

// ご利用方法
$(function(){
  $(window).scroll(function (){
      $('.top-using__list > li').each(function(){
          var position = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > position - windowHeight + 200){
              $(function(){
                  $('.top-using__list > li').each(function(i){
                      $(this).delay(i * 300).queue(function(){
                          $(this).addClass('active');
                      });
                  });
              });
          }
      });
  });
});
