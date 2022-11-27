<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME.'-'.$postdata->post_title?></title>
</head>
<body>
    <h1><?= $postdata->post_title?></h1>
    <p><?= $postdata->post_content?></p>
</body>
</html>