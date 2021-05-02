<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="<?= css('index') ?>">
        
        <script src="<?= js('jquery-3.6.0.min') ?>"></script>
        
        <title>Google Maps Latitude&Longitude</title>
    </head>
    <body>
        <main>
            <div class='wrapper'>
                <div class="col1">
                <div class="col1-row1">
                        <div class="col1-row1-row1"><?php require_once(container('Search')) ?></div>
                        <div class="col1-row1-row2"><?php require_once(container('Table')) ?></div>
                    </div>
                    <div class="col1-row2"><?php require_once(container('DropDown')) ?></div>
                </div>
                <div class="col2"><?php require_once(container('Map')) ?></div>
            </div>
        </main> 
        <footer>2021 &#169; CEYHUN BAHADIR ÇELİK</footer>
    </body>
</html>