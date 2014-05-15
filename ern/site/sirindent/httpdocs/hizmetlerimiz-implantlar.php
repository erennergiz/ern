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
            href="index.php?sayfa=hizmetler-implantlar">Implantlar</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim"><img src="_uploads/photos/hizmetler/implantlar-2.jpg" alt="" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
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
            <p>
	Çeşitli nedenlerle çürükler, dişeti hastalıkları veya kaza sebebiyle dişlerimizi kaybedebiliriz.Oluşan boşluğa kemiğin içine son teknoloji ile üretilmiş titanyum implant gövdeleri yerleştirilmektedir.Kişinin kaybettiği fonksiyon ve estetik böylece sağlanmış olur.Bazı implantlar yıllardır yoğun araştırmalara tabi tutulmuş, defalarca denenmiş ve test edilmiştir.Alerjik reaksiyon yapmazlar.Sıkı şekilde kemiğe tutunurlar&nbsp;ve üzerlerine yapılacak protezler için sağlam bir temel oluştururlar.Boşluğun yanındaki doğal dişler zarar görmez.Dişsiz kalan bölgelerde çene kemiğinde hem boydan hem enden erimeler meydana gelir.İmplantın bir avantajı da yerleştirildiği bölgedeki erimeleri engellemesidir.</p><br />
<p style=" font-weight:bold;">
	<strong>Diş İmplantları Kimlere Uygulanabilir?</strong></p><br />
<p>
	1.<strong>Tek Bir Dişini Kaybetmiş Hastalar</strong></p><br />
<p>
	&nbsp;Tek diş eksikliğinde alternatif olarak köprü de yapılabilir.Fakat boşluğun sağ ve solundaki sağlıklı dişler kesilerek küçültülmeli ve 3 üyeli bir köprü yapılması gerekmektedir.Bu yan dişler destek alınarak boşluktaki diş kapatılır.Hem sağlam iki diş boşuna işlem görür hem de eksik dişin olduğu bölgede kemik erimeye başlar.Dolayısıyla üzerindeki dişeti seviyesi de azalacağı için zamanla köprü gövdesi altında boşluk oluşarak kötü bir görüntüye neden olur.İmplant yapıldığı zaman yan dişler zarar görmez ve kemiğinizin genişliği korunmuş olur.</p><br />
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td style="text-align: center; width: 525px;">
				<img alt="" class="cke-resize cke-resize cke-resize cke-resize cke-resize" src="_images/S tooth ANKYLOS a.jpg" style="width: 300px; height: 232px;" /></td>
			<td style="text-align: center; width: 524px;">
				<img alt="" class="cke-resize" src="_images/S tooth ANKYLOS b.jpg" style="height: 232px; width: 300px;" /></td>
		</tr>
	</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td>&nbsp;
				</td>
			<td style="text-align: center;">
				<img alt="" class="cke-resize cke-resize cke-resize" src="_images/S tooth ANKYLOS c.jpg" style="text-align: center; height: 232px; width: 300px;" /></td>
			<td>&nbsp;
				</td>
		</tr>
	</tbody>
</table>
<p>
	<br />
	<strong>2.Birkaç Dişini Kaybetmiş Hastalar</strong></p><br />
<p>
	Yine tek diş eksikliğinde olduğu gibi geleneksel köprü tercih edildiğinde boşluğun sağındaki ve solundaki dişler küçültülecektir. Eğer dişsiz boşluk çenenizin en sonunda ve uzun bir dişsiz sonlanma varsa alternatif olarak bölümlü protez de yapılabilir.Yine boşluk yanındaki dişlere metal kroşe veya hassas tutucu geleceği için bu dişler de küçültülüp kuronlanacak ve kalan boşluklara takıp çıkarılan bir protez yapılacaktır.</p>
<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td style="text-align: center;">
				<img alt="" src="_images/Multi 6 ANKYLOS a.jpg" style="height: 232px; width: 300px;" /></td>
			<td style="text-align: center;">
				<img alt="" class="cke-resize" src="_images/Multi 6 ANKYLOS b.jpg" style="height: 232px; width: 300px;" /></td>
		</tr>
	</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
	<tbody>
		<tr>
			<td>&nbsp;
				</td>
			<td style="text-align: center;">
				<img alt="" class="cke-resize cke-resize" src="_images/Multi 6 ANKYLOS c.jpg" style="height: 232px; width: 300px;" /></td>
			<td>&nbsp;
				</td>
		</tr>
	</tbody>
