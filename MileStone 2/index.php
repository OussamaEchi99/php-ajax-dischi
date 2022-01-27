<!-- Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà,
attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
<?php require __DIR__ . '/database.php'; ?>
    <header>
        <div class="logo_header">
            <img src="img/Spotify_logo_without_text.svg" alt="">
        </div>
    </header>
    <main>
        <div id="root" class="container">
            <div class="select_menu">
                <div>
                    <select>
                        <option value="">All</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                    </select>
                </div>
            </div>
            <div class="discs">
                    <a v-for="(card, index) in cards" :key="index" href="" class="card">
                        <div class="music_image">
                            <img :src="card.poster" :alt="card.title">
                        </div>
                        <h2>{{ card.title }}</h2>
                        <div class="info">
                            <span>{{ card.author }}</span>
                            <span>{{ card.year }}</span>
                        </div>
                    </a>
            </div>
        </div>
    </main>
    
    <script src="js/script.js"></script>
</body>
</html>