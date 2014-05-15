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
            text-decoration: none;
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
    <div class="ic_link"><a href="index.php?sayfa=anasayfa">Anasayfa</a> / <a href="index.php?sayfa=hizmetlerimiz">Hizmetlerimiz</a> / <a
            href="index.php?sayfa=hizmetler-implantlar">Ortodonti</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim"><img src="_uploads/photos/hizmetler/ortodonti-bakirkoy.jpg" alt="ortodonti-bakirkoy" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
            <div class="sol_blog_text">Ortodonti</div>
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
                <h1>Ortodonti<h1>
            </div>
            <p>
	Çapraşık diş ve uyumsuz çene ilişkilerini birtakım apareylerle düzenleyen diş hekimliği branşıdır.Tel tedavisi olarak bilinir.Sadece çocuk dişleri değil yetişkinlere de uygulanabilmektedir.Çapraşık dişler ne kadar iyi fırçalansa da tam anlamıyla temizlenmeleri zordur.Dolayısı ile çürük ve dişeti hastalıklarına yakalanma riski düzgün sıralı dişlere göre daha yüksektir.Ayrıca kişinin diş kapanışının bozuk olması ,ısırma ve çiğneme fonksiyonunu da etkiler.çene kaslarında fazla baskı, çene ekleminde de ağrılara,baş ağrılarına,sırt ve omuzda da ağrıya neden olabilir.Estetik açıdan değerlendirdiğimizde çapraşık dişler istenmeyen bir görüntüye sebep olduğundan kişinin psikolojisini de olumsuz etkilemektedir.Gelişimsel ve doğumsal problemli kişilerde yüzün görüntüsü bu durumdan olumsuz etkilenir.Bazen dişlerini tam olarak kapatamayıp ısırmada ,çiğnemede ve solunumda problemler yaşarlar.</p><br />
<p>
	Ortodontik tedavi sabit yada hareketli olabilir.En çok uygulanan sabit yöntem dişlere braket ve teller takılması ve lastik kullanılması ile yapılır.Dişlere yavaş yavaş kuvvet uygulanarak dişlerin düzgün ve uygun pozisyona gelmeleri sağlanır. Bu braketlerin metal ve estetik (şeffaf) olanları bulunmaktadır.</p><br />
<p style=" font-weight:bold;">Yer Tutucu:</p><p>Süt dişleri erken dönemde çekilirse altından kalıcı diş çıkana kadar yer tutucu denilen sabit bir aparey takılır.Duruma göre hareketli yer tutucular da yapılmaktadır..</p><br />
<p style=" font-weight:bold;">Lingual Ortodonti:</p><p>Dişlerin iç yüzeyine braketler yerleştirilip teller takılmaktadır. Böylece dış görüntünüzde herhangi bir değişiklik olmaz. Fakat bu uygulamaya avantaj ve dezavantajlarını değerlendirerek,&nbsp; doktorunuz karar verecektir.</p><br />
<p style=" font-weight:bold;">Alignerlar:</p><p>Son yıllarda geliştirilen ,bilgisayarla dizayn edilen şeffaf damaklıklar kullanılarak yapılan tedavidir.Yemek yemek diş fırçalamak diş ipi kullanmak için çıkarılır.</p><br />
<p>
	Bunlar dışında vakaya göre çene genişleticiler, dudak ve yanağın diş arasına girmesini engelleyen aygıtlar splinitler, parmak emme alışkanlığını önleyici aygıtlar da kullanılmaktadır. Tedavi sona erdikten sonra, dişlerin yeni halini korumak, eski hale dönmesini engellemek için kullanılan hareketli pekiştirici ve pasif bir apareydir. Çocukların 6-7 yaşlarında ortodonti uzmanı tarafından kontrol edilmesi gerekmektedir. Bu yaşlarda ileride ortaya çıkabilecek sorunlar görülerek erken teşhis edilmiş olur.Bazı iskeletsel sorunlar ilerlemeden bu yaşlarda damak genişliğini arttırmak veya öne fazla gelişen çenenin ilerlemesini yavaşlatmak gerekebilir.Yetişkinlere de ortodontik tedavi uygulanabilir.Dişsel bozuklukla beraber iskeletsel bozukluklar da varsa ortognatik cerrahi uygulanabilmektedir. Ortodontik tedaviye başlayanların kullandıkları braketler diş fırçalamayı güçleştirir. Tedavi görenlerin diş temizliğine dikkat etmeleri gerekir. Aksi halde dişlerinde çürükler diş eti problemleri oluşabilir.Diş fırçanız yumuşak sertlikte olmalı.Braket araları için çeşitli firmaların ürettikleri arayüz fırçaları ile diş ipi de kulanılmalıdır.Teller takıldıktan ilk 1 hafta 10 gün içerisinde diş ve dişetlerinde sızlama tarzı ağrılar,dişlerin kapanış veya temasında rahatsızlık hissi yanaklarımızda ufak beyaz yaralar görülebilir.Bu alışma süresi geçicidir.Diş bakımına gösterilen özen sonucunda tedavi sonrası çiğneme fonksiyonları düzelerek güzel ve sağlıklı dişlere kavuşan bireyler daha mutlu olmakta ve kendilerine olan güvenleri artmaktadır.</p><br />


        </div>

    </div>
