<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel_slide</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta16/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta16/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta16/dist/css/tabler-flags.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta16/dist/css/tabler-payments.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta16/dist/css/tabler-vendors.min.css">
    @livewireStyles
</head>

<body class="antialiased">
    <div class="page-body">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Carrousel System
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <livewire:filter-carousel>
        </div>
        <div class="container-xl mt-3">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Carousel</h3>
                        </div>
                        <div class="card-body">
                            <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide1.jpg">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" alt="" src="imgs/slide2.jpg">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide3.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Carousel with indicators</h3>
                        </div>
                        <div class="card-body">
                            <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0"
                                        class=""></button>
                                    <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1"
                                        class="active" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2"
                                        class=""></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide1.jpg">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" alt="" src="imgs/slide2.jpg">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide3.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Carousel with controls</h3>
                        </div>
                        <div class="card-body">
                            <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide1.jpg">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="imgs/slide2.jpg">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" alt="" src="imgs/slide3.jpg">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-controls" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-controls" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
