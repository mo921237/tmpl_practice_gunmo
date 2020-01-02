<?php
/**
 * 회사소개
 * ASIDE 사용 예제
 * 왼쪽 블럭은 head_aside.php 파일을 변경하세요.
 */
include_once "./_common.php";
$g5['title'] = "CEO인사말";
$g5['ask_title_desc'] = 'CEO Greeting';
//메뉴용 상수
define('AT_MENU_NAME', '회사소개');
define('_INDEX_SUBPAGE_', false); //ASIDE 사용여부 true면 사이드메뉴를 사용하지 않음. header_aside.php, tail_aside.php 사용여부를 결정
$theme_config['use_aside'] = true; //true로 하면 페이지별 설정입니다. theme.config.php 설정보다 우선 적용하게 할 수 있습니다. theme.config.php 는 전역 설정입니다. 게시판등 그누보드 기본기능에 모두 적용시 theme.config.php 에서 true로 설정하세요.
include_once(G5_THEME_PATH . '/head.php');
add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_CSS_URL . '/at_introduce_aside.css">', 1);
?>
<div class="intro-wrap <?php echo ($theme_config['use_aside'] == false) ? "container" : ""; ?>" id='intro-wrap'>
    <div class='intro-text-wrap'>
        <div class="alert alert-info mt-5">
            왼쪽 사이드메뉴가 있는 일반페이지 샘플입니다.<br/>
            theme.config.php <br/>
            $theme_config['use_aside'] = true; 로 설정해야 aside 템플릿으로 사용가능합니다.
        </div>
        <div class="row intro-text" id='intro-text'>
            <div class="col-sm-12 col-md-4 text1">
                <h3 class='header-text'>The world's most powerful GNUBOARD website theme</h3>
            </div>
            <div class="col-sm-12 col-md-4 text2">
                <div class='row no-gutters'>
                    <div class='col-3'>
                        <h3 class='header-number'>01</h3>
                    </div>
                    <div class='col-9'>
                        <h4>Paradigm</h4>
                        <p>
                            독창적인 아이디어, 디지털 기술, 빅데이터 역량을 활용
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 text3">
                <div class='row no-gutters'>
                    <div class='col-3'>
                        <h3 class='header-number'>02</h3>
                    </div>
                    <div class='col-9'>
                        <h4>Service</h4>
                        <p>
                            고객 여러분께서 쉽게 체감하실 수 있는 실용적인 상품과 서비스
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//.intro-text-wrap -->

    <div class='ceo-wrap'>
        <div class='row ceo-contents'>
            <div class='col-sm-12 col-md-12 col-lg-4 ceo-block'>
                <div class="ceo-con">
                    <div class="ceo-text">
                        <h3 class="title-text">안녕하세요 상상투자클럽 CEO 박효근 입니다.</h3>
                        <p>
                            언제나 변함없이 상상투자클럽을 아껴 주신 고객 및 주주 여러분께 감사드립니다.
                            그동안 상상투자클럽의 모든 생각과 사업의 중심은 고객 여러분이었습니다.
                            앞으로도 고객 여러분의 목소리에 늘 귀 기울이면서 차별적 서비스로 한차원 더 도약하기 위해 새롭게 시작하겠습니다.
                            앞으로도 기존의 패러다임을 혁신하고 게임의 룰을 바꾸는 새로운 도전을 계속하여 더 넓은 시장에서 사랑과 신뢰를 받고, 더 많은 고객에게 행복한 경험을 제공하기 위해 노력하겠습니다.
                            독창적인 아이디어, 디지털 기술, 빅데이터 역량을 활용하여 새로운 영역을 개척하겠습니다.감사합니다.
                        </p>
                        <div class="ceo-sign">상상투자클럽 CEO 박효근</div>
                    </div>
                </div>
            </div>
            <div class='col-sm-12 col-md-6 col-lg-4 ceo-block delay-_2'>
                <div class="ceo-pic">
                    <img src="<?php echo G5_THEME_URL ?>/img/ceo-1.jpg">
                </div>
            </div>
            <div class='col-sm-12 col-md-6 col-lg-4 ceo-block delay-_4'>
                <div class="ceo-pic">
                    <img src="<?php echo G5_THEME_URL ?>/img/ceo-2.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class='ceo-bottom-wrap container-fluid' id='ceo-bottom-wrap'>
    <div class='row ceo-bottom-contents align-items-center'>
        <div class='col-sm-12 col-md-6 cover-background bg-about'>
            <!-- 왼쪽 배경이미지 -->
        </div>
        <div class='col-sm-12 col-md-6 ceo-bottom-right'>
            <div class="right-text">
                <div class='row'>
                    <div class='col-md-3'>
                        <h3 class='header-number'>01</h3>
                    </div>
                    <div class='col-md-9'>
                        <h4>서비스의 품격과 가치를 높이겠습니다</h4>
                        <p>
                            고객 여러분께서 쉽게 체감하실 수 있는 실용적인 상품과 서비스를 만들겠습니다.<br/>
                            작고 사소한 것이라도 지속적으로 혁신하여, 고객 여러분께 꼭 필요한 서비스를 의미 있는 가치로 제공하겠습니다.
                        </p>
                    </div>

                    <div class='col-md-3'>
                        <h3 class='header-number'>02</h3>
                    </div>
                    <div class='col-md-9'>
                        <h4>상생과 나눔의 경영을 실천하겠습니다</h4>
                        <p>
                            사회공헌활동에 더욱 힘쓰고, 열린나눔 플랫폼을 통해 여러분과 함께 나눔의 문화를 만들어 가겠습니다.<br/>
                            ASKTHEME의 도전과 실천을 통해 더 편리하고 더 행복한 내일을 향해 경주하겠습니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="company-stats" class="container company-stats">
    <div class="row">
        <div class="col-6 col-sm-6  col-md-3 text-center about-items delay-_2">
            <i class="fa fa-users fa-4x" aria-hidden="true"></i>
            <p>
                314,000<br/>
                MEMBERS
            </p>
        </div>
        <div class="col-6 col-sm-6  col-md-3 text-center about-items delay-_4">
            <i class="fa fa-shopping-basket fa-4x" aria-hidden="true"></i>
            <p>
                2500<br/>
                CHAIN STORES
            </p>
        </div>
        <div class="col-6 col-sm-6  col-md-3 text-center about-items delay-_6">
            <i class="fa fa-ship fa-4x" aria-hidden="true"></i>
            <p>
                13<br/>
                OVERSEAS BRANCHES
            </p>
        </div>
        <div class="col-6 col-sm-6  col-md-3 text-center about-items delay-_8">
            <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
            <p>
                1<br/>
                WORLD'S NO.1
            </p>
        </div>
    </div>
