<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <h1>Display data</h1>
    <p>Tautan aplikasi BE : <?=$be_url['option_value']?></p>
    <p>Menu</p>
    <ul>
    <?php foreach($menus->items as $item):?>
    <li><a href="<?=$item->instance()->link_text;?>"><?=$item->instance()->title;?></a></li>
    <?php endforeach; ?>
    </ul>
    <h1>Post terbaru</h1>
    <?php
    foreach($post as $p):
    ?>
    <h2><a href="<?=base_url('post/'.$p->post_name)?>"><?=$p->post_title?></a></h2>
    <p><img src="<?=$p->thumbnail?>" alt=""></p>
    <p><?=$p->post_content?></p>
    <?php endforeach; ?>
</body>
</html>