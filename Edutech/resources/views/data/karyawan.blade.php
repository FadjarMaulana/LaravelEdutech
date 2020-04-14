<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar karyawan</h1>
    <ul>
        @foreach ($karyawan as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <div>
        Copyright <?php echo date('Y'); ?> PT ABC
    </div>

</body>
</html>