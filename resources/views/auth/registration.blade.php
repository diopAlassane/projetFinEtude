@extends('layouts.masteradmin')
@section('content')
<div id="layoutSidenav_content">

    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <h3 class="card-header text-center">Ajouter un compte utilisateur</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                {{-- {!! csrf_field() !!} --}}
                                {{-- @method("PATH") --}}
                                <div class="form-group mb-3">
                                    <select class="select form-control-lg" name="name">
                                        <option value="0" disabled selected>-- Choisir --</option>
                                        {{-- <option value="1">{{$utilisateur['id']}}</option> --}}
                                        <option value="Alassane DIOP" >Alassane DIOP</option>
                                        <option value="Tsika Helicia">Tsika Helicia</option>
                                        <option value="Test 3">Test</option>
                                    </select>
                                    <label class="form-label select-label">Choisissez un utilisateur</label>

                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Identifiant" id="identifiant"
                                        class="form-control" name="identifiant" required autofocus>
                                    @if ($errors->has('identifiant'))
                                    <span class="text-danger">{{ $errors->first('identifiant') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Mot de passe" id="password"
                                        class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div> --}}
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


</div>

@endsection
