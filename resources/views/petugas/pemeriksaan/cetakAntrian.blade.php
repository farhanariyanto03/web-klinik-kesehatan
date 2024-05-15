<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu No Antrian</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        window.print();
    </script>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .card-footer {
            background-color: #f0f0f0;
            padding: 10px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h2>No Antrian</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Antrian: {{ $pemeriksaan->no_antrian }}</h3>
            <p class="card-text">Silakan menunggu giliran Anda.</p>
        </div>
        <div class="card-footer">
            <p>Tanggal: {{ $pemeriksaan->tggl_pemeriksaan }}</p>
        </div>
    </div>
</body>

</html>
