<!DOCTYPE html>
<html>

<head>
    <title>Update Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="h2 text-center mt-4">Update Data Pasien</h2><br>
    </div>
    <div class="container mt-1 shadow-sm p-3 bg-body rounded col-7" id="" aria-hidden="true">
        <form action="?c=Pasien&m=update" method="post" onsubmit="" class="row g-3">
            <input type="hidden" name="id_pasien" value="<?php echo $pasien->id_pasien ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control form-control-sm" name="nama" value="<?php echo $pasien->nama;?>" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control form-control-sm" name="umur" value="<?php echo $pasien->umur; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select form-select-sm" name="jenis_kelamin" aria-label=".form-select-sm example" value="<?php echo $pasien->jenis_kelamin; ?>" required>
                    <option selected>Pilih jenis kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="riwayat_penyakit">Riwayat Penyakit</label>
                <input type="text" class="form-control form-control-sm" name="riwayat_penyakit" value="<?php echo $pasien->riwayat_penyakit; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control form-control-sm" name="alamat" value="<?php echo $pasien->alamat; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telpon">Nomor Telepon</label>
                <div class="input-group input-group-sm">
                    <span class="input-group-text" name="no_telpon">+62</span>
                    <input type="number" class="form-control form-control-sm" name="no_telpon" value="<?php echo $pasien->no_telpon; ?>" required>
                </div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary shadow-sm fw-semibold" type="submit" value="save">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>