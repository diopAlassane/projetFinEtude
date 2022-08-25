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
                        <div class="sb-sidenav-menu-heading">Bord</div>
                        <a class="nav-link text-light" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-light"></i></div>
                            Tableau de bord
                        </a>

                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users-gear text-light"></i></div>
                            Gestion Pèlerin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-light"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-light" href="#">Ajouter un pèlerin</a>
                                <a class="nav-link text-light" href="#">Liste les pèlerins</a>
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
            <form action="/addPel" method="POST">
                @csrf
                <section class="h-100 h-custom gradient-custom-2">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5" style="color: #000000;">Informations
                                                        personnelles
                                                    </h3>
                                                    <div class="row">

                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" id="prenom" name="prenom"
                                                                    class="form-control form-control-lg" />
                                                                <label class="form-label" for="prenom">
                                                                    Prénom</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" id="nom" name="nom"
                                                                    class="form-control form-control-lg" />
                                                                <label class="form-label" for="nom">Nom
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="date" id="date_nais" name="date_nais"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="date_nais">Date de
                                                                naissance</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                            <div class="form-outline">
                                                                <input type="text" id="passeport" name="passeport"
                                                                    class="form-control form-control-lg" />
                                                                <label class="form-label" for="passeport">Numéro
                                                                    passeport</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" id="contact" name="contact"
                                                                    class="form-control form-control-lg" />
                                                                <label class="form-label" for="contact">
                                                                    Contact</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" id="affinite" name="affinite"
                                                                    class="form-control form-control-lg" />
                                                                <label class="form-label" for="nom">Affinité
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                <div class="form-outline">
                                                                    <input type="mail" id="email" name="email"
                                                                        class="form-control form-control-lg" />
                                                                    <label class="form-label" for="email">E-mail
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                <div class="form-outline">
                                                                    <select name="niveau_etude" id="niveau_etude"
                                                                        class="form-control form-control-lg text-center">
                                                                        <option value="1" disabled selected>-- Choisir --
                                                                        </option>
                                                                        <option value="J'ai pas fréquenté l'école">J'ai pas fréquenté l'école
                                                                        </option>
                                                                        <option value="Niveau primaire">Niveau primaire</option>
                                                                        <option value="Niveau collége">Niveau collége</option>
                                                                        <option value="Niveau Lycée">Niveau Lycée</option>
                                                                        <option value="Niveau secondaire">Niveau secondaire</option>
                                                                    </select>
                                                                    <label class="form-label" for="passeport">
                                                                        Niveau d'étude</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                <div class="form-outline">
                                                                    <input type="mail" id="langueParler" name="langueParler"
                                                                        class="form-control form-control-lg" />
                                                                    <label class="form-label" for="langue">Langue parlée
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                <div class="form-outline">
                                                                    <select name="situation_matrimonaile" id="situation_matrimonaile"
                                                                        class="form-control form-control-lg text-center">
                                                                        <option value="1" disabled selected>-- Choisir --
                                                                        </option>
                                                                        <option value="Marié">Marié</option>
                                                                        <option value="Célibataire">Célibataire</option>
                                                                    </select>
                                                                    <label class="form-label" for="passeport">
                                                                        Situation matrimoniale</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                                <div class="form-outline">
                                                                    <input type="text" id="adresse" name="adresse"
                                                                        class="form-control form-control-lg" />
                                                                    <label class="form-label" for="adresse">Adresse
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 bg-light text-black">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5">Personne à contacter en cas d'urgence
                                                    </h3>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="nom_conjoint" name="nom_conjoint"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="nomConj">Nom au complet
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="contact_conjoint" name="contact_conjoint"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="contact">Contact
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5">Informations supplémentaires
                                                    </h3>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="nombre_enfant" name="nombre_enfant"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="nomConj">Nombre enfants
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="profession" name="profession"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="contact">Profession
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-success btn-lg"
                                                        data-mdb-ripple-color="dark">Enregistrer</button>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </form>
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
