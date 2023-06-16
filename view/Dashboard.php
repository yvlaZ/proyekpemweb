<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <title>Data Pasien</title>
</head>

<body>
    <div class="container">
        <h1 class="h2 text-center mt-4">Data Pasien</h1>
        <a href="view/create.php?c=Pasien" class="btn btn-success">Tambahkan Pasien</a>
        <p id="counter"></p>
        <table class="table" style="border-radius: 20;">
            <tr style="background-color: rgb(255, 255, 255);">
                <th>Nama Pasien</th>
                <th>Kota</th>
                <th>Umur Pasien</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tbody>
                <?php
                if (!$pasiens->num_rows) {
                    echo 'No pasien';
                } else {
                    while ($pasien = $pasiens->fetch_object()) {
                        echo "<tr>",
                        "<td>", $pasien->nama, "</td>",
                        "<td>", $pasien->alamat, "</td>",
                        "<td>", $pasien->umur, "</td>",
                        "<td>", "<a href=\"view/detail.php?c=Pasien\" class=\"btn btn-info\">", "Show", "</a>", "</td>",
                        "<td>", "<button class='btn btn-warning' onclick='openEdit()'>", "Edit", "</button>", "</td>",
                        "<td>", "<button class='btn btn-danger' onclick='delete()'>", "Delete", "</button>", "</td>",
                        "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function openDetail() {
            window.location.href = 'detaill.html';
        }

        function openEdit() {
            window.location.href = 'edit.php';
        }
        app.FetchAll()
    </script>
</body>

</html>