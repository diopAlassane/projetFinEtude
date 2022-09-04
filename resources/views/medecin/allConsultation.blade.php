@extends('layouts.mastermed')
@section('content')

        <div id="layoutSidenav_content">


            <div class="container mt-3">
                <div class="card bg-light mb-5">
                    <h2 style="text-align: center;font-size:30px;">La liste des consultation</h2>
                </div>
                <div class="row">
                    {{-- message de succes ou erreur --}}
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <nav class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <a href="{{route('addMedoc')}}" class="btn btn-primary btn-sm p-2 mb-1">NOUVEAU</a>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-light">
                            <th>#</th>
                            <th>ID pèlerin</th>
                            <th>Observation</th>
                            <th>Prescription</th>
                            <th>Date prescription</th>
                            <th>Date rendez-vous</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultation as $consultation)

                        <tr>
                            <td>{{$consultation->id}}</td>
                            <td>{{$consultation->pelerin_id}}</td>
                            <td>{{$consultation->observation}}</td>
                            <td>{{$consultation->prescription}}</td>
                            <td>{{$consultation->date_prescription}}</td>
                            <td>{{$consultation->date_rendez_vous}}</td>
                            <td>
                                {{-- <a href="{{route('show', $pelerin)}}">
                                    <i class="fas fa-solid fa-eye text-success"></i></a> --}}
                                {{-- <a href="{{route('consultation.destroy', $consultation)}}" onclick="event.preventDefault();
                                document.getElementById('consultation-delete').submit();">
                                    <i class="fas fa-solid fa-trash-arrow-up text-danger"></i>
                                </a>
                                <form id="consultation-delete" action="{{route('consultation.destroy', $consultation)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                                <a href="{{route('consultation.downloadPDF', $consultation)}}">
                                    <i class="fas fa-file-pdf ml-100"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           {{--  <tfoot class="">
                <tr>
                    <td colspan="13">{!! $pelerins->render() !!}</td>
                </tr>
            </tfoot> --}}
        </div>
        @endsection


