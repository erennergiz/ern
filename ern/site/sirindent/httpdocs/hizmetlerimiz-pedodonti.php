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
            href="index.php?sayfa=hizmetler-implantlar">Pedodonti</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim"><img src="_uploads/photos/hizmetler/pedotonti-sirindent.jpg" alt="" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
            <div class="sol_blog_text">Pedodonti</div>
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
                <h1>Pedodonti<h1>
            </div>
            <p>
	0-14 yaş grubundaki çocukların süt ve kalıcı dişlerini tedavi etmeyi amaçlayan bilim dalıdır.</p><br />
<p style=" font-weight:bold;">Süt Dişleri :</p><p>Bebek &nbsp;6 aylıkken süt dişleri sürmeye başlar.Bazen bir kaç ay erken ya da geç sürebilir.Normal bir durumdur ve endişelenmeye gerek yoktur.Süt dişlerinin sürmesi 2,5-3 yaşına kadar devam eder ve toplam 20 adet diş ağızda yerini alır.İlk kalıcı dişleri ise 6 yaşında sürmeye başlar.Süt dişlerinin tamamen değişip kalıcı dişlerin yerleşmesi 12-14 yaşları arasındadır.Bebeklerde diş sürmesi sırasında huzursuzluk,ağrı, tükürük akışı artışı, iştahsızlık ve her şeyi ısırmaya çalışması gibi belirtiler görülebilir.Bu rahatsızlıkları azaltmak için diş kaşıyıcılar,doktorunun önereceği diş jelleri ve ağrı kesiciler verilebilmektedir.</p><br />
<p style=" font-weight:bold;">Biberon Çürüğü:</p><p> Bebek beslenmesinde kullanılan mamalar ve anne sütü şeker içermektedir. Süte şeker ve bal eklenerek çocuğa içirilip akşam yatırılırsa, gece boyunca ağızda kalan şeker dişlerde çürümelere neden olur. Emzik bala, reçele batırılırsa ve gece biberonla çocuğunuzu uyutursanız yine çürükler oluşacaktır.Bebeğinizi besledikten sonra, dişlerini bir tülbentle temizleyip su içiriniz.Biberonla beslenme en fazla 2 yaşına kadar devam edebilir.Parmak emme ve emzik kullanma gibi alışkanlıklara 2-2,5 yaşına kadar izin verilebilir.Parmak emme alışkanlığı devam ederse sebebi araştırılarak 3-6 yaş arasında mutlaka giderilmelidir.</p><br />
<p style=" font-weight:bold;">Çocuklar Ne Zaman Dişlerini Fırçalamaya Başlamalıdır:</p><p>Bebek 6-8 aylıkken ilk süt dişleri ağızda göründüğünde,dişleri temiz bir tülbent ya da gazlı bez ıslatılarak silinebilir..Çocukların fırça tutma yeteneklerinin henüz gelişmediği dönemlerde (2 yaşından itibaren) çocuk diş macunları ve fırçaları kullanılarak dişleri ebeveynler&nbsp; tarafından temizlenebilir.Okul öncesi çocuklarda önemli olan diş fırçalama alışkanlığı kazandırmaya çalışmaktır.Bu dönemde etkili ve yeterli fırçalayamazlar.&nbsp;Bu yüzden ebeveynler dişlerin tüm yüzeylerini fırçaladığını kontrol etmelidirler.Süt dişlerinin değişeceği düşünülerek ihmal edilmemelidir. Yetişkin dişlerinin düzgün yapıda olabilmesi için süt dişlerinin çok iyi fırçalanması,en ufak çürükte bile diş hekimine kontrole gidilmesi gerekmektedir.Süt dişindeki çürük daha sonra apseye neden olur.Altında oluşan sürekli diş tohumuna zarar vererek renk ve yapı bozukluğuna neden olur.Hiçbir problem olmasa bile, 6-7 yaşlarında diş hekimine gösterilerek olası iskeletsel bir kapanış bozukluğu erken dönemde tespit edilmiş olur.Tedavi edilmeyen süt dişleri zamanından önce kaybedileceğinden,kalıcı dişlerin dönük çapraşık,sıkışmış bir şekilde ağızda yer almasına neden olur.</p><br />
<p style=" font-weight:bold;">Çocuklarda Diş Koruyucu Yöntemler</p><br />
<p style=" font-weight:bold;">Fissür Örtücüler:</p><p>&nbsp;Hiçbir aşındırma yapmadan arka dişler üzerinde bulunan oluklara uygulanan akışkan kıvamında kompozit dolgu maddeleridir. Diş minesine yapışarak olukları sıkı bir şekilde kapatır. Füssür örtücüler dişlerin fırçalanmasını kolaylaştıran yüzey oluşturarak, yiyecek artıkları ve bakterilerin yapışmasını engelleyerek çürük oluşumuna engel olur.</p><br />
<p style=" font-weight:bold;">Flörür Uygulaması:</p><p> Flor bir elementtir. Diş macunlarının içinde de bulunmaktadır. Diş yüzeylerine yüzeysel olarak uygulanmasıyla, çürüğe dirençli bir diş oluşturduğu bilimsel olarak kanıtlanmıştır. Flörür uygulaması çocuklardan başka sağlıklı bireylere, dişlerinde hassasiyet ve erozyon olan bireylere, bakıma ihtiyacı olduğu için ağız bakımının yeterince sağlanamadığı bireylere, çürüğe yatkın kişilere de&nbsp; uygulanabilir. Uygulama sıklığı kişinin yaş ve ağız sağlığı durumuna göre diş hekimi tarafından ayarlanır.Sistemik flörür uygulamasında ise hamilelere ,bebeklere ve sürekli diş oluşumunun çene içerisinde devam ettiği süre boyunca çocuklara fluor tabletleri verilmektedir.Fakat son zamanlarda yapılan çalışma sonuçlarına göre bu tabletlerin diş çürümesini önlemede o kadar da &nbsp;etkili olmadıkları belirtilmiştir.Dişler sürdükten sonra diş yüzeylerine fluor uygulanmasının en etkili yöntem olduğu bilinmektedir.</p><br />
<p style=" font-weight:bold;">Fluor Uygulaması:</p><br />
<p>1-Hekim tarafından ofiste diş yüzeylerine jel,vernik veya patlar şeklinde uygulanabilir.</p><br />
<p>
	2-Birey evde kendisi florürlü diş macunları ağız gargaraları kullanabilir.3 yaş altı çocuklarda çocuk diş macunları kullanılmalı ve yutmaya karşı ebeveyn kontrolünde olmalıdır.6 yaş öncesi yine yutma refleksi tam olarak gelişmediği için, ağız gargaraları çocuklara önerilmez.</p><br />
