<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon/logo.png" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
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
        }

        .btn-primary,
        .btn-success {
            width: 100%;
            margin-top: 10px;
        }

        /* Styling for H2 */
        h2 {
            color: #007bff;
            /* Blue color */
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Custom style for table actions column */
        .table-actions {
            width: 80px;
        }
    </style>

    <title>Form Pendaftaraan</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('logout') }}" class="btn btn-danger">Keluar</a>
        <h2>Data Pemeriksaan</h2>
        <form action="#" method="GET">
            <div class="row mb-3">
                <div class="col-2">
                    <label for="tgl_awal" class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                </div>
                <div class="col-2">
                    <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                </div>
                <div class="col-1">
                    <label for="tgl_akhir" class="form-label"></label>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>
        <table class="table table-hover large" id="myTable">
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
        <div class="col-sm-2">
            <a href="{{ route('sensus.cetakLaporan') }}" class="btn btn-success">Cetak PDF</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script>
    new DataTable('#myTable', {
        info: false,
    });
</script>

</html>
