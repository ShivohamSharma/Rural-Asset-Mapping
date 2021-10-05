<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="map.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <title>
        Rural Asset Mapping
    </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
<div style="display: flex; flex-direction: column; height: 100%; width: 100%">
    <!--this is the header bar-->
    <div class="container headerstyling headerbg">
        <header class="d-flex flex-wrap justify-content-center py-3 ">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4 titletext"><img src="map.png" id="titleimg"> Rural Asset Mapping</span>
            </a>

            <div style="display: flex; align-items: center;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
            </div>
        </header>
    </div>

    <!-- now we will add the sidebar with the buttons-->
    <div class="row"
    style="margin-top: 0px; margin-right: 0px; margin-left: 0px; display: flex; flex-direction: row; flex: 1;">
        <!-- this is the sidebar-->
        <div class="flex-shrink-0 p-3 col-md-3 maxVH tabbar" style="width: auto;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#bootstrap" /></svg>
                <span class="fs-5 fw-semibold">Menu</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        Layers
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="onlystreet.php" class="link-dark rounded">Streets</a></li>
                            <li><a href="onlychhappad.php" class="link-dark rounded">Chhappad</a></li>
                            <li><a href="religiousplaces.php" class="link-dark rounded">Religious Places</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Select Area
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Select State</a></li>
                            <li><a href="#" class="link-dark rounded">Select District</a></li>
                            <li><a href="#" class="link-dark rounded">Select Block</a></li>
                            <li><a href="#" class="link-dark rounded">Select Village</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse" aria-expanded="false">
                        Ramgarh Channa
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark rounded">Population</a></li>
                                <li><a href="#" class="link-dark rounded">Area</a></li>
                                <li><a href="#" class="link-dark rounded">Sarpanch</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">New</a></li>
                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        Legends
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/autostand.png"> Auto Stand</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/brickroad.png"> Brick Road</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/cemetery.png"> Cemetery</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/chappad.png"> Chhappad</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/chaupal.png"> Chaupal</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/communityhouse.png"> Community House</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/concrete.png"> Concrete Road</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/cremation.png"> Cremation Ground</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/dharamshala.png"> Dharamshala</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/gogamedi.png"> Goga medi Mandir</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/gurudwara.png"> Gurudware</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/interlocked.png"> Interlocked Tiles Road</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/mainroad.png"> Main Road</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/mosque.png"> Mosque</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/school.png"> School</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/watertank.png"> Water Tank</span></a></li>
                            <li><a href="#" class="link-dark rounded"><span><img src="iconpack/youthclub.png"> Youth Club</span></a></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- this is the map-->
        <div class="col-md-9" style="flex: 1; padding: 0;">
            <div id="map"></div>
        </div>
    </div>

    <!-- this is the place for an offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Marker Information</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <li>Date of repair - 2018</li>
            <li>Total Cost - 5.1 Lakh</li>
            <li>Funding Department - R.D.F</li>
            <li>Executing Department - Gram Panchayat </li>
            <li>Parent Scheme - State</li>
            <li>Total Cost - 5.1 Lakh</li>
            
        </div>
    </div>
    </div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6oliVIDI_59mfhV7Fc6CuZ6Y4QiR6xwM&callback=initMap&libraries=&v=weekly"
        async></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="index.js"></script>
</body>

</html>