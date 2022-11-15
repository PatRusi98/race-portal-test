<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Patrik Rusiňák">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race Portal</title>
    <link rel="stylesheet" href={{'/css/style.css'}} type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="pr-body">
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href={{url('/')}}>
            <img src="/img/flag-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Race Portal
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href={{url('/championships')}} data-bs-toggle="modal" data-bs-target="#exampleModal">Championships</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href={{url('/free-races')}}>Free Races</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href={{url('/drivers')}} data-bs-toggle="modal" data-bs-target="#exampleModal">Drivers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href={{url('/teams')}}>Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="https://virtualracingnation.com/">Main Page</a>
                </li>
            </ul>
        </div>
        <ul class="nav justify-content-right">
            <li class="nav-item right">
                <a class="nav-link text-light" href={{url('/login')}}>Log In</a>
            </li>
        </ul>
    </div>
</nav>

        @yield('content')

<footer class="text-center text-lg-start bg-dark text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-light"></i>About Us
                    </h6>
                    <p>
                        Virtual Racing Nation is czech and slovak simracing league on multiple simulators like rFactor 2, Assetto Corsa, iRacing, ect.

                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 text-light">
                        Simulators
                    </h6>
                    <p>
                        <a href={{url('/rfactor2')}} class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">rFactor 2</a>
                    </p>
                    <p>
                        <a href={{url('/ac')}} class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">Assetto Corsa</a>
                    </p>
                    <p>
                        <a href={{url('/acc')}} class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">Assetto Corsa Competizione</a>
                    </p>
                    <p>
                        <a href={{url('/iracing')}} class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">iRacing</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 text-light">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">rF2 Forums</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">AC Forums</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">SimHub</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">Telemetry</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 text-light">Contact</h6>
                    <p>
                        <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">Discord</a>
                    </p>
                    <p>
                        <i class="text-primary"></i>
                        admin@virtualracingnation.com
                    </p>
                    <p><i class="text-secondary"></i> + 420 123 456 78</p>
                    <p><i class="text-secondary"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4 pr-footer">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://virtualracingnation.com/">Virtual Racing Nation</a>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Not implemented yet
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    var menuItems = document.getElementById("menu-items");
    menuItems.style.maxHeight = "0px";
    function toggleMenu() {
        if(menuItems.style.maxHeight == "0px") {
            menuItems.style.maxHeight = "350px"
        } else {
            menuItems.style.maxHeight = "0px"
        }
    }
</script>
</body>
</html>
