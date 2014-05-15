<?php

class Upload extends Controller
{

    public function __construct()
    {
        set_time_limit(0);

    }

    public function ResimYukle($thumbnail = false)
    {
        $klasor = SITE_UPLOAD . "/images";
        $dosya_isim_sayi = count($_FILES['dosya']['name']);
        $say = 0;
        for ($i = 0; $i < $dosya_isim_sayi; $i++) {
            if (!empty($_FILES['dosya']['name'][$i])) {
                move_uploaded_file($_FILES['dosya']['tmp_name'][$i], $klasor . "/" . $_FILES['dosya']['name'][$i]);
                if ($thumbnail) {
                    $this->ThumbnailYap($klasor . "/" . $_FILES['dosya']['name'][$i], 150, 150, $klasor . "/thumbnails/" . $_FILES['dosya']['name'][$i]);
                }
                $url = $_FILES['dosya']['name'][$i];
                $name = $_FILES['dosya']['name'][$i];
                $alt = "Resim açıklaması";
                $this->load->model("Upload");

                // $uploadimage = mysql_query("insert into gallery_images(url,imgalt,description,name,galleryID,status) values('$url','$alt','0','$name','$getID',1) ");
                $say++;
            }
        }
        return $say;
    }

    public function ThumbnailYap($imgname, $width, $height, $thumbnail_name)
    {

        $kaynak = imagecreatefromjpeg($imgname);

        $gercek_en = imagesx($kaynak);
        $gercek_boy = imagesy($kaynak);

        $imaj_hedef = imagecreatetruecolor($width, $height);

        imagecopyresampled($imaj_hedef, $kaynak, 0, 0, 0, 0, $width, $height, $gercek_en, $gercek_boy);

        imagejpeg($imaj_hedef, $thumbnail_name);


    }
}