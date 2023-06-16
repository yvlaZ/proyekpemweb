<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <title>Detail Mahasiswa</title>
    <style>
        body {
            margin: 25px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        table,
        th,
        td {
            border: 1px solid black;

        }
    </style>
</head>

<body>
    <h2 class="h2 text-center mt-4">Detail Pasien</h2>
    <h2 class="h2 text-center mt-4">Adimasta Rafindani</h2><br>
    <div class="container mt-3 mb-3 shadow-sm p-3 mb-5 bg-body rounded" id="addspoiler" aria-hidden="true">
        <table class="table" style="border-radius: 20; margin: 0 25%; width: 50%;">
            <tr style="background-color: rgb(255, 255, 255);">
                <th>Id</th>
                <td>...</td>
            </tr>
            <tr>
                <th>Umur</th>
                <td style="width:75%;">...</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>...</td>
            </tr>
            <tr>
                <th>Riwayat Penyakit</th>
                <td>...</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>...</td>
            </tr>
            <tr>
                <th>No Telpon</th>
                <td>...</td>
            </tr>
            <tbody id="mahasiswa"></tbody>
        </table>
        <br>
        <div class="container" style="margin-left: 65%;">
            <button class="btn btn-primary btn-lg">Kembali</button>
            <p id="counter"></p>
        </div>
    </div>
</body>

</html>