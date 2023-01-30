<div>
    <div class="form-selectgroup flex items-center justify-between text-xl">
        <label class="form-selectgroup-item">
            <input :filter="$filter" type="radio" name="icons" value="carousel" id="fiter_carousel"
                class="form-selectgroup-input" value="carousel">
            <span class="form-selectgroup-label">
                <!-- Download SVG icon from http://tabler-icons.io/i/square -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="16" height="16" rx="2">
                    </rect>
                </svg>
                Carousel
            </span>
        </label>
        <label class="form-selectgroup-item">
            <input :filter="$filter" type="radio" name="icons" value="carouselindicators" id="fiter_carouselindicators"
                class="form-selectgroup-input" value="indicators" >
            <span class="form-selectgroup-label">
                <!-- Download SVG icon from http://tabler-icons.io/i/square -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="16" height="16" rx="2">
                    </rect>
                </svg>
                Carousel with indicators
            </span>
        </label>
        <label class="form-selectgroup-item">
            <input :filter="$filter" type="radio" name="icons" value="carouselcontrols" id="fiter_carouselcontrols"
                class="form-selectgroup-input" value="controls">
            <span class="form-selectgroup-label">
                <!-- Download SVG icon from http://tabler-icons.io/i/square -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="16" height="16" rx="2">
                    </rect>
                </svg>
                Carousel with controls
            </span>
        </label>
    </div>

    <div class="row mt-3">
        @if($this->filter == "carousel")
            <div class="col-md-12">
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
        @endif
        @if($this->filter == "carouselindicators")
            <div class="col-md-12">
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
        @endif
        @if($this->filter == "carouselcontrols")
            <div class="col-md-12">
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
        @endif
    </div>
</div>
