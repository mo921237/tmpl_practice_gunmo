	<link rel="stylesheet" href="/assets/css/owl.theme.css"/> 
    <link rel="stylesheet" href="/assets/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/assets/icon-fonts/flaticon/flaticon.css" />
    
        <section class="titlebar">
            <h1 class="page-title"><span>About </span>us</h1>
            <div id="particles-js"></div>
        </section>
        
        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <section class="about">
                <!-- ABOUT TEXT -->
                <div class="about-text text-center top_90">
                    <h2 class="subtitle">
	                    We started from building web sites professionally, but now we've been specialized in IT consulting, Full-Stack Developement,
	                    planning(Project Management, Branding, E-commerce), up-to-date Research and Development(AI, BlockChain) and so forth
	                    after completing various types of IT projects well with continuous offers.
                    </h2><br>
                    <p>
                    	전문 Web Site 제작으로 시작 하였지만, 실력과 창의성을 인정 받아
                    	현재는 IT 컨설팅 부터 FullStack 개발(Web, Application, Back Office), 기획(프로젝트 관리, Branding, E-commerce),
                    	신기술 R&D개발(인공지능, 블록체인) 등 다양한 분야에서 입지를 넓혀 가고 있습니다. 
                    </p>
                </div>
                <!-- WORK AREAS -->
                <div class="owl-carousel work-areas text-center top_120 bottom_90 col-md-10 offset-md-1" data-pagination="true" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1">
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-024-computer-graphic"></i>
                        <h3 class="title" class="title">Development</h3>
                        <div class="line"></div>
                        <p>Core developers and designers start from the scratch.</p>
                    </div>
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-007-stationery"></i>
                        <h3 class="title">IT Consulting</h3>
                        <div class="line"></div>
                        <p>Planing and Calculating input/output.</p>
                    </div>
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-025-graphic-design"></i>
                        <h3 class="title">Lead Technology</h3>
                        <div class="line"></div>
                        <p>Artificial Intelligence, BlockChains.</p>
                    </div>
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-024-computer-graphic"></i>
                        <h3 class="title" class="title">개발</h3>
                        <div class="line"></div>
                        <p>코어 개발자와 디자이너가 시작 부터 함께 합니다.</p>
                    </div>
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-007-stationery"></i>
                        <h3 class="title">IT 컨설팅</h3>
                        <div class="line"></div>
                        <p>필요한 자원과 완성도를 기획 및 예측 합니다.</p>
                    </div>
                    <!-- an area -->
                    <div class="area col-md-12 item">
                        <i class="flaticon-025-graphic-design"></i>
                        <h3 class="title">신기술</h3>
                        <div class="line"></div>
                        <p>R&D개발(인공지능, 블록체인)</p>
                    </div>
                </div>

                <!-- WORK AREAS -->
                <div class="clients">
                    <div class="row">
                        <!-- client -->
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-myomee.png">
                            </figure>
                        </div>
                        <!-- client -->
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/lottemart.gif">
                            </figure>
                        </div>
                        <!-- client -->
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-tru.png">
                            </figure>
                        </div>
                        <!-- client -->
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-sk-encar.jpg">
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-sk-planet.png">
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-ibk.gif">
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-lotte-ellotte.png">
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-6 client">
                            <figure>
                                <img src="/assets/images/clients/client-lotte-lotte.com.gif">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

        </div> <!-- cont end -->
        
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript">
     // OWL CAROUSEL GENERAL JS
        var owlcar = $('.owl-carousel');
        if (owlcar.length) {
            owlcar.each(function () {
                var $owl = $(this);
                var itemsData = $owl.data('items');
                var autoPlayData = $owl.data('autoplay');
                var paginationData = $owl.data('pagination');
                var navigationData = $owl.data('navigation');
                var stopOnHoverData = $owl.data('stop-on-hover');
                var itemsDesktopData = $owl.data('items-desktop');
                var itemsDesktopSmallData = $owl.data('items-desktop-small');
                var itemsTabletData = $owl.data('items-tablet');
                var itemsTabletSmallData = $owl.data('items-tablet-small');
                $owl.owlCarousel({
                    items: itemsData
                    , pagination: paginationData
                    , navigation: navigationData
                    , autoPlay: autoPlayData
                    , stopOnHover: stopOnHoverData
                    , navigationText: ["<", ">"]
                    , itemsCustom: [
                        [0, 1]
                        , [500, itemsTabletSmallData]
                        , [710, itemsTabletData]
                        , [992, itemsDesktopSmallData]
                        , [1199, itemsDesktopData]
                    ]
                , });
            });
        }

        </script>