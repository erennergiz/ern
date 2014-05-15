<head>
     <style type="text/css">
        <!--
        /**
         * Slideshow style rules.
         */
        #slideshow {
            margin: 0 auto;
            width: 1000px;
            height: 160px;
            position: relative;
        }

        #slideshow #slidesContainer {
            margin: 0 auto;
            width: 880px;
            height: 160px;
            overflow: auto; /* allow scrollbar */
            position: relative;
        }

        #slideshow #slidesContainer .slide {
            margin: 0 auto;
            width: 230px; /* reduce by 20 pixels of #slidesContainer to avoid horizontal scroll */
            height: 160px;
        }

        /**
         * Slideshow controls style rules.
         */
        .control {
            display: block;
            width: 39px;
            height: 171px;
            text-indent: -10000px;
            position: absolute;
            cursor: pointer;
        }

        #leftControl {
            top: 0;
            left: 0;
            background: transparent url(_images/control_left.png) no-repeat 0 0;
        }

        #rightControl {
            top: 0;
            right: 0;
            background: transparent url(_images/control_right.png) no-repeat 0 0;
        }

        /**
         * Style rules for Demo page
         */
        * {
            margin: 0;
            padding: 0;
        }

        a:hover {
            text-decoration: underline;
        }

        .slide p {
            text-align: justify;
            font-family: "Myriad Pro";
            font-size: 12px;
            color: #000;
            margin-right: 10px;
        }

        .slide h2 {
            font-size: 14px;
            font-family: Verdana, Geneva, sans-serif;
            color: #1F1F1F;
            text-align: left;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .slide img {
            float: left;
            margin-right: 7px;
            margin-top: 20px;
        }

        -->
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var currentPosition = 0;
            var slideWidth = 294;
            var slides = $('.slide');
            var numberOfSlides = slides.length;

            // Remove scrollbar in JS
            $('#slidesContainer').css('overflow', 'hidden');

            // Wrap all .slides with #slideInner div
            slides
                .wrapAll('<div id="slideInner"></div>')
                // Float left to display horizontally, readjust .slides width
                .css({
                    'float': 'left',
                    'width': slideWidth
                });

            // Set #slideInner width equal to total width of all slides
            $('#slideInner').css('width', slideWidth * numberOfSlides);

            // Insert controls in the DOM
            $('#slideshow')
                .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
                .append('<span class="control" id="rightControl">Clicking moves right</span>');

            // Hide left arrow control on first load
            manageControls(currentPosition);

            // Create event listeners for .controls clicks
            $('.control')
                .bind('click', function () {
                    // Determine new position
                    currentPosition = ($(this).attr('id') == 'rightControl') ? currentPosition + 1 : currentPosition - 1;

                    // Hide / show controls
                    manageControls(currentPosition);
                    // Move slideInner using margin-left
                    $('#slideInner').animate({
                        'marginLeft': slideWidth * (-currentPosition)
                    });
                });

            // manageControls: Hides and Shows controls depending on currentPosition
            function manageControls(position) {
                // Hide left arrow if position is first slide
                if (position == 0) {
                    $('#leftControl').hide()
                } else {
                    $('#leftControl').show()
                }
                // Hide right arrow if position is last slide
                if (position == numberOfSlides - 1) {
                    $('#rightControl').hide()
                } else {
                    $('#rightControl').show()
                }
            }
        });
    </script>
</head>


<div class="mainwrapper">
    <div class="ic_link"><a href="anasayfa.php">Anasayfa</a> / <a href="index.php?sayfa=hizmetler">Hizmetlerimiz</a> / <a
            href="anasayfa.php">Implantlar</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim">
                <div class="sol_blog_resim_cerceve"></div>
            </div>
            <div class="sol_blog_text">Implantlar</div>
            <div class="blog_sosyal">
                <ul>
                    <li class="face"><a href="http://www.facebook.com/"></a></li>
                    <li class="twit"><a href="http://www.twitter.com/"></a></li>
                    <li class="google"><a href="http://www.google.com/"></a></li>
                </ul>
            </div>
        </div>

        <div class="sag_blog">
            <div class="sag_blog_baslik">
                <h1>Implantlar<h1>
            </div>
            
        </div>

    </div>
</div>


<div id="footer_index">
    <div id="footer_index2">

        <div>

        </div>

        <div>
            <!-- Slideshow HTML -->
            <div id="slideshow">
                <div id="slidesContainer">
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/implantlar.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı ...<a href="#" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/zirkondis.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı ...<a href="#" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/yaprakdis.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı bilgiye ...<a href="#" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/cadcam.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı bilgiye ...<a href="#" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/dis_beyazlatma.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı bilgiye ...<a href="#" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="#"><img src="_uploads/photos/hizmetler/pedodonti.jpg" alt="" width="118" height="103"/></a>

                        <h2>İstanbul da En Uygun Zirkon Diş Yapımı</h2>

                        <p>İstanbul Bakırköy de hizmet vermekte olan sirindent diş kliniğimiz, zirkon diş yapımında
                            kullanılan son teknolojik cihazlarla çalışarak, hastalarına kaliteli hızlı ve ekonomik bir
                            tedavi
                            sunmaktadır. Fiyat bilgisi için detaylı bilgiye ...<a href="#" class="devam">devam</a></p>
                    </div>
                </div>
            </div>
            <!-- Slideshow HTML -->
        </div>
    </div>

    <div class="adres">
        <div class="adres_sayfaayrac">
            <div class="adres_hizmetlerimiz_text">İstasyon Caddesi No:21 Daire:3 (Şekerbank üstü)
                Yeşilköy/Bakırköy/İstanbul
            </div>
        </div>
        <div class="tel_hizmetlerimiz_text">0 212 573 59 88
            <div class="tel_sayfaayrac"></div>
        </div>
    </div>
</div>


