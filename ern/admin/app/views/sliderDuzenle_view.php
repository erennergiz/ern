<?php
if (isset($upload)) {
    echo($upload);
    echo("<script type='text/javascript'> alert('Geldi')</script>");
}

?>
<div style="background: #000000;padding: 5px;">

    <form action="<?php echo SITE_URL; ?>/Upload/ResimYukle/true" method="post" enctype="multipart/form-data">

        <input type="file" name="dosya[]" id="dosya[]" multiple="multiple"/><br>
        <input type="submit" value="Yükle"/>
    </form>
</div>
