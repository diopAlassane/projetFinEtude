

<div class="container mt-3">
    <div class="card bg-light mb-5">
        <h2 style="text-align: center;font-size:30px;">La liste des pèlerins</h2>
    </div>
    <h5>Liste générer le {{date('d/m/y')}} à {{date('H:i:s')}}</h5>
    <table class="table table-striped bg-dark text-light">
        <thead>
            <tr class="bg-light">
                <th scope="col">#</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">CIN/Passeport</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelerins as $pelerin)

            <tr>
                <td scope="row">{{$pelerin->id}}</td>
                <td>{{$pelerin->prenom}}</td>
                <td>{{$pelerin->nom}}</td>
                <td>{{$pelerin->date_nais}}</td>
                <td>{{$pelerin->passeport}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>