</table>
<br />
<p style=" font-weight:bold;">3.Üst Çene ya da Alt Çenede Tüm Dişlerini Kaybetmiş ve Protez Taşıyan Hastalar</strong></p><br />
<p>
	İkiden dörde kadar az sayıda yeni diş kökü bir tam protez için sıkı bir destek oluşturmaya yetecektir. Altı adet implant üzerine köprü bağlanabilir Böylece proteziniz beklenmedik bir anda gevşeyerek ağzınızdan çıkamaz.Tam proteziniz iki parçadan oluşan özel tutucu sistemler ile implantlara tutturulmuş olacaktır.Bu parçalardan birisi implant üzerinde ,diğeri de proteziniz üzerinde daimi olarak sabitlenmiş biçimde konumlandırılmıştır.Bu parçalar bir düğme gibi birbirine geçer.Proteziniz sıkı biçimde tutunur.Protezinizi temizlemek için kolayca yerinden çıkarılıp,tekrar aynı kolaylıkla yerine takılabilir.Eğer dilerseniz,proteziniz implantlara kalıcı biçimde de sabitlenebilir.Çeneniz üzerinde en az altı implant üzerine bir köprü daimi olarak sabitlenebilir.Böylece proteziniz öyle sıkı tutunur ki destekleyici pembe protez plastiğine gerek kalmaz.</p><br />
<p style=" font-weight:bold;">&nbsp;4.Kemik Gelişimini Tamamlamış Kişilere</strong></p><br />
<p style=" font-weight:bold;">&nbsp;5.</strong>&nbsp;Dental implantların uygulanabilmesi, için kişinin çene kemik yapısının belli bir genişliğe ve uzunluğa sahip olması gerekir.Bu uygunluk genel sağlık durumunun iyi olmasıyla beraber implantın başarısını arttırır. Kemik yapısının uygun olmadığı durumlarda kemik grefti uygulanarak ve yumuşak dokuya işlem yapılarak implant yerleştirilebilir hale getirilmektedir.</p><br />
<p style=" font-weight:bold;">Diş İmplantları Kimlere Uygulanamaz</strong></p><br />
<p>
	1.Ağızda bulunan dişler sağlıksız ise önce onlar tedavi edilmelidir.</p><br />
<p>
	2.Osteoporoz kemik erimesi olan hastalar</p><br />
<p>
	3. Ağız hijyeni çok bozuk olan hastalar</p><br />
<p>
	4.İlaç veya alkol bağımlılığı olanlar ve aşırı sigara tüketen veya tütün çiğneyen bireylere önerilmez</p><br />
<p>
	5.Yüksek tansiyonu ve şeker hastalığı olanlar iyi değerlendirilmeli ve kontrolsüz olan şeker hastalarına implant asla yapılmamalı, kontrol altındaki şeker hastalarına implant yapılabilmektedir.</p><br />
<p>
	6.Kan hastalıkları,bazı kalp ve damar hastalıkları, kanser , böbrek yetmezliği veya bağışıklık sistemi yetmezliği gibi durumlarda doktoru ile diş hekimi görüşerek karar vermelidir.</p><br />
<p>&nbsp;
	</p>
<p style=" font-weight:bold;">
	<strong>İmplantlar Hakkında Genel Bilgiler</strong></p><br />
<ul>
	<li>
		Çocuklara implant yapılamaz.Kemik gelişimini&nbsp; tamamladıktan sonra yapılabilir.</li>
	<li>
		İleri yaşlarda da implant uygulanabilir. Genel sağlık durumunuz elverişli ise.</li>
	<li>
		Titanyumdan yapılan implantlar hiçbir alerjik bileşen içermez ve vücuda zararı yoktur.</li>
	<li>
		İmplant yerleştirilirken genel anesteziye gerek yoktur.</li>
	<li>
		İmplantlar kalp pilini etkilemez. Elektromanyetik etkisi yoktur.</li>
	<li>
		İmplant destekli dişler konuşurken, çiğnerken ve gülerken oldukça doğal bir his verir.Kendi dişleriniz gibi konuşabilecek,gülebilecek,çiğneyebileceksiniz.</li>
	<li>
		Doğru biçimde yerleştirilmiş kaliteli bir implant pek çok etkene karşı doğal diş kökünden daha dayanıklı olacaktır. Çürüğe karşı dirençlidir.</li>
	<li>
		Sürekli ağız bakımı ve kontroller dişetlerinin ve implant yapılan bölgenin sağlıklı kalmasını sağlayacaktır. Uygun bakım ile implantlarınız ömür boyu dayanabilir.</li>
	<li>
		İmplant destekli dişler doğal dişler gibi diş macunu ve diş fırçası ile fırçalanmalıdır.Dişler arasındaki boşluklar ve dişetine geçiş kısımlarına ek olarak diş arası fırçaları, diş ipleri, günlük ağız gargaraları ile de bakımları yapılmalıdır.</li>
</ul><br />
<p style=" font-weight:bold;">
	<strong>İmplant Nasıl Yapılır ?</strong></p><br />
<p>
	Önce implant yapılacak bölge lokal anesteziyle uyuşturulur. Daha sonra dişetinde bir kesi yapılır ve çenede uygun aletlerle implant için yuva açılır.Açılan yuvaya yine özel aletlerle implant yerleştirilir.Dişetinde açılan kısıma dikiş atılır.</p>

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


