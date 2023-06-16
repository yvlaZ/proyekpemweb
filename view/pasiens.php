<a href="view/create.php?c=Pasien">Tambah Pasien</a><br>


<?php if (!$pasiens->num_rows) {
  echo 'No pasien';
} else {
  while ($pasien = $pasiens->fetch_object()) {
    echo "<h3>$pasien->nama</h3>";
    echo "<a href=\"view/edit.php?c=Pasien&m=edit&id=$pasien->id_pasien\">Edit</a>";
    printf('<form action="?c=Pasien&m=delete" method="post"><input type="hidden" name="id" value="%d"><input type="submit" value="Delete"></form>', $pasien->id_pasien);
    echo "<p align=\"justify\">$pasien->riwayat_penyakit</p>";
  }
}

?>