<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Consultation - {{$consultation->pelerin_id}}</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-6 mb-100">
            <h6>TASNIM VOYAGES</h6>
            <h6>Tel: 33 832 88 33</h6>
        </div>
        <div class="col-sm-6">
            <p class="">M./Mme: .......................................................................</p>
            <p class="">Age: ....................................................</p>
        </div>
    </div>
    <div class="card bg-light mb-5">
        <h2 style="text-align: center;font-size:30px;">ORDONNACE</h2>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    N°
                </th>
                <th>
                    Patient N°
                </th>
                <th>
                    Prescription
                </th>
                <th>
                    Date de prescription
                </th>
        </thead>
        <tbody>
            <td>{{$consultation->id}}</td>
            <td>{{$consultation->pelerin_id}}</td>
            <td>{{$consultation->prescription}}</td>
            <td>{{$consultation->date_prescription}}</td>
        </tbody>

    </table>

    <H4 style="margin-top: 100px">Prochain rendez-vous: {{$consultation->date_rendez_vous}}</H4>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(250, 245, 245);
            color: black;
            text-align: center;
            border-top: 3px solid black
        }
    </style>
    <div class="footer">
        <p>Prière de rapporter l'ordonnace à la prochaine consultation</p>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
