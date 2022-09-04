@extends('layouts.mastermed')
@section('content')

<div id="layoutSidenav_content">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-1 text-center">Formulaire</h3>
                            <p class="text-dark-50 mt-0 mb-5 text-center">Séance de consultation</p>

                            <form action="/addconsultation" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="form-group mb-3">
                                        <select class="select form-control-lg" name="pelerin_id">
                                            <option value="0" disabled selected>-- Choisir --</option>

                                            @foreach ($pelerins as  $pelerin)
                                                <option value="{{$pelerin->id}}">{{$pelerin->prenom}} {{$pelerin->nom}}</option>
                                            @endforeach

                                        </select>
                                        <label class="form-label select-label">Choisissez un pèlerin</label>

                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-12 mb-4">

                                        <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                            <i class="fas fa-angle-double-right prefix"></i>
                                            <textarea name="observation" id="observation" class="md-textarea form-control" rows="3"></textarea>
                                            <label for="observation">Observation</label>
                                          </div>

                                    </div>
                                    <div class="col-md-12 mb-4">

                                        <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                            <i class="fas fa-angle-double-right prefix"></i>
                                            <textarea id="prescription" name="prescription" class="md-textarea form-control" rows="3"></textarea>
                                            <label for="prescription">Precription</label>
                                          </div>

                                    </div>
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline">
                                            <input type="date" id="date_prescription" name="date_prescription"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="date_prescription">Date de precription</label>
                                        </div>

                                    </div>
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline">
                                            <input type="date" id="date_rendez_vous" name="date_rendez_vous"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="date_rendez_vous">Date de rendez-vous</label>
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

@endsection
