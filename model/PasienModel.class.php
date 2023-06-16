<?php
class PasienModel extends Model
{
     public function getAll()
     {
          $sql = 'SELECT * FROM pasien ORDER BY id_pasien DESC';
          return $this->mysqli->query($sql);
     }

     public function insert($nama, $umur, $jenis_kelamin, $riwayat_penyakit, $alamat, $no_telpon)
     {
          $sql = "INSERT INTO pasien (nama, umur, jenis_kelamin, riwayat_penyakit, alamat, no_telpon) 
   VALUES ('$nama', '$umur', '$jenis_kelamin', '$riwayat_penyakit', '$alamat', '$no_telpon')";
          $this->mysqli->query($sql);
     }

     public function getById($id_pasien)
     {
          $sql = "SELECT * FROM pasien WHERE id_pasien = $id_pasien";
          return $this->mysqli->query($sql);
     }
     public function update($id_pasien, $nama, $umur, $jenis_kelamin, $riwayat_penyakit, $alamat, $no_telpon)
     {
          $sql = "UPDATE pasien SET nama = '$nama', 
                            umur = '$umur',
                            jenis_kelamin = '$jenis_kelamin',
                            riwayat_penyakit = '$riwayat_penyakit',
                            alamat = '$alamat',
                            no_telpon = '$no_telpon',
                             WHERE id_pasien = '$id_pasien'";

          $this->mysqli->query($sql);
     }

     public function delete($id_pasien)
     {
          $sql = "DELETE FROM post WHERE id_pasien = $id_pasien";
          $this->mysqli->query($sql);
     }
}
