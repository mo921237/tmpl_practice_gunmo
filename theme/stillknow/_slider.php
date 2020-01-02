<?php
/**
 * 메인페이지 슬라이더
 * 이미지, 유튜브동영상 삽입 가능 - 모바일에서는 대체 이미지로 출력됩니다.
 *
 */
if (!defined('_GNUBOARD_')) {
    exit;
}
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_CSS_URL . '/slider.css">', 0);
add_javascript("<script src='" . G5_THEME_URL . "/plugin/velocity/velocity.min.js'></script>");
?>
<!-- #########################################################################################################
        Main Slider
############################################################################################################## -->
<section id='slider' class="slider <?php echo $theme_config['ask_sub_theme_name'] ?>" data-slideout-ignore>
    <!-- Swiper -->
    <div class="swiper-container slider-inner slider-default">
        <div class="swiper-wrapper">

            <!-- 슬라이더 1 -->
            <div class="swiper-slide" data-swiper-autoplay="4000" style='background-image:url(<?php echo G5_THEME_URL . "/img/bg-ss.jpg" ?>);' data-stellar-background-ratio="0.5">
                <div class="container goods-container">
                    <div class='slider-layer-wrap'>
                        <div class='head-text'>
                            <h2><span>상상투자클럽</span>배너</h2>
                        </div>
                        <div class="goods-img">
                            <img src="<?php echo G5_THEME_URL . "/img/goods.png" ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(function(){
                $.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 40
                });
            });
            </script>

            <!-- 슬라이더 1 -->
            <div class="swiper-slide" data-swiper-autoplay="4000" style='background-image:url(<?php echo G5_THEME_URL . "/img/slider6.jpg" ?>);'>
                <div class="container">
                    <div class='slider-catpion'>
                        <h2 class="ani-text bigtext">CREATIVE<br/>INVESTMENT</h2>
                        <p class="ani-text-subtext">
                            성공적인 투자수익 얻는 방법.<br/>
                            100% 수익이 검증된 상상투자클럽 입니다.
                        </p>
                        <a href="#webpage-links" class="slide-more-btn ani-text-subtext delay-2">More Information</a>
                    </div>
                </div>
            </div>
            <!-- 유튜브 비디오 슬라이더, 모바일에서는 대체이미지로 출력됩니다. -->
            <div class="swiper-slide" data-swiper-autoplay="10000" id='bgPlayer1'>
                <div class="container">
                    <div class='slider-catpion youtube'>
                        <h2 class="ani-text">YOUTUBE PLAY</h2>
                        <p class="ani-text-subtext">
                            유튜브 백그라운드 플레이
                        </p>
                        <a href="#webpage-links" class="slide-more-btn ani-text-subtext delay-2">More Information</a>
                    </div>
                </div>
                <!-- 플레이어 설정 videoURL : 유튜브 주소-->
                <!-- 소리출력 아래 옵션(data-property)중 mute:false 로 하면 출력하지 않음, 출력하고싶다면 false -->
                <?php
                    /*
                        컨트롤 버튼 예제
                        <button onclick="jQuery('#bgPlayer').YTPPlay()">play</button>
                        <button onclick="jQuery('#bgPlayer').YTPPause()">pause</button>
                        <button onclick="jQuery('#bgPlayer').YTPStop()">stop</button>
                        <button onclick="jQuery('#bgPlayer').YTPSetVolume(20)">change volume</button>
                        <button onclick="jQuery('#bgPlayer').YTPMute()">mute</button>
                        <button onclick="jQuery('#bgPlayer').YTPUnmute()">unmute</button>

                    */
                ?>
                <div id="bgPlayer" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=bLoO0FSXncg',vol:'90',stopMovieOnBlur:false,containment:'#bgPlayer1',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,quality:'highres',optimizeDisplay:true}"></div>
            </div>
            <!-- 슬라이더 2 -->
            <div class="swiper-slide" data-swiper-autoplay="4000" style='background-image:url(<?php echo G5_THEME_URL . "/img/slider2.jpg" ?>);'>
                <div class="container">
                    <div class='slider-catpion'>
                        <h2 class="ani-text bigtext">FIRST<br/> BEST</h2>
                        <p class="ani-text-subtext">
                            직장인 전용 상품 출시
                        </p>
                        <a href="#webpage-links" class="slide-more-btn ani-text-subtext delay-2">More Information</a>
                    </div>
                </div>
            </div>
            <!-- 슬라이더 3 -->
            <div class="swiper-slide" data-swiper-autoplay="4000" style='background-image:url(<?php echo G5_THEME_URL . "/img/slider3.jpg" ?>);'>
                <div class="container">
                    <div class='slider-catpion black-font'>
                        <h2 class="ani-text bigtext">SAFETY</h2>
                        <p class="ani-text-subtext">
                            안정적인 수익
                        </p>
                        <a href="#webpage-links" class="slide-more-btn ani-text-subtext delay-2">More Information</a>
                    </div>
                </div>
            </div>
            <!-- 슬라이더 4 -->
            <div class="swiper-slide" data-swiper-autoplay="4000" style='background-image:url(<?php echo G5_THEME_URL . "/img/slider7.jpg" ?>);'>
                <div class="container">
                    <!-- 텍스트 검은색은 black-font class 설정 -->
                    <div class='slider-catpion black-font'>
                        <h2 class="ani-text bigtext">INNOVATION</h2>
                        <p class="ani-text-subtext">
                            투자성공의 지름길 상상투자클럽
                        </p>
                        <a href="#webpage-links" class="slide-more-btn ani-text-subtext delay-2">More Information</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next">

        </div>
        <div class="swiper-button-prev">

        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        jQuery("#bgPlayer").YTPlayer();

        ///메인슬라이더 설정
        var swiper_default = new Swiper('.slider-default', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            paginationClickable: true,
            effect: 'slide', //fade, slide, flip, coverflow
            flipEffect: {
                rotate: 30,
                slideShadows: false
            },
            speed: 1000,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false
            }
        });
        /*
         * 마우스 오버시 자동플레이 멈춤
        $(".slider-default").hover(function () {
            swiper_default.autoplay.stop();
        }, function () {
            swiper_default.autoplay.start();
        });
         *
         */
        var nowHeight = $(window).height();

        //슬라이더 텍스트 애니메이션
        $('.swiper-slide-active .ani-text').addClass('fade-in-up animate');
        $('.swiper-slide-active .ani-text-subtext').addClass('fade-in-up animate-subtext');
        swiper_default.on('slideChangeTransitionStart', function () {
            $('.swiper-slide:not(.swiper-slide-active) .ani-text').removeClass('fade-in-up animate').addClass('animate-stop');
            $('.swiper-slide:not(.swiper-slide-active) .ani-text-subtext').removeClass('fade-in-up animate-subtext').addClass('animate-stop');
            $('.swiper-slide-active .ani-text').removeClass('animate-stop').addClass('fade-in-up animate');
            $('.swiper-slide-active .ani-text-subtext').removeClass('animate-stop').addClass('fade-in-up animate-subtext');
        });
        swiper_default.on('touchEnd', function () {
            $('.swiper-slide:not(.swiper-slide-active) .ani-text').removeClass('fade-in-up animate').addClass('animate-stop');
            $('.swiper-slide:not(.swiper-slide-active) .ani-text-subtext').removeClass('fade-in-up animate-subtext').addClass('animate-stop');
            $('.swiper-slide-active .ani-text').removeClass('animate-stop').addClass('fade-in-up animate');
            $('.swiper-slide-active .ani-text-subtext').removeClass('animate-stop').addClass('fade-in-up animate-subtext');
        });
    });
</script>
