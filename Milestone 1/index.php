<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,500;1,700&display=swap" rel="stylesheet"> 
</head>
<body>
<?php require __DIR__ . '/database.php'; ?>
    <header>
        <div class="logo_header">
            <img src="img/Spotify_logo_without_text.svg" alt="">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="select_menu">
                <div>
                    <select @change="$emit('searchDone', selectValue)" v-model="selectValue" name="" id="">
                        <option value="">All</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                    </select>
                </div>
            </div>
            <div class="discs">
                <?php foreach($cards as $card) { ?>
                    <a href="" class="card">
                        <div class="music_image">
                            <img <?php echo "src=\"" . $card['poster'] . "\"";?> alt="">
                        </div>
                        <h2><?php echo $card['title']; ?></h2>
                        <div class="info">
                            <span><?php echo $card['author']; ?></span>
                            <span><?php echo $card['year']; ?></span>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>