</section>

<section id="p-scroll about-company" class="about-company container-fluid">
    <div class="row">
        <div class='cover-pattern col-sm-12 about-company-parallax' data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-md-8 col-lg-6">
                        <div class="section-header">
                            <h2>About Company</h2>
                            <p>
                                회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.
                                우리는 아이디어 중심적이고 디자인과 사용자 경험에 중점을두고 일하고 있습니다. 
                                우리의 프로젝트는 소비자를 끌어 들이고, 사람들이 좋아하고 사용하기를 좋아하는 멋진 디지털 제품을 만들고 있습니다.
                                멋진 제품으로 고객들과 함께 하겠습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container about-card" id="about-card">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-items delay-_2">

                            <img class="card-img-top img-fluid" src="<?php echo G5_THEME_IMG_URL ?>/about_card_01.jpg" alt="About Company">
                            <div class="card-body">
                                <h4 class="card-title">혁신</h4>
                                <p class="card-text">회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다. 회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다. 회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-items delay-_5">

                            <img class="card-img-top img-fluid" src="<?php echo G5_THEME_IMG_URL ?>/about_card_02.jpg" alt="About Company">

                            <div class="card-body">
                                <h4 class="card-title">시스템</h4>
                                <p class="card-text">회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card card-items delay-_8">

                            <img class="card-img-top img-fluid" src="<?php echo G5_THEME_IMG_URL ?>/about_card_03.jpg" alt="About Company">

                            <div class="card-body">
                                <h4 class="card-title">경험</h4>
                                <p class="card-text">회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.회사소개 텍스트를 입력하세요. 이 텍스트는 Dummy Text 입니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--//.container-->
        </div>

    </div>
</section>
<script type="text/javascript">
    $(function () {
        var autoHeightTarget = $('.about-card .card');
        $(autoHeightTarget).matchHeight();
        var controller_introduce = new ScrollMagic.Controller();

        //addIndicators
        var scene = new ScrollMagic.Scene({
            reverse: false, triggerHook: 0.5
        }).setClassToggle(".text1, .text2, .text3", "fadeInLeft visible").addTo(controller_introduce);

        var scene2 = new ScrollMagic.Scene({
            reverse: false, triggerHook: 0.5
        }).setClassToggle(".ceo-block", "fadeInRight visible").addTo(controller_introduce);

        var scene_icon_text = new ScrollMagic.Scene({
            reverse: false, triggerHook: 'onEnter', triggerElement: '#company-stats'
        }).setClassToggle(".about-items", "fadeInLeft visible").addTo(controller_introduce);

        var scene3 = new ScrollMagic.Scene({
            reverse: false, triggerHook: 'onEnter', triggerElement: '#ceo-bottom-wrap'
        }).setClassToggle(".ceo-bottom-wrap", "fadeIn visible").addTo(controller_introduce)

        var scene4 = new ScrollMagic.Scene({
            reverse: false, triggerHook: 'onEnter', triggerElement: '#ceo-bottom-wrap'
        }).setClassToggle(".ceo-bottom-contents", "fadeInUp_1 visible").addTo(controller_introduce)

        var scene5 = new ScrollMagic.Scene({
            reverse: false, triggerHook: 'onEnter', triggerElement: '#about-card'
        }).setClassToggle(".card-items", "fadeInUp_1 visible").addTo(controller_introduce);

        scene5.on("start", function () {
            setTimeout(function () {
                $(autoHeightTarget).matchHeight();
            }, 2100);
        });
    });
</script>


<?php
include_once(G5_THEME_PATH . '/tail.php');

