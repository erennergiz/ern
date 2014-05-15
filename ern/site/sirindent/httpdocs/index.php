<?php


if (isset($_GET["sayfa"]) && file_exists($_GET["sayfa"] . ".php")) {

    $sayfa=$_GET["sayfa"];

} else {
    $sayfa="anasayfa";

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Diş Hekimi Şirin ABACI, en uygun zirkonyum diş, implant</title>
    <meta name="robots" content="index, follow" />
<meta name="Keywords" content="zirkonyum diş,zirkonyum,zirkonyum diş fiyatları, zirkonyum porselen diş, porselen diş, zirkonyum diş 2014 fiyatı,porselen kaplama diş,estetik diş kaplama,estetik diş" />
<meta name="title" content="Zirkonyum Diş|Zirkonyum Porselen Diş Kaplama Fiyatları 2014" />
<meta name="Description" content="Zirkonyum diş ve porselen kaplama diş fiyati,2014 zirkonyum diş fiyatları,zirkonyum diş yaptıracakların bilmesi gerekenler,İstanbul " />
<meta name="ROBOTS" content="index,follow" />
<meta name="ROBOTS" content="ALL" />

    <link href="_css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="scripts/script.js"></script>

</head>
<body>
<div class="bar">
    <div class="mainwrapper">
    </div>
</div>

<div class="header">
    <div class="mainwrapper">
        <div class="logo"><a href="index.php?sayfa=anasayfa"><img src="_images/logo.png" width="264" height="218"
                                                      alt="Şirin Dent : Diş Hekimi Şirin ABACI"/></a>

            <p>Şirin Dent : Diş Hekimi Şirin ABACI</p></div>
        <!--logo-->
        <div class="ust_bilgi">
            <div class="telno">0 212 573 59 88</div>
            <a href="index.php?sayfa=iletisim">
                <div class="fiyat">FİYAT BİLGİSİ İÇİN TIKLAYINIZ</div>
            </a>
        </div>
        <div class="nav_sosyal">
            <nav>
                <ul>
                    <li <?php if($sayfa=="anasayfa"){ echo('class="aktif"');}; ?> ><a href="index.php?sayfa=anasayfa">Ana Sayfa</a></li>
                    <li <?php if($sayfa=="hakkimizda"){ echo('class="aktif"');}; ?>><a href="index.php?sayfa=hakkimizda">Hakkımızda</a></li>
                    <li <?php if($sayfa=="hizmetlerimiz"){ echo('class="aktif"');}; ?>><a href="index.php?sayfa=hizmetlerimiz">Hizmetlerimiz</a></li> 
                   	<li <?php if($sayfa=="galeri"){ echo('class="aktif"');}; ?>><a href="index.php?sayfa=galeri">Kliniğimiz</a></li>
                    <li <?php if($sayfa=="iletisim"){ echo('class="aktif"');}; ?>><a href="index.php?sayfa=iletisim">İletişim</a></li>
                </ul>
            </nav>
            <div class="sosyal">
                <ul>
                    <li class="google"><a href="http://www.google.com/"></a></li>
                    <li class="twit"><a href="http://www.twitter.com/"></a></li>
                    <li class="face"><a href="http://www.facebook.com/"></a></li>
                </ul>
            </div>

        </div>
        <!--mainwrapper-->
        <div class="clear"></div>
    </div>

</div>
<!---header div sonu-->
<?php

    include_once($sayfa.".php");

?>

<div class="footer_alt">
    <div class="footer_link">
        <ul class="footer_link">
            <a href="index.php?sayfa=anasayfa" class="footer_link">
                <li>Anasayfa</li>
            </a>
            <li>|</li>
            <a href="index.php?sayfa=hakkimizda" class="footer_link">
                <li>Hakkımızda</li>
            </a>
            <li>|</li>
            <a href="index.php?sayfa=hizmetlerimiz" class="footer_link">
                <li>Hizmetlerimiz</li>
            </a>
            <li>|</li>
            <a href="index.php?sayfa=galeri" class="footer_link">
                <li>Kliniğimiz</li>
            </a>
            <li>|</li>
            <a href="index.php?sayfa=iletisim" class="footer_link">
                <li>İletişim</li>
            </a>
        </ul>
    </div>
    <div class="footer_sosyal">
        <ul>
            <li class="face"><a href="http://www.facebook.com/"></a></li>
            <li class="twit"><a href="http://www.twitter.com/"></a></li>
            <li class="google"><a href="http://www.google.com/"></a></li>
        </ul>
    </div>
    <div class="uyari">Site içerisinde bulunan bilgiler bilgilendirmek içindir, bu bilgilendirme kesinlikle hekimin
        hastasını tıbbi amaçla muayene etmesi veya tanı koyması yerine geçmez.
    </div>
</div>

</div>
<div class="mainwrapper_o">
    <div class="tanim">Şirin ABACI - sirindent © 2014 . Tüm Hakkı Saklıdır.</div>
</div>
</body>

</body>
</html>
