<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TASNIM VOYAGE | AGENT COMPTOIR</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet" />
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
                                <a class="nav-link text-light" href="#">Consulter la liste des pelerins</a>
                                <a class="nav-link text-light" href="#">Consulter les plaintes</a>
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

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body text-center bg-success text-white mb-3 pb-0 pt-0" style="font-size: 30px">
                            <p><strong>Liste des plaintes</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <table class="table text-center table-hover table-border-1">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Pelerin</th>
                                    <th>Description</th>
                                    <th>Date d'émission</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Helicia TSIKA</td>
                                    <td>j'ai egaré mon passeport</td>
                                    <td>04/08/2022</td>
                                    <td>
                                        <a href="#"><i class="fas fa-solid fa-eye text-success"></i></a>
                                <a href="#"><i class="fas fa-solid fa-trash-arrow-up text-danger"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Abdoulaye Mbaye</td>
                                    <td>j'ai pas retrouver mon numéro de chambre</td>
                                    <td>03/08/2022</td>
                                    <td>
                                        <a href="#"><i class="fas fa-solid fa-eye text-success"></i></a>
                                <a href="#"><i class="fas fa-solid fa-trash-arrow-up text-danger"></i></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
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