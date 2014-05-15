<?php
/*
?>
<?php echo("<script type='text/javascript'> alert('Geldi')</script>"); ?>
    public function ResimYukle()
    {
        if ($_POST) {
            foreach ($_FILES['resim']['tmp_name'] as $key => $tmpName) {
                $this->img_name = $_FILES["resim"]["name"][$key];

                if (move_uploaded_file($tmpName, "uploads/img/" . $this->img_name)) {
                    $this->Thumbnail("uploads/img/" . $this->img_name, 150, 150, "uploads/thumbnail/" . $this->img_name);
                    return true;
                }
            }
        }
    }
    public function Thumbnail($imgname, $width, $height, $thumbnail_name)
    {
        $kaynak = imagecreatefromjpeg($imgname);
        $gercek_en = imagesx($kaynak);
        $gercek_boy = imagesy($kaynak);
        $imaj_hedef = imagecreatetruecolor($width, $height);
        imagecopyresampled($imaj_hedef, $kaynak, 0, 0, 0, 0, $width, $height, $gercek_en, $gercek_boy);
        imagejpeg($imaj_hedef, $thumbnail_name);
    }