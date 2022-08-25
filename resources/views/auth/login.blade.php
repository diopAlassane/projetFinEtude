<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TASNIM VOYAGE | login</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-success text-white" style="border-radius: 1rem;">
                        <div class="card-body p-2 text-center">

                            <div class="mb-md-3 mt-md-2 pb-3">

                                <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                                <p class="text-white-50 mb-5">Veuillez saisir votre identifiant et votre mot de passe !</p>
                                <form method="POST" action="{{ route('login.custom') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" placeholder="Identifiant" id="identifiant" class="form-control" name="identifiant" required
                                        autofocus>
                                        @if ($errors->has('identifiant'))
                                        <span class="text-danger">{{ $errors->first('identifiant') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#">mot de passe oublié ?</a>
                                    </p>
                                    <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Se connecter</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>


{{-- <form method="POST" action="{{ route('login.custom') }}">
    @csrf
    <div class="form-group mb-3">
        <input type="text" placeholder="Identifiant" id="identifiant" class="form-control" name="identifiant" required
            autofocus>
        @if ($errors->has('identifiant'))
        <span class="text-danger">{{ $errors->first('identifiant') }}</span>
        @endif
    </div>
    <div class="form-group mb-3">
        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="form-group mb-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
    </div>
    <div class="d-grid mx-auto">
        <button type="submit" class="btn btn-dark btn-block">Signin</button>
    </div>
</form> --}}
