// 自行加入的JS請寫在這裡
$(function() {
    $('.video_slider').slick({
        dots: false,
        arrow: true,
        infinite: true,
        speed: 500,
        autoplay: false,
        cssEase: 'ease'
    });
    $('.issue_block .inner').slick({
        dots: false,
        arrow: true,
        infinite: true,
        speed: 500,
        autoplay: false,
        cssEase: 'ease'
    });
    $('.adSlider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        arrow: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                dots: false,
                arrows: true
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: true
            }
        }]
    });
	 //燈箱slick+lightBox組合
     $('.cp_slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnSelect: true,
        accessibility: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 545,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            }
        }]
    });
     $('.cp_slider').slickLightbox({
        caption: 'caption',
        useHistoryApi: 'true',
        lazy: true
    });


     $('.advanced_search').hide();
     $('.btn_advanced_search').off().click(function(event) {
        $('.advanced_search').stop().slideToggle();
    });
    // category
    $('.category').find('a').off().click(function(event) {
        $(this).parent('li').siblings().find('a').removeClass('active');
        $(this).addClass('active');
    }); 
    
});
$(function() {
    var duration_speed = 400, //設定每張圖轉場動畫速度
        vertical_slider_speed = 2000, //設定每張圖停留時間
        autoplay_restart = 5000; //設定多久開始啟用autoplay
    // 新增左右箭頭
    $('.vertical_slider').append('<a href="javascript:;" class="prev">上一則</a><a href="javascript:;" class="next">下一則</a>')
    // 設定右邊選單
    $('.v_slider .container').append('<div class="vslider_menu"><ul></ul></div>'); // 先為menu設定一個家 
    $('.vertical_slider ul li').each(function() {
        var caption = $(this).find('img').attr('alt');
        // var Sec_index = $(this).index();   
        // console.log(Sec_index+SecHTML);
        $('.vslider_menu ul').append('<li><a href="#">' + caption + '</a>');
        $(this).find('a').append('<h3>' + caption + '</h3>');
        // console.log('sec_index='+sec_index);
    });
    var menuLength = $('.vertical_slider ul li').length;
    $(window).bind("load resize", function(e) {
        var vsliderH = $('.vertical_slider').height();
        console.log(vsliderH);
        menuLiHeight = Math.floor(vsliderH / menuLength);
        $('.vslider_menu ul li').each(function(index, el) {
            $(this).css('height', menuLiHeight - 1);
        });
        $('.vslider_menu ul li:last').height(menuLiHeight + 2);
    });
    var TIMER = 0
    var enterSliderMode = false;
    console.log(enterSliderMode)
    // console.log(TIMER);
    var pic_index = 0;
    // console.log('pic_index=' + pic_index);
    $('.vertical_slider ul li').eq(pic_index).css({ top: 0 });
    $('.vslider_menu ul li').eq(pic_index).addClass('active');
    $('.vertical_slider ul li a').attr('tabindex', '-1');
    // $('.vertical_slider ul li').eq(0).find('a').attr('tabindex', '1');
    // TimerStart();
    // 設定輪播 setInterval
    function TimerStart() {
        if (TIMER > 0) { return; }
        TIMER = setInterval(function() {
            $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: '-310px' }, duration_speed, 'swing');
            if (pic_index < $('.vertical_slider ul li').length - 1) {
                pic_index++;
                // console.log('pic_index=' + pic_index);
            } else {
                pic_index = 0;
            }
            $('.vertical_slider ul li').eq(pic_index).css({
                top: '305px'
            });
            $('.vertical_slider ul li a').attr('tabindex', '-1');
            $('.vertical_slider ul li').eq(pic_index).find('a').attr('tabindex', '0');
            $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: "0px" }, duration_speed, 'swing');
            $('.vslider_menu ul li').removeClass('active');
            $('.vslider_menu ul li').eq(pic_index).addClass('active');
        }, vertical_slider_speed);
        // console.log(TIMER);
    };
    // TimerStart();

    function TimerStop() {
        clearInterval(TIMER);
        TIMER = 0;
        // console.log(TIMER);
    }
    // $('.vslider_menu').hover(function() {
    //     TimerStop();
    // }, function() {
    //     TimerStart();
    // });
    $('.vertical_slider ul li a').focus(function(e) {
        TimerStop();
        enterSliderMode = true;
        console.log(enterSliderMode);
    });
    $('.vslider_menu ul li a').focus(function(e) {
        TimerStop();
        console.log(enterSliderMode);
    });
    $('.vertical_slider ul li a').focusout(function(e) {
        $('.prev').focusin();
    });
    $('.vslider_menu ul li:last a').focusout(function(e) {
        enterSliderMode = false;
        // TimerStart();
        console.log(enterSliderMode);
    });
    //prev function
    function prev() {
        enterSliderMode = true;
        $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: '305px' }, duration_speed, 'swing');
        if (pic_index > 0) {
            pic_index--;
        } else {
            pic_index = $('.vertical_slider ul li').last().index();
        }
        $('.vertical_slider ul li').eq(pic_index).css({
            top: '-305px'
        });
        $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: "0px" }, duration_speed, 'swing');
        // console.log('pic_index=' + pic_index);
        $('.vslider_menu ul li').removeClass('active');
        $('.vslider_menu ul li').eq(pic_index).addClass('active');
        TimerStop();
        setTimeout(TimerStart, autoplay_restart);
        return false;
    }
    //next function
    function next() {
        enterSliderMode = true;
        $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: '-305px' }, duration_speed, 'swing');
        if (pic_index < $('.vertical_slider ul li').length - 1) {
            pic_index++;
        } else {
            pic_index = 0;
        }
        $('.vertical_slider ul li').eq(pic_index).css({
            top: '305px'
        });
        $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: "0px" }, duration_speed, 'swing');
        // console.log('pic_index=' + pic_index);
        $('.vslider_menu ul li').removeClass('active');
        $('.vslider_menu ul li').eq(pic_index).addClass('active');
        TimerStop();
        setTimeout(TimerStart, autoplay_restart);
        return false;
    }
    //menu function
    $('.vslider_menu ul li').off().on('click', function(e) {
        if (pic_index != $(this).index()) {
            $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: "-305px" }, duration_speed, 'swing');
            console.log('pic_index=' + pic_index);
            pic_index = $(this).index();
            $('.vslider_menu ul li').removeClass('active');
            $(this).parent('li').addClass('active');
            // 把準備進場的圖片就定位
            $('.vertical_slider ul li').eq(pic_index).css({
                top: '305px'
            });
            // 圖片滑進來
            $('.vertical_slider ul li').eq(pic_index).stop(true, false).animate({ top: 0 }, duration_speed, 'swing');
            TimerStop();
            setTimeout(TimerStart, autoplay_restart);
            e.preventDefault();
        }
    });
    $('.prev').click(prev);
    $('.next').click(next);
    // 進入slider後使用鍵盤
    $('body').keydown(function(e) {
        if (enterSliderMode) {
            console.log(enterSliderMode);
            if (e.keyCode == 37 || e.keyCode == 38) {
                prev();
            } else if (e.keyCode == 39 || e.keyCode == 40) {
                next();
            } else if (e.keyCode == 27) {
                $('.vslider_menu ul li:first a').focus();
            }
        }
    });
})