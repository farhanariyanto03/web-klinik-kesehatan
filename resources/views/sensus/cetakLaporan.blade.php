<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon/logo.png" />
    <script>
        window.print();
    </script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1300px;
            margin: 50px auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-bottom: 1px solid;
        }

        .logo-img {
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            gap: 10px;
        }

        .tulisan {
            display: flex;
            flex-direction: column;
        }

        .tulisan p{
            margin: 1px;
            padding: 0;
            font-size: 18px;
        }

        .tulisan .tulisan-bold{
            font-weight: 800;
        }

        .logo-img:before {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
        }

        .btn-primary,
        .btn-success {
            width: 100%;
            margin-top: 10px;
        }

        h2 {
            color: #007bff;
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .table-actions {
            width: 80px;
        }

        .ttd {
            display: flex;
            justify-content: flex-end;
        }

        .ttd p {
            margin-right: 20px;
            margin-top: 10px;
        }
        .pimpinan {
            display: flex;
            justify-content: flex-end;
        }

        .ttd p {
            margin-right: 20px;
        }

    </style>

    <title>Form Pendaftaraan</title>
</head>

<body>
    <div class="container">
        <div class="logo-img-container d-flex border p-2">
            <div class="logo-img">
                <img src="{{ asset('admin') }}/img/favicon/logo.png" style="height: 150px;" alt="Logo">
                <div class="tulisan">
                    <p class="tulisan-bold">RS Regional Medical Center</p>
                    <p>Jalan Jenderal Sudirman, Lemah Duwur, Dilem, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163</p>
                    <p  class="m-0"> 0812-4926-0499</p>
                </div>
            </div>
        </div>
        <h2 class="m-3">Data Pemeriksaan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No RM</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Diagnosa</th>
                    <th>Code</th>
                    <th>Resep Obat</th>
                    <th>Tanggal Pemeriksaan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data_pemeriksaan as $pemeriksaan)
                    <tr>
                        <td><?= $pemeriksaan['NO_RM'] ?></td>
                        <td><?= $pemeriksaan['nama_pasien'] ?></td>
                        <td><?= $pemeriksaan['jenis_kelamin'] ?></td>
                        <td><?= $pemeriksaan['tggl_lahir'] ?></td>
                        <td><?= $pemeriksaan['alamat'] ?></td>
                        <td><?= $pemeriksaan['diagnosa'] ?></td>
                        <td><?= $pemeriksaan['code'] ?></td>
                        <td><?= $pemeriksaan['resep_obat'] ?></td>
                        <td><?= $pemeriksaan['tggl_pemeriksaan'] ?></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="ttd">
            <p>Jember, ...-..................-....</p>
        </div>
        <div class="pimpinan">
            <p>Pimpinan Rumah Sakit</p>
        </div>
        <br><br><br><br>
        <div class="pimpinan">
            <p>[_____________________]</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
