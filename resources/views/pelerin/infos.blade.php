<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TASNIM VOYAGE | PELERIN</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css">
    <script src="fontawesome/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">TASNIM VOYAGE</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars text-light"></i></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">

            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users text-light"></i></div>
                            MENU
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-light"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-light" href="{{route('infosPelerin')}}">Consulter mes
                                    informations</a>
                                <a class="nav-link text-light" href="{{route('coursPelerin')}}">Consulter un cours</a>
                                <a class="nav-link text-light" href="{{route('plainteForm')}}">Deposer une plainte</a>
                            </nav>
                        </div>


                        <a class="nav-link text-light" href="{{route('signout')}}"><i
                                class="fa-solid fa-right-from-bracket text-light"></i>Se déconnecter</a>

                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container mt-3">
                <div class="card bg-light mb-5">
                    <h2 style="text-align: center;font-size:30px;">Mes informations</h2>
                </div>
                <div class="col-sm-12 pt-90">
                    <div class="card-body text-center bg-light mb-3 pb-0 pt-0" style="font-size: 30px">
                        <p><strong>Informations d'identification</strong></p>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-light">
                            <th>#</th>
                            <th>Nom</th>
                            <th>Identifiant</th>
                            <th>Nature</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{Auth::user()->id}} </td>
                            <td>{{Auth::user()->name}} </td>
                            <td>{{Auth::user()->identifiant}} </td>
                            <td> {{Auth::user()->type_user}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container mb-3">
                <div class="col-sm-12 pt-90">
                    <div class="card-body text-center bg-light mb-3 pb-0 pt-0" style="font-size: 30px">
                        <p><strong>Informations personnelles</strong></p>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-light">
                            <th>#</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Date de naissace</th>
                            <th>Contact</th>
                            <th>Numéro CNI/Passeport</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{$pel->id}}</td>
                            <td>{{$pel->prenom}} </td>
                            <td>{{$pel->nom}} </td>
                            <td>{{$pel->date_nais}} </td>
                            <td>{{$pel->contact}} </td>
                            <td>{{$pel->passeport}} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- <div class="container mb-3">
                <div class="col-sm-12 pt-90">
                    <div class="card-body text-center bg-light mb-3 pb-0 pt-0" style="font-size: 30px">
                        <p><strong>Informations d'hergement</strong></p>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-light">
                            <th>#</th>
                            <th>Type de chambre</th>
                            <th>Nombre de places</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{$chambre->id}}</td>
                            <td>{{$chambre->type}} </td>
                            <td>{{$chambre->nombre_place}} </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}

        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