<p style=" font-weight:bold;">Çocuk Dişlerinde Yapılabilecek Uygulamalar Kısaca</p><br />
<p>
	-Florür uygulaması</p><br />
<p>
	-Fissür örtücü uygulaması</p><br />
<p>
	-Dolgu</p><br />
<p>
	-Kanal Tedavisi</p><br />
<p>
	-Diş çekimi ve sonrasında yer tutucular</p><br />
<p>
	-Paslanmaz çelik kuronlar</p><br />
<p style=" font-weight:bold;">Çocuklarda Diş Gıcırdatma</p>
<p>
	Süt dişlerinin düşüp kalıcı dişlerin sürmeye başladığı dönemde (karışık dişlenme dönemi) çocuklar dişlerini gıcırdatabilmektedir. Başka hiçbir neden yoksa bu dönem sonunda gıcırdatma,dişlerini sıkma sona erebilir.Birtakım psikolojik problemler, aile içi sorunlar,yeni kardeş kıskançlığı,okul ile ilgili problemler,uykusuzluk,gerginlik de&nbsp; diş sıkma ve gıcırdatma nedeni olabilir.Dişlerde kapanış bozuklukları ,yüksek bir dolgu da gıcırdatmayı başlatabilir.Sistemik problemlere örnek olarak sinüzitten dolayı burun akıntısı olanlar ,hormonal problemi olanlar, alerjik sorunlular ve bağırsak paraziti olanlar verilebilir.Bağırsaktan gelen uyarılar beyinde sindirim faaliyetini başlatır.Mide asidi artar ,Tükürük akış ve çene kaslarında kasılmalar artar ve çocuk dişlerini sıkar.Diş hekiminin uyguladığı tedavi sonuç vermezse, çocuk doktoruna yönlendirilerek sistemik bir problemi var mı diye araştırılmalıdır.</p>


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


