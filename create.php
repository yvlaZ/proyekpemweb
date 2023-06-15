<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Pasien</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h2 class="h2 text-center mt-4">Tambah Data Pasien</h2><br>
        </div>
        <div class="container mt-1 shadow-sm p-3 bg-body rounded col-7" id="" aria-hidden="true">
            <form action="?c=Pasien&m=create_process" method="post" onsubmit="" class="row g-3">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input  type="text" class="form-control form-control-sm" id="nama" placeholder="Masukkan nama pasien" required>
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control form-control-sm" id="umur" placeholder="Masukkan umur pasien" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select form-select-sm" id="jenis_kelamin" aria-label=".form-select-sm example">
                        <option selected>Pilih jenis kelamin</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="riwayat_penyakit">Riwayat Penyakit</label>
                    <input type="text" class="form-control form-control-sm" id="riwayat_penyakit" placeholder="Masukkan riwayat penyakit pasien" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Masukkan alamat pasien" required>
                </div>
                <div class="form-group">
                    <label for="no_telpon">Nomor Telepon</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="no_telpon">+62</span>
                        <input type="number" class="form-control form-control-sm" id="no_telpon" placeholder="Masukkan nomor telepon pasien" required>
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary shadow-sm fw-semibold" type="submit" value="add">Tambah Pasien</button>
                </div>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>
