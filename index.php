<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - DISCHI JSON</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- LINK FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="spotify-dark text-light">

    <!-- // SECTION HEADER // -->
    <header>
        <div class="container d-flex align-items-center">
            <i class="fa-brands fa-spotify"></i>
        </div>
    </head>
    <!-- // SECTION HEADER // -->

    <!-- // SECTION PLAYLIST // -->
    <div id="app" class="p-3">
        <div v-if="discoCorrente">
            <!-- // SECTION DISCO BONUS // -->
            <div id="dettagli-disco" class="d-flex justify-center align-items-center flex-column margin">
                <img :src="discoCorrente.poster" class="disco mb-4">
                <h4>{{ discoCorrente.title }}</h4>
                <h6>{{ discoCorrente.author }}</h6>
                <h5>{{ discoCorrente.year }}</h5>
            </div>
            <!-- // SECTION DISCO BONUS // -->
        </div>
        
        
        <div v-else>
            <!-- // SECTION LISTA DISCHI // -->
            <ul class="list-albums d-flex flex-wrap gap-2 text-center">
                <li v-for="(disco, index) in dischi" class="album" @click="showDisco(index)">
                    <img :src="disco.poster" class="img-fluid">
                    <h4 class="mt-2"> {{ disco.title }}</h4>
                    <h6> {{ disco.author }}</h6>
                    <h5> {{ disco.year }}</h5>
                </li>
            </ul>
            <!-- // SECTION LISTA DISCHI // -->
        </div>
        <!-- // SECTION PLAYLIST // -->
    </div>

<!-- LINK VUE.JS -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- LINK AXIOS  -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- LINK JAVASCRIPT -->
<script src="js/main.js"></script>
<!-- LINK JAVASCRIPT - BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>