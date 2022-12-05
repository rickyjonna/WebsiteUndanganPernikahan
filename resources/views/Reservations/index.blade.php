<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title>{{ $title }}</title>
</head>

<body>
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <table>
        <tr>
            <th>Nama</th>
            <th>No.Handphone(WA)</th>
            <th>Ucapan</th>
        </tr>

        @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->phone_number }}</td>
                <td>{{ $reservation->wish }}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-4 ">
        {{ $reservations->links() }}
    </div>
</body>

</html>
