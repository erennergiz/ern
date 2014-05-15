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
            href="index.php?sayfa=hizmetler-implantlar">Diş Beyazlatma</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim"><img src="_uploads/photos/hizmetler/disbeyazlatma-sirindent.jpg" alt="" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
            <div class="sol_blog_text">Diş Beyazlatma</div>
            
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
                <h1>Diş Beyazlatma<h1><br />
            </div>
            
<p>
	Dişlerdeki renk bozukluğunu giderme işlemidir. Beyaz dişlerle yapılan bir gülüş çok ilgi çekicidir ve &nbsp;sizin&nbsp; daha estetik görünmenizi sağlar.Doğal dişleriniz küçültülüp, porselen kuron yaptırmaya gerek kalmadan beyazlatılabilir.</p><br />
<p>
	<strong>Beyazlatma Öncesi Muayene;&nbsp;Beyazlatma tedavisinden önce diğer dişlerde bulunan sorunlar çözülmelidir.Dişlerde çürük,kırık dolgular,dişeti çekilmesi,dişeti iltihabı,diş taşları ve dişlerde aşınmaları bulunan kişiler gerekli tedavi sonrası beyazlatma yaptırmalıdır.</p><br /><br /><br />
<p style=" font-weight:bold;">Dişlerde Renk Bozukluğunun Nedenleri</p><br />
<p >
	-Diş fırçalama eksikliği dişteki bakteri plakları, diş taşları</p><br />
<p >
	-Dişleri boyayan yiyecek ve içecekler( çay ,kahve ,kırmızı şarap,domates salçası…v.s)</p><br />
<p >
	-Sigara Kullanımı</p><br />
<p >
	-Dişe travma gelmesi</p><br />
<p >
	-Genetik faktörler</p><br />
<p >
	-Çocukluk döneminde kullanılan tetrasiklin türevi antibiyotikler</p><br />
<p >
	-Aşırı fluorid kullanımı</p><br />
<p >
	-Önceki amalgam dolgu renkleşmeleri</p><br />
<p >
	-Kanal tedavisi görmüş dişler</p><br />
<p >
	-Yaşlılık nedeniyle oluşan renkleşmeler</p><br />
<p >
	-Bazı diş dokusu hastalıkları</p><br /><br />
<p style=" font-weight:bold;">Dişlerin İç Yüzeyini Beyazlatma:</p><p>Dişlerde iç ve dış lekeler olmak üzere iki tip leke vardır içsel lekelerde diş içine jel uygulanır ve belirli periyotlarla değiştirilir.İstenen beyazlığa erişince işleme son verilir.Diş içi beyazlatmalardan sonuç alınamayan durumlarda dişe kompozit dolgu yada porselen kuron(kaplama) yapılabilir.</p><br />
<p style=" font-weight:bold;">Dişlerin Dış Yüzeyini Beyazlatma:</p><p>Beyazlatma ya diş hekimi tarafından ofiste ya da kişi tarafından evde uygulanabilir.</p><br />
<p style=" font-weight:bold;">Evde Diş Beyazlatma(Home Bleaching):</p><p>Diş hekimi tarafından çenenin ölçüsü alınarak kişiye özel şeffaf ve tüm dişleri kaplayan bir plak hazırlanır.Bu plak beyazlatıcı jel ile doldurulur. Diş hekiminizin önerdiği biçimde, kullanılan jele göre günde birkaç saat ya da sadece gece boyunca ve en fazla 2 hafta şeklinde kullanılır.Plak içinden taşan fazla jel, ıslak bir pamuk ile dişetleri üzerinden silinmelidir. Gereğinden fazla süre&nbsp; uygulanmamalıdır.</p><br />
<p style=" font-weight:bold;">Ofiste Diş Beyazlatma(Office Bleaching);</p><p>Diş etleriniz jel benzeri bir madde ile kapatılır.Dudaklar, ağız çevresi ve yanaklar için koruyucu önlemler alınır.Dişlerinize beyazlatıcı jel sürülerek 30 dk ya da 1 saat süren özel bir ışık verilir.Işıkla bu jel aktive edilir.Dişlerinizde ev tipinde tekrar tekrar uygulamaya rağmen ofis tipinde tek seferde sonuç alınır.Daha kısa sürelidir.</p><br /><br />
<p style=" font-weight:bold;">Diş Beyazlatmanın Sonrası</p><br />
<p>
	Beyazlatma sırasında diş mineleri çok hafif de olsa incelebilir. Fakat yapılan araştırmalar beyazlatma yöntemlerinin hem güvenli hem de etkili olduğunu ve dişlere yan etkisi olmadığını göstermiştir.</p><br />
<p>
	-Bütün beyazlatma jellerinde beyazlatma sırasında ya da sonrasında sıcak soğuk hassasiyeti olabilir.Bu normaldir,daha sonra azalır ve tamamen kaybolur.Bu hassasiyeti gideren özel jeller de hekiminiz tarafından işlem öncesi ya da sonrasında uygulanabilir.Sıcak ve soğuk yiyeceklerden bir süre uzak durulmalıdır.</p><br />
<p>
	-Tekrar renkleşmeye sebep olmamak için ilk 2 hafta içinde sigara ,çay ,kahve,kola ,kırmızı şarap ve meyve suyu gibi renklendirici içeceklerden uzak durmak gerekir.</p><br />
<p>
	-Beyazlatma etki süresi ortalama bir yıldır. Fakat bu süre hastanın ağız bakımı ile yemek alışkanlıkları ile yakından ilişkilidir. Aşırı çay,kahve,sigara tüketen bireylerde bu süre daha az olacaktır.</p><br /><br />
<p style=" font-weight:bold;">Diş Beyazlatmanın Tavsiye Edilmediği Durumlar</p><br />
<p>
	-Hamile ve emziren kadınlar.</p><br />
<p>
	-Ciddi bir hastalık tedavisi gören (bağışıklık sistemi hastalıkları,Aids..vs)</p><br />
<p>
	-PUVA (Psoralen +UV Işını)veya diğer foto kemoterapi tedavileri uygulanan hassas bireyler.</p><br />
<p>
	-Dişeti hastalıkları,çatlamış dişler ve minesi aşınmış dişleri olan bireyler.</p><br />
<p>
	-Çocuklarda pulpa odası geniş olduğu için beyazlatma önerilmez diş röntgenleriyle tespit edilip tercihen 16-18 yaş ve sonrası yapılmalıdır.</p><br />
<p>
	-Ortodontik tedavi görenler tedaviden sonra beyazlatmalıdır.</p><br />
<p>
	-Yapısından kaynaklanan yaygın ve gri dişleri olan kişilerde istenen sonuç alınamayabilir.</p><br />
<p>
	-Tüm ağzında porselen dişleri olanlar porselenler beyazlamayacağı için önerilmez .</p><br />


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


