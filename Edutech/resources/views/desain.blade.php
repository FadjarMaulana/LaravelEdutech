<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1 class="text-center">DIVISI DESAIN</h1>
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Bagian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        @foreach ($karyawan7 as $item7)
                            <td>{{ $item7 }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        @foreach ($karyawan8 as $item8)
                            <td>{{ $item8 }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        @foreach ($karyawan9 as $item9)
                            <td>{{ $item9 }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>