<head>

<style type="text/css">
<!--
/** 
 * Slideshow style rules.
 */
#slideshow {
	margin:0 auto;
	width:1000px;
	height:160px;	
	position:relative;
}
#slideshow #slidesContainer {
  margin:0 auto;
  width:880px;
  height:160px;
  overflow:auto; /* allow scrollbar */
  position:relative;
}
#slideshow #slidesContainer .slide {
  margin:0 auto;
  width:230px; /* reduce by 20 pixels of #slidesContainer to avoid horizontal scroll */
  height:160px;
}

/** 
 * Slideshow controls style rules.
 */
.control {
  display:block;
  width:39px;
  height:171px;
  text-indent:-10000px;
  position:absolute;
  cursor: pointer;
}
#leftControl {
  top:0;
  left:0;
  background: url(_images/control_left.png) no-repeat 0 0;
}
#rightControl {
  top:0;
  right:0;
  background: url(_images/control_right.png) no-repeat 0 0;
}

/** 
 * Style rules for Demo page
 */
* {
  margin:0;
  padding:0;
}


.slide p {
text-align:justify; font-family:"Myriad Pro"; font-size:12px; color: #000; margin-right:10px;
}
.slide h2 {
	font-size:14px;
	font-family:Verdana, Geneva, sans-serif;
    color:#1F1F1F;
	text-align:left;
	margin-bottom:10px;
	margin-top:20px;
}
.slide img {
  float:left;
  margin-right:7px;
  margin-top:20px;
}
-->
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
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
      'float' : 'left',
      'width' : slideWidth
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl"=Clicking moves left</span>')
    .append('<span class="control" id="rightControl"=Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});
</script>
</head>


<div class="mainwrapper">
<div class="ic_link"><a href="index.php?sayfa=anasayfa">Anasayfa</a> / <a href="anasayfa.php">Sıkça sorulan sorular</a> / <a href="anasayfa.php">Zirkon Diş Nedir?</a></div>
<div id="koli">

<div class="sol_blog">
            <div class="sol_blog_resim"><img src="_images/content/index/zirkonyum.jpg" alt="" width="195" height="200"/></div>
            <div class="sol_blog_resim_cerceve"></div>
            <div class="sol_blog_text">Zirkon Diş Nedir?</div>
            
<div class="blog_sosyal">
<ul><li class="face"><a href="http://www.facebook.com/"></a></li><li class="twit"><a href="http://www.twitter.com/"></a></li><li class="google"><a href="http://www.google.com/"></a></li></ul></div>
</div>

<div class="sag_blog"><div class="sag_blog_baslik"><h1>Zirkon Diş Nedir?</h1></div>
Porselen kuron ve köprülerde metal altyapı yerine beyaz renkli zirkonyum alaşımı kullanılan protezlerdir. Zirkonyum 1960’lı yıllardan beri tıpta çeşitli amaçlarla kullanılmış ve bugüne kadar herhangi bir yan etkisi veya zararının olmadığı, alerji yapmadığı saptanmıştır. Zirkonyum yüksek ısılara, darbelere dayanıklı, hafif, ısı ve elektrik iletmeyen, ışık geçirebilen bir elementtir. Ayrıca ağız hijyenine önem verildiği takdirde ağızda tat bozukluğuna, diş eti hastalıkları ve ağız kokusuna yol açmayan sağlıklı bir materyaldir. Modern diş hekimliğinde ulaşılan yüksek kaliteye sahip bir malzemedir. Zirkonyumlar Cad Cam teknolojisine sahip bilgisayar destekli cihazlarla yapılabilirler. Hasta ağzından alınan ölçüler bilgisayar ortamında optik okuyucularda taranır elde edilen veriler bilgisayara yüklenir. Daha sonra tasarımları (CAD) yapılarak üretime (CAM) gidilir. Zirkonyum levhalardan, el değmeden freze sistemleri sayesinde, bilgisayar tarafından kesilip şekillendirilir.
</div>

</div>
</div>


<div id="main">
<div class="mainwrapper_fo">
<div>
<!-- Slideshow HTML -->
  <div id="slideshow">
    <div id="slidesContainer">
      <div class="slide">
       <a href="index.php?sayfa=sorular-detay"><img src="_images/content/index/zirkon-dis2.jpg" width="118" height="103" /></a>
        <h2>Zirkon Diş Nedir?</h2>
        <p>Porselen kuron ve köprülerde metal altyapı yerine beyaz renkli zirkonyum alaşımı kullanılan protezlerdir. Zirkonyum 1960’lı yıllardan beri tıpta çeşitli amaçlarla kullanılmış ve bugüne kadar herhangi bir yan etkisi veya zararının olmadığı...<a href="index.php?sayfa=sorular-detay" class="devam">devam</a></p>
      </div>
     
    </div>
  </div>
  <!-- Slideshow HTML -->
</div>
</div>

<div class="main">
<div class="adres">
<div class="adres_sayfaayrac"><div class="adres_hizmetlerimiz_text">İstasyon Caddesi No:21 Daire:3 (Şekerbank üstü) Yeşilköy/Bakırköy/İstanbul</div></div>
<div class="tel_hizmetlerimiz_text">0 212 573 59 88<div class="tel_sayfaayrac"></div></div>
</div>
</div>
