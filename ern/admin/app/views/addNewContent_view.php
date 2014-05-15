<div id="main">

<div class="full_w">
    <div class="h_title">Yeni İçerik Ekle</div>
    
    <?php
    if(isset($formErrors)){
    ?>
        <div style="color : red; text-size : 16px; border:1px solid red; padding:7px; margin:5px;">
        <?php
            foreach ($formErrors as $key => $value) {
                switch($key){
                    case 'title':
                        foreach ($value as $val) {
                            echo "BAŞLIK: " . $val . "<br />";
                        }
                        break;
                    case 'content':
                        foreach ($value as $val) {
                            echo "İÇERİK: " . $val . "<br />";
                        }
                        break;
                    default:
                        break;
                }
            }
        ?>
        </div>
    <?php } ?>
    
    <form action="<?php echo SITE_URL; ?>addnewcontentrun" method="post">
        <div class="element">
                <label for="title">Başlık (gerekli)</label>
                <input id="name" name="title" />
        </div>
        <div class="element">
                <label for="content">İçerik (gerekli)</label>
                <textarea name="content" class="textarea" rows="10"></textarea>
        </div>
        <div class="entry">
                <button type="submit" class="add">Ekle</button>
        </div>
    </form>
</div>
</div>