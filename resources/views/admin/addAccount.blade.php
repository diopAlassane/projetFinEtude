<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADMIN | Account</title>
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
                        <div class="sb-sidenav-menu-heading">Bord</div>
                        <a class="nav-link text-light" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-light"></i></div>
                            Tableau de bord
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users text-light"></i></div>
                            Utilisateurs
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-light"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-light" href="#">Ajouter un utilisateur</a>
                                <a class="nav-link text-light" href="#">Liste les utilisateurs</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users-gear text-light"></i></div>
                            Comptes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-light"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-light" href="#">Ajouter un compte</a>
                                <a class="nav-link text-light" href="#">Liste les comptes</a>
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

            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">
                                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-1 text-center">Formulaire</h3>
                                    <p class="text-dark-50 mt-0 mb-5 text-center">Veuillez remplir le formulaire pour créer un compte utilisateur</p>

                                    <form action="{{route('addAccount')}}" method="POST">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">

                                                <select class="select form-control-lg" name="name">
                                                  <option value="1" disabled>-- Choisir --</option>
                                                  <option value="2">Alassane Diop</option>
                                                  <option value="3">Helicia Tsika</option>
                                                  <option value="4">Modou Fall</option>
                                                </select>
                                                <label class="form-label select-label">Séléctionner un utilisateur </label>

                                              </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="email" name="email"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="email">Identifiant</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="password" name="password"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="password">Mot de passe</label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="mt-4 pt-2">
                                            <input class="btn btn-success btn-lg" type="submit" name="sutmit" value="Enregistrer" />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
