<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TASNIM VOYAGE | AGENT HEBERGEMENT</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet" />
    <link href="css/style2.css" rel="stylesheet" />
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
                                <a class="nav-link text-light" href="#">Hôtel</a>
                                <a class="nav-link text-light" href="#">Chambre</a>
                                <a class="nav-link text-light" href="#">Consulter la liste des pelerins</a>
                            </nav>
                        </div>


                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket text-light"></i>
                            </div>
                            Se déconnecter

                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">


            <div class="container mt-3">
                <div class="card bg-light mb-5">
                    <h2 style="text-align: center;font-size:30px;">La liste des chambre</h2>
                </div>
                <nav class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <a href="{{route('addChambre')}}" class="btn btn-primary btn-sm p-2 mb-1">Nouveau</a>
                        <form class="d-flex" method="GET" action="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Saisir..."
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-light">
                            <th>#</th>
                            <th>Hôtel</th>
                            <th>Type</th>
                            <th>Nombre de place</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chambre as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item->hotel_id}}</td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->nombre_place}}</td>
                            <td>
                                {{-- <a href="#"><i class="fas fa-solid fa-eye text-success"></i></a> --}}
                                <a href="{{route('destroy',$item['id'])}}"><i class="fas fa-solid fa-trash-arrow-up text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

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
