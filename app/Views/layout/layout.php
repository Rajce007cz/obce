<!Doctype html>
<html>
    <head>
        <title>Bobce</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->include("layout/assets");?>
    </head>
    <body>
        <?= $this->include("layout/navbar");?>
        <div class="container">
            <?=$this->renderSection("content");?>
        </div>
    </body>
</html>