</div>


<div id="footer_index">
    <div id="footer_index2">

        <div>

        </div>

        <div><div class="mainwrapper_fo">
            <!-- Slideshow HTML -->
            <div id="slideshow">
                <div id="slidesContainer">
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-implantlar"><img src="_uploads/photos/hizmetler/implantlar.jpg" alt="" width="118" height="103"/></a>

                        <h2>Implantlar</h2>

                        <p>Çeşitli nedenlerle çürükler, dişeti hastalıkları veya kaza sebebiyle dişlerimizi kaybedebiliriz.Oluşan boşluğa kemiğin içine son teknoloji ile üretilmiş titanyum implant gövdeleri yerleştirilmektedir. Kişinin kaybettiği fonksiyon ve estetik böylece sağlanmış olur...<a href="index.php?sayfa=hizmetlerimiz-implantlar" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-zirkondis"><img src="_uploads/photos/hizmetler/zirkondis.jpg" alt="" width="118" height="103"/></a>

                        <h2>Zirkon Diş</h2>

                <p>Porselen kuron ve köprülerde metal altyapı yerine beyaz renkli zirkonyum alaşımı kullanılan protezlerdir. Zirkonyum 1960’lı yıllardan beri tıpta çeşitli amaçlarla kullanılmış ve bugüne kadar herhangi bir yan etkisi veya zararının olmadığı, alerji yapmadığı...<a href="index.php?sayfa=hizmetlerimiz-zirkondis" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-yaprakdis"><img src="_uploads/photos/hizmetler/yaprakdis.jpg" alt="" width="118" height="103"/></a>

                        <h2>Yaprak Diş</h2>

                <p>Gülümsediğinizde ön dişlerdeki bir takım bozukluklar estetik açıdan sizi rahatsız ediyorsa, rahatlıkla tercih edebileceğiniz bir tedavi yöntemidir. Size doğal bir güzellik kazandıran,sağlam ve renkleri bozulmayan laminalardır. Dişlerin sadece ön yüzeyinden çok..<a href="index.php?sayfa=hizmetlerimiz-yaprakdis" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-cadcam"><img src="_uploads/photos/hizmetler/cadcam.jpg" alt="" width="118" height="103"/></a>

                        <h2>CAD CAM</h2>

                <p>CAD (computer aided design) bilgisayar destekli dizayn,CAM (computer aided manifacturing) bilgisayar destekli üretim demektir. Bu sistemin diş hekimliğine uygulanmış hali,dişlerin üç boyutlu olarak bilgisayarda planlanması ve yine bilgisayar tarafından...<a href="index.php?sayfa=hizmetlerimiz-cadcam" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-disbeyazlatma"><img src="_uploads/photos/hizmetler/dis_beyazlatma.jpg" alt="" width="118" height="103"/></a>

                        <h2>Diş Beyazlatma</h2>

                <p>Dişlerdeki renk bozukluğunu giderme işlemidir. Beyaz dişlerle yapılan bir gülüş çok ilgi çekicidir ve  sizin  daha estetik görünmenizi sağlar.Doğal dişleriniz küçültülüp, porselen kuron yaptırmaya gerek kalmadan beyazlatılabilir...<a href="index.php?sayfa=hizmetlerimiz-disbeyazlatma" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-pedodonti"><img src="_uploads/photos/hizmetler/pedodonti.jpg" alt="" width="118" height="103"/></a>

                        <h2>Pedodonti</h2>

                <p>0-14 yaş grubundaki çocukların süt ve kalıcı dişlerini tedavi etmeyi amaçlayan bilim dalıdır.<br />Süt Dişleri : Bebek  6 aylıkken süt dişleri sürmeye başlar.Bazen bir kaç ay erken ya da geç sürebilir. Normal bir durumdur ve endişelenmeye...<a href="index.php?sayfa=hizmetlerimiz-pedodonti" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-kanaltedavisi"><img src="_uploads/photos/hizmetler/kanal_tedavisi.jpg" alt="" width="118" height="103"/></a>

                        <h2>Kanal Tedavisi</h2>

                <p>İlerleyen diş çürüğünün dişin canlı dokusuna (pulpaya) inmesi sonucu bu dokunun çıkarılması işlemidir.Bu doku çıkarıldıktan sonra oluşan boşluk temizlenir, şekillendirilir, kurutulur ve doldurulur. Bu işlemler klasik el eğeleri ile yapılabildiği..<a href="index.php?sayfa=hizmetlerimiz-kanaltedavisi" class="devam">devam</a>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-periodontoloji"><img src="_uploads/photos/hizmetler/zirkondis.jpg" alt="" width="118" height="103"/></a>

                        <h2>Periodontoloji</h2>

                <p>Dişi çevreleyen destek dokuların (diş eti kemik, sement, periondental, membran)hastalıklarının teşhis ve tedavi yöntemlerini inceleyen bilim dalıdır.Sağlıklı diş etleri açık pembe renginde,portakal kabuğu görünümünde...<a href="index.php?sayfa=hizmetlerimiz-periodontoloji" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-dolgu"><img src="_uploads/photos/hizmetler/dolgu.jpg" alt="" width="118" height="103"/></a>

                        <h2>Dolgu</h2>

                <p>Dişlerin eksik kısımlarını birtakım malzemeler ile tamamlamaktır.Dişlerdeki bu eksiklikler çürük veya kırık nedeni ile olaşabilir.Dolgunun faydası bakterilerin girebileceği boşlukları kapatarak çürüğün ilerlemesini engellemektir.Diş çürükleri..<a href="index.php?sayfa=hizmetlerimiz-dolgu" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-discekimi"><img src="_uploads/photos/hizmetler/cadcam.jpg" alt="" width="118" height="103"/></a>

                        <h2>Diş Çekimi</h2>

                <p>Diş çekimi modern diş hekimliğinde  tercih edilen en son tedavi şeklidir .Bazen hastanın sağlığının korunması veya tedavi planlaması nedeniyle dişler çekilmektedir. Hangi Dişler Çekilir:
 Travmaya uğramış ve kökü de kırılmış dişler....<a href="index.php?sayfa=hizmetlerimiz-discekimi" class="devam">devam</a>
                </p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-protezler"><img src="_uploads/photos/hizmetler/dis_beyazlatma.jpg" alt="" width="118" height="103"/></a>

                        <h2>Protezler</h2>

                        <p>Hastanın kendisinin çıkaramadığı yalnız diş hekimi tarafından çıkarılabilen protezlerdir. Metal alt yapılı kuron ve köprüler, zirkonyum altyapılı implant üstü kuron ve köprüler full porselen kuronlar, full metal kuronlar, maryland köprüler...<a href="index.php?sayfa=hizmetlerimiz-protezler" class="devam">devam</a></p>
                    </div>
                    <div class="slide">
                        <a href="index.php?sayfa=hizmetlerimiz-ortodonti"><img src="_uploads/photos/hizmetler/ortodonti.jpg" alt="" width="118" height="103"/></a>

                        <h2>Ortodonti</h2>

                        <p>Çapraşık diş ve uyumsuz çene ilişkilerini birtakım apareylerle düzenleyen diş hekimliği branşıdır.Tel tedavisi olarak bilinir.Sadece çocuk dişleri değil yetişkinlere de uygulanabilmektedir. Çapraşık dişler...<a href="index.php?sayfa=hizmetlerimiz-ortodonti" class="devam">devam</a></p>
                    </div>
                </div>
            </div>
            <!-- Slideshow HTML -->
        </div></div>
    </div>
<div class="main">
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
</div>


