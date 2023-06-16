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
        <button onclick="app.initializeAdd()" class="btn btn-success">Tambahkan Pasien</button>
        <p id="counter"></p>
        <table class="table" style="border-radius: 20;">
            <tr style="background-color: rgb(255, 255, 255);">
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Kota</th>
                <th>Umur Pasien</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tbody id="pasien"></tbody>
        </table>
    </div>
    <script>
        function openDetail() {
            window.location.href = 'detaill.html';
        }

        function openEdit() {
            window.location.href = 'edit.php';
        }

        const app = new function () {
            this.el = document.getElementById("pasien")
            this.pasien = [{ np: "Adimasta", kota: "Depok", umur: "20" }]
            this.count = (data) => {
                var el = document.getElementById("counter")
                if (data && data >= 1) {
                    el.innerHTML = data + ' pasien'
                } else {
                    el.innerHTML = 'Tidak ada pasien'
                }
            }
            this.FetchAll = () => {
                var data = ''
                if (this.pasien.length > 0) {
                    for (var i = 0; i < this.pasien.length; i++) {
                        data += '<tr >'
                        data += '<td>' + (i + 1) + '</td>'
                        data += '<td>' + this.pasien[i].np + '</td>'
                        data += '<td>' + this.pasien[i].kota + '</td>'
                        data += '<td>' + this.pasien[i].umur + '</td>'
                        data += '<td><button class="btn btn-info" onclick="openDetail()">Show</button></td>'
                        data += '<td><button class="btn btn-warning" onclick="openEdit()">Edit</button></td>'
                        data += '<td><button class="btn btn-danger" onclick="">Delete</button></td>'
                        data += '</tr>'
                    }
                }
                this.count(this.pasien.length)
                return this.el.innerHTML = data
            }
        }
        app.FetchAll()
    </script>
</body>

</html>