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
            href="index.php?sayfa=hizmetler-protezler">Protezler</a></div>
    <div id="koli">

        <div class="sol_blog">
            <div class="sol_blog_resim"><img src="_uploads/photos/hizmetler/protezler-sirindent.jpg" alt="" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
            <div class="sol_blog_text">Protezler</div>
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
                <h1>Protezler<h1>
            </div>
            <p style=" font-weight:bold;">Sabit Protezler</p>
            <p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22px; background-color: rgb(252, 252, 252); text-align: justify;">
	Hastanın kendisinin çıkaramadığı yalnız diş hekimi tarafından çıkarılabilen protezlerdir. Metal alt yapılı kuron ve köprüler, zirkonyum altyapılı implant üstü kuron ve köprüler full porselen kuronlar, full metal kuronlar, maryland köprüler önceden kullanılan fasetli ve biyo dent dişlerde sabit protezlerdir.Diş eksikliklerinde en çok tercih edilen protez tipidir.Bir yada birkaç dişiniz çekildiğinde oluşan boşluğa protez yapılmadığı zaman çekilen diş bölgesinde kemik boyunda ve eninde erimeler başlar.Boşluğun önünde yada arkasında diş varsa bu dişler boşluğa doğru kaymaya ve eğilmeye başlar. Eğilen dişlerde dişeti problemleri meydana gelir. Yan yana duran diğer dişlerde de zamanla aralıklar oluşmaya başlar.Boşluğun karşısındaki diğer çenedeki diş de artık kapanışta temas edeceği diş olmadığından boşluğa doğru uzamaya başlar.Dişler yer değiştirince alt üst çene kapanışı bozularak çene ekleminde, çiğnemede ve yüz kaslarında sorunlar yaşamaya başlar.Dişlerin dudak ve yanak desteklemesinde önemli bir rolü vardır.Diş kaybında bu destekler de kaybolacaktır.Yanak ve dudaklar içeriye doğru çökecektir.</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22px; background-color: rgb(252, 252, 252); text-align: justify;">
	</p>
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<p style=" font-weight:bold;">Hareketli Protezler</p>
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	Hareketli protezler kişinin kaybettiği estetik, fonksiyon(çiğneme) fonasyonu (konuşma)sağlamaya yönelik,ağızda kalan diş ve dokuların devamlılığını ve sağlığını korumak için yapılan apereylerdir.Hareketli protezler istenildiğinde hasta tarafından çıkarılıp,temizlenip takılan protezlerdir</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<font style="font-weight:bold">Tam Protezler(Damak Protezler) </font>: Ağında hiç dişi kalmamış bireylere yapılan protezlerdir.Bu protezler içerisinde kullanılması en zor olandır.Akrilik denen bir metaryalin üstüne yapay dişlerin yerleştirilmesiyle oluşur.Bu dişler akrilik veya porselenden yapılmış dişlerdir.Dişsiz ağızlarda bu tip protez tek çözüm değildir.Bu tip protezi kullanmak istemeyen hastalarda implant destekli protezler de yapılabilmektedir ,</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<font style="font-weight:bold">Bölümlü(Kısmi)Protezler </font>: Ağızda birkaç tane de olsa dişi kalmış hastalara uygulanan protez tipidir.Ağızdaki dişlere gerekli işlemler yapıldıktan sonra dişsiz bölgelerdeki eksiklikler bu protezle tamamlanır.Kroşe(kanca) ve tırnak denilen tutuculuğu arttıran metal destekler kullanılır.Bu proteze alternatif olarak yine implantlar düşünülebilir.</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<font style="font-weight:bold">Hassas Tutuculu Protezler </font>: Bu protezler de bölümlü protezlerdir, Gülümsediğinde metal görünmesini istemeyen hastaların tercih ettiği, estetik görünüm açısından daha iyi protezlerdir.Çıtçıtlı protez de denilmektedir.Birbirinin içine giren kilit sistemi gibi parçalar içerir.Diğer hareketli protezlere göre biraz daha pahalıdır.Böyle bir protez için destek olacak dişlerin sağlamlığı da değerlendirilmelidir.Aksi taktirde bu tip protez yapılamayabilir</p><br /><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<p style="font-weight:bold">Hareketli Protezlerin Bakımı:</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Her yemekten sonra protezler çıkarılıp fırçalanmalıdır.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezler için üretilmiş özel fırçalar ve sabun kullanarak temizleme işlemi yapılmalıdır.Diş macunu ile fırçalanan protezlerde gözle görülmeyen çizikler oluşur.Protez cilasını(kaygan yüzey özelliğini) kaybeder.Bu bölgelere bakteriler tutunarak protezde renkleşmeye ve kötü kokuya neden olur.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Sadece elle su altında protezi yıkayarak protez üzerindeki bakterilerin temizlenmediği kanıtlanmıştır.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protez temizliğinde çamaşır suyu,bulaşık ve çamaşır deterjanı.. v.s temizlik ürünlerini asla kullanmayınız.Bu ürünler protezin yapısını ve rengini bozar ve kişinin genel sağlığı açısından da zararlıdır.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezler için özel üretilen temizleme tabletlerini eczanelerden temin edebilirsiniz.Bu tabletler bir bardak su içerisinde eritilerek içine protez konularak bekletilmektedir.Bu işlem haftada birkaç kez yapılabilir.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Sadece protezi temizlemek yeterli değildir. Ağzınızdaki yumuşak dokuları ve dişleri de yumuşak bir fırçayla temizlemelisiniz.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezinizi çıkardığınızda su dolu bir kap içerisinde saklayınız.</span></p><br /><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<font style="font-weight:bold">Protezinizin günlük temizliğini ihmal ederseniz.</span></font><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	-Rengi değişerek estetik görüntüsü bozulur</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	-Ağzımızda koku,enfeksiyon oluşur.</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	-Protez altındaki birikinti yada tartar sonucu yumuşak dokularda tahriş ve dişetlerinde yararlar meydana gelir.</p><br /><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<p style="font-weight:bold">Protezle İlgili Genel Bilgiler</p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	</p>
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezinizin ömrü ortalama 3 yıldır. Zamanla ağız dokularınız değişeceği için protezlerinizin uyumu da bozulacaktır.Protez bollaşabilir.Çiğneme etkinliği azalabilir.Duruma göre hekiminiz protez içini doldurabilir yada yeniden protez yapabilir.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezlere alıştıktan sonra 6 ayda bir kontrole gidilmelidir. Eğer dokularınızda bir değişiklik anormallik varsa hekimin erkenden önlem alması yada tedavi etmesi yerinde olur.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezler ağızda devamlı kalmamalıdır. Tercihen gece protezler çıkarılıp ağız dokuları dinlendirilmelidir.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Protezlere alışmak zaman ister.Bu alışma süresi 1-2 ay kadardır.Kişi protezini kabul ederek kullanmaya azimli olmalıdır.Sabretmeye çalışmalıdır.Protez takıldıktan sonra ilk 24-48 saat içerisinde mutlaka diş hekimine kontrole gidilmelidir.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Yemeklerinizi daha küçük lokmalar halinde ve çift taraflı çiğnemeye çalışmalısınız.</span></p><br />
<p style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 13px; line-height: 22.75px; background-color: rgb(252, 252, 252);">
	<span>Doğru yapılan bir protezde bile bazı seslerin telaffuzunda sorunlar olabilir. Yüksek sesle kitap,dergi okumak bu alışma sürecini kısaltır.Konuşma normale döner.</span></p>


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


