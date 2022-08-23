
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>
<body>
    <h3 style="text-align: center">Dotation Materiel PDF Export</h3>
    <table class="table table-striped w-100" id="customers" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th class="wd-25p">Nom</th>
                <th class="wd-25p">Date</th>
                <th class="wd-15p">Photos</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            @foreach ($donation_materiels as $materiel )


                @php
                    $img1 = (!empty($materiel->img1)) ? '1':'0';
                    $img2 = (!empty($materiel->img2)) ? '1':'0';
                    $img3 = (!empty($materiel->img3)) ? '1':'0';
                    $img4 = (!empty($materiel->img4)) ? '1':'0';

                    $img_count = $img1 +$img2 + $img3 + $img4;
                @endphp
                <tr class="data-materiel-id_{{$materiel->id}}">
                    <td>
                        {{$materiel->id}}
                    </td>
                    <td>{{$materiel->materiel_name}}</td>
                    <td>{{$materiel->obtained}}</td>
                    <td>{{$img_count}}</td>
                    <td>Supprimer</td>

                </tr>
            @endforeach


        </tbody>
    </table>

</body>
</html>

