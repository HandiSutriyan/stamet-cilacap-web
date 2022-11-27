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
    <h1>Post terbaru</h1>
    <?php
    foreach($post as $p):
    ?>
    <h2><?=$p->post_title?></h2>
    <p><?=$p->post_content?></p>
    <?php endforeach; ?>
</body>
</html>