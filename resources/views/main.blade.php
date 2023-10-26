<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand py-4">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    <div class="nav navbar-nav justify-content-between align-items-center">
                        @foreach ($links as $link)
                        <a class="nav-item nav-link border_nav" href="#" aria-current="page">{{ $link }}</a>
                        @endforeach
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="crop">

        </div>
        <div class="bg_dark">
            <div class="container">
                <span class="current">CURRENT SERIES</span>
                <div class="row">
                    <div v-for="product in products" class="col-2">
                        <div class="p-2">
                            <div class="card_header" :style="{ 'background-image': 'url(' + product.thumb + ')' }"
                                style="background-position: top; background-size: cover; background-repeat: no-repeat;">

                            </div>
                            <div class=" text-white py-2">
                                <div class="upper">{{ product.series }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>

</html>