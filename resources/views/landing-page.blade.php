<html style="font-size: 16px;" lang="en" class="u-responsive-lg">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Event Florals">
    <meta name="description" content="">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script class="u-script" type="text/javascript" href="{{ asset('js/custom-js.js') }}" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.g   oogleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <link rel="stylesheet" href="{{ asset('css/custom-css.css') }}" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <meta name="theme-color" content="#f09640">
    <meta property="og:title" content="Page 5">
    <meta property="og:type" content="website">
</head>

<body data-path-to-root="/" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-2 u-section-1" id="sec-7fcd">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1 animated flipInX-played"
                data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500"
                data-animation-direction="X" style="will-change: transform; animation-duration: 1500ms;"> Flower Advisor
            </h2>
            <h5 class="u-align-center u-text u-text-default u-text-1 animated flipInX-played"
                data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500"
                data-animation-direction="X" style="will-change: transform; animation-duration: 1500ms;">
                <div id="hello"> Hello, {{ Auth::user()->name }}
                    <button class="btn btn-success" onclick="copy()">
                        <i class="bi bi-clipboard"></i>
                    </button>
                </div>

            </h5>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1 animated customAnimationIn-played"
                        src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500" style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img class="u-expanded-width u-image u-image-default u-image-1"
                                src="https://assets.nicepagecdn.com/d2cc3eaa/6245512/images/round-bouquets-pastel-pink-green-flowers-stand-long-di_1304-4695.jpg"
                                data-image-width="1380" data-image-height="920">
                            <h3 class="u-align-center u-text u-text-default u-text-2">Events</h3>
                            <p class="u-align-center u-text u-text-3"> Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident</p>
                            <div class="py-5">
                                <button type="button" class="btn btn-primary" onclick="window.open('https://www.floweradvisor.com.ph/flowersphilippines' + location.search)">
                                    someone’s day
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2 animated customAnimationIn-played"
                        src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500" style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <img class="u-expanded-width u-image u-image-default u-image-2"
                                src="https://assets.nicepagecdn.com/d2cc3eaa/6245512/images/young-women-enjoying-bachelorette-party_23-2149278374.jpg"
                                data-image-width="1380" data-image-height="920">
                            <h3 class="u-align-center u-text u-text-default u-text-4">Weddings<br>
                            </h3>
                            <p class="u-align-center u-text u-text-5"> Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident</p>
                            <div class="py-5">
                                <button type="button" class="btn btn-primary" onclick="window.open('https://www.floweradvisor.com.ph/flowersphilippines' + location.search)">
                                    someone’s day
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="u-align-center u-text u-text-default u-text-6 animated customAnimationIn-played"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"
                style="will-change: transform, opacity; animation-duration: 1500ms;">find us on apple store
                <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/"
                    class="u-border-1 u-border-active-palette-1-dark-1 u-border-hover-palette-1-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-btn u-button-link u-button-style u-none u-text-palette-1-dark-3 u-btn-1"
                    target="_blank" data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                    data-animation-direction="">
                    <i class="bi bi-apple"></i>
                </a>
            </p>
        </div>
    </section>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="https://www.floweradvisor.com.ph" target="_blank"
                    class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <span class="text-muted"> <i class="bi bi-flower1"></i>
                </a>
                2024 Company, Inc </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-muted" href="{{ url('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </footer>
    </div>

    <style>
        .u-disable-duration * {
            transition-duration: 0s !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function copy() {
            let text = $('#hello').text();
            // Copy the text inside the text field
            navigator.clipboard.writeText(text);
            alert("Copied the text: " + text);
        }
    </script>
</body>

</html